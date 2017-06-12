<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\SpecialPost;
use App\Models\Personals\Personal;
use Session;

class SpecialPostCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $specialpost = new SpecialPost();
        $specialpost->description = $request->description;
        $specialpost->from_date = $request->from_date;
        $specialpost->to_date = $request->to_date;
        $specialpost->remark = $request->remark;
        $specialpost->personal()->associate($personal);

        $specialpost->save();

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
      $specialpost = SpecialPost::find($id);
      $specialpost->description = $request->description;
      $specialpost->from_date = $request->from_date;
      $specialpost->to_date = $request->to_date;
      $specialpost->remark = $request->remark;
      $specialpost->save();

        return back();
    }

    public function destroy($id)
    {
        $specialpost = SpecialPost::find($id);
        $specialpost->delete();

        return back();
    }
}
