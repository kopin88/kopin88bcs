<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Personal;
use App\Models\Personals\Remark;

class RemarkCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Personal $personal)
    {
        $personal->remarks()->create($request->all());
        return redirect('/personals');;
    }

    public function delete($id)
    {
      $personal = Personal::find($id);
      $personal->active = 5;
      $personal->save();
      return back();
    }

    public function transfer($id)
    {
      $personal = Personal::find($id);
      $personal->active = 1;
      $personal->save();
      // return back();
      return view('personals.remarks.create')->withPersonal($personal);
    }

    public function resign($id)
    {
      $personal = Personal::find($id);
      $personal->active = 2;
      $personal->save();
      // return back();
      return view('personals.remarks.create')->withPersonal($personal);
    }

    public function pension($id)
    {
      $personal = Personal::find($id);
      $personal->active = 3;
      $personal->save();
      // return back();
      return view('personals.remarks.create')->withPersonal($personal);
    }

    public function transferList(Request $request)
    {
      $personals = Personal::where(function($query) use ($request) {
          // filter by keyword entered
          if (($term = $request->get('term'))) {
            $query->orWhere('name', 'like', '%' . $term . '%');
            $query->orWhere('serial', 'like', '%' . $term . '%');
            $query->orWhere('nrc', 'like', '%' . $term . '%');
          }
        })
          ->where('active', 1)
          ->orderBy("id", "desc")
          ->paginate(10);
       return view('personals.remarks.index')->withPersonals($personals);
    }

    public function resignList(Request $request)
    {
      $personals = Personal::where(function($query) use ($request) {
          // filter by keyword entered
          if (($term = $request->get('term'))) {
            $query->orWhere('name', 'like', '%' . $term . '%');
            $query->orWhere('serial', 'like', '%' . $term . '%');
            $query->orWhere('nrc', 'like', '%' . $term . '%');
          }
        })
          ->where('active', 2)
          ->orderBy("id", "desc")
          ->paginate(10);
       return view('personals.remarks.index')->withPersonals($personals);
    }

    public function pensionList(Request $request)
    {
      $personals = Personal::where(function($query) use ($request) {
          // filter by keyword entered
          if (($term = $request->get('term'))) {
            $query->orWhere('name', 'like', '%' . $term . '%');
            $query->orWhere('serial', 'like', '%' . $term . '%');
            $query->orWhere('nrc', 'like', '%' . $term . '%');
          }
        })
          ->where('active', 3)
          ->orderBy("id", "desc")
          ->paginate(10);
       return view('personals.remarks.index')->withPersonals($personals);
    }

}
