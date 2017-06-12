<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Knowledge;
use App\Models\Personals\Personal;
use Session;

class KnowledgeCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $knowledge = new Knowledge();
        $knowledge->description = $request->description;
        $knowledge->country = $request->country;
        $knowledge->from_date = $request->from_date;
        $knowledge->to_date = $request->to_date;
        $knowledge->personal()->associate($personal);

        $knowledge->save();

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
      $knowledge = Knowledge::find($id);
      $knowledge->description = $request->description;
      $knowledge->country = $request->country;
      $knowledge->from_date = $request->from_date;
      $knowledge->to_date = $request->to_date;
      $knowledge->save();

        return back();
    }


    public function destroy($id)
    {
        $knowledge = Knowledge::find($id);
        $knowledge->delete();

        return redirect(route('personals.show', $knowledge->personal_id));
    }
}
