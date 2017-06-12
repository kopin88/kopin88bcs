<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Children;
use App\Models\Personals\Personal;
use Session;

class ChildrenCtrl extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }



  public function store(Request $request, $personal_id)
  {
      $personal = Personal::find($personal_id);

      $children = new Children();
      $children->name = $request->name;
      $children->dob = $request->dob;
      $children->personal()->associate($personal);

      $children->save();

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
      $children = Children::find($id);
      $children->name=$request->name;
      $children->dob=$request->dob;
      $children->save();

      return back();
  }


  public function destroy($id)
  {
      $children = Children::find($id);
      $children->delete();

      return redirect(route('personals.show', $children->personal_id));
  }
}
