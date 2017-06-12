<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Marital;
use App\Models\Personals\Personal;
use Session;

class MaritalCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $marital = new Marital();
        $marital->name = $request->name;
        $marital->desc = $request->desc;
        $marital->dob = $request->dob;
        $marital->personal()->associate($personal);

        $marital->save();

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
        $marital = Marital::find($id);
        $marital->name=$request->name;
        $marital->desc = $request->desc;
        $marital->dob=$request->dob;
        $marital->save();

        return back();
    }


    public function destroy($id)
    {
        $marital = Marital::find($id);
        $marital->delete();

        return redirect(route('personals.show', $marital->personal_id));
    }
}
