<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Experience;
use App\Models\Personals\Personal;
use Session;

class ExperienceCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $experience = new Experience();
        $experience->org_dept = $request->org_dept;
        $experience->org_position = $request->org_position;
        $experience->tmp_position = $request->tmp_position;
        $experience->from_date = $request->from_date;
        $experience->to_date = $request->to_date;
        $experience->remark = $request->remark;
        $experience->personal()->associate($personal);

        $experience->save();

        Session::flash('success', 'Comment was added');
        return back();
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
      $experience = Experience::find($id);
      $experience->org_dept = $request->org_dept;
      $experience->org_position = $request->org_position;
      $experience->tmp_position = $request->tmp_position;
      $experience->from_date = $request->from_date;
      $experience->to_date = $request->to_date;
      $experience->remark = $request->remark;
      $experience->save();

        return back();
    }


    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();

        return back();
    }
}
