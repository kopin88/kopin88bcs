<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Acknowledge;
use App\Models\Personals\Personal;
use Session;

class AcknowledgeCtrl extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $acknowledge = new Acknowledge();
        $acknowledge->description = $request->description;
        $acknowledge->action = $request->action;
        $acknowledge->remark = $request->remark;
        $acknowledge->personal()->associate($personal);

        $acknowledge->save();

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
      $acknowledge = Acknowledge::find($id);
      $acknowledge->description = $request->description;
      $acknowledge->action = $request->action;
      $acknowledge->remark = $request->remark;
      $acknowledge->save();

        return back();
    }


    public function destroy($id)
    {
        $acknowledge = Acknowledge::find($id);
        $acknowledge->delete();

        return redirect();
    }
}
