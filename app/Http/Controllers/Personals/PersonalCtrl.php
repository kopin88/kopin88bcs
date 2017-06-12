<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Validation\Rule; // This validate rule for update

// use App\Http\Controllers\Personals\Validator;
use App\Models\Personals\Personal;
use App\Models\Personals\Dept;
use App\Models\Personals\Position;
use App\Models\Personals\Children;
use App\Models\Personals\Remark;

class PersonalCtrl extends Controller
{


    public function __construct()
    {
        // $this->middleware('roles', ['roles'=>['Administrator',  'Personal Manager', 'Personal Read', 'Personal Write']]);
        $this->middleware('auth');
    }


    private $rules =[
        'name' => 'required',
        // 'serial' => ['required|unique:personals|max:5'],
        'serial' => 'required|unique:personals',
        'nrc' => 'required|unique:personals',
        'image' =>'mimes:png,jpg,jpeg,bmp'
      ];

    private $uploads_dir;

    private function _construct()
    {
      $this->uploads_dir = base_path() . '/public/uploads/personal_images';
    }

    private function getDepts($value='')
    {
        $depts = [];
        foreach (Dept::all() as $dept) {
          $depts[$dept->id]= $dept->name;
        }
        return $depts;
    }


      private function get_request(Request $request)
      {
        $data = $request->all();
        if ($request->hasFile('image')) {
          // get file name
          $image = $request->file('image')->getClientOriginalName();
          // move image to Server
          $destination = base_path() . '/public/uploads/personal_images';
          $request->file('image')->move($destination, $image);

          $data['image'] = $image;
        }
        return $data;

        $data_update = $request->find($id);
        if ($request->hasFile('image')) {
          // get file name
          $image = $request->file('image')->getClientOriginalName();
          // move image to Server
          $destination = $this->uploads_dir;

          $request->file('image')->move($destination, $image);

          $data_update['image'] = $image;
        }

        return $data_update;
      }

    public function autocomplete(Request $request)
    {
      // prevent this method called by non ajax
      if ($request->ajax()) {
        $personals = Personal::where(function($query) use ($request) {
            // filter by keyword entered
            if (($term = $request->get('term'))) {
              $query->orWhere('name', 'like', '%' . $term . '%');
              $query->orWhere('serial', 'like', '%' . $term . '%');
              $query->orWhere('nrc', 'like', '%' . $term . '%');
            }
          })
            ->orderBy("id", "desc")
            ->take(10)
            ->get();

          // convert to json
          $results = [];
          foreach ($personals as $personal) {
            $results[] = ['id'=>$personal->id, 'value'=>$personal->name];
          }
          return response()->json($results);
      }
    }


    public function index(Request $request)
    {
        $personals = Personal::where(function($query) use ($request) {
            // filter by selected group
            if (($dept_id = $request->get("dept_id"))){
              $query->where('dept_id', $dept_id);
            }
            // filter by keyword entered
            if (($term = $request->get('term'))) {
              $query->orWhere('name', 'like', '%' . $term . '%');
              $query->orWhere('serial', 'like', '%' . $term . '%');
              $query->orWhere('nrc', 'like', '%' . $term . '%');
            }
          })
            ->where('active', 0)
            ->orderBy("id", "desc")
            ->paginate(10);
            return view("personals.index", [
            'personals' => $personals
        ]);
    }


  public function create()
    {
        $depts = $this->getDepts();
        return view('personals.create', compact('depts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $data = $this->get_request($request);
        Personal::create($data);

        return redirect("personals")->with('message', 'Saved!');
    }



    public function show($id)
    {
        $personal = Personal::find($id);
        return view("personals.show", [
            'personal' => $personal
        ]);
    }


    public function detail($id)
    {
        $personal = Personal::find($id);
        return view("personals.detail", [
            'personal' => $personal
        ]);
    }

    public function edit( Request $request, $id)
    {
      $personal = Personal::find($id);


        return view('personals.edit', compact('depts', 'personal'));
    }

    public function update($id, Request $request)
    {

      $personal = Personal::find($id);

      $this->validate($request,[
        'serial' => Rule::unique('personals')->ignore($personal->id, 'id'),
        'nrc' => Rule::unique('personals')->ignore($personal->id, 'id')

      ]);

      $data_update = $this->get_request($request);

      $personal->update($data_update);

      return redirect("personals")->with('message', 'Updated!');
    }

    // public function destroy($id)
    // {
    //     $personal = Personal::find($id);
    //
    //     if (!is_null($personal->image))
    //     {
    //       $file_path = $this->base_path() . '/public/uploads/personal_images' . '/' . $personal->image;
    //       if (file_exists($file_path)) unlink($file_path);
    //     }
    //
    //     $personal->delete();
    //
    //     return redirect("personals")->with("message", "Deleted");
    // }

    public function help()
    {
      return view('personals.help');
    }


}
