<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Heir;
use App\Models\Personals\Personal;
use Session;

class HeirCtrl extends Controller
{

      public function __construct()
      {
          $this->middleware('auth');
      }

      public function store(Request $request, $personal_id)
      {
          $personal = Personal::find($personal_id);

          $heir = new Heir();
          $heir->name = $request->name;
          $heir->related = $request->related;
          $heir->nrc = $request->nrc;
          $heir->remark = $request->remark;
          $heir->personal()->associate($personal);

          $heir->save();

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
        $heir = Heir::find($id);
        $heir->name=$request->name;
        $heir->related=$request->related;
        $heir->nrc=$request->nrc;
        $heir->remark=$request->remark;
        $heir->save();

        return back();
      }

      public function destroy($id)
      {
          //
      }
}
