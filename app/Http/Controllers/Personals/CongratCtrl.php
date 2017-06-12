<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Congrat;
use App\Models\Personals\Personal;
use Session;

class CongratCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $congrat = new Congrat();
        $congrat->description = $request->description;
        $congrat->year = $request->year;
        $congrat->personal()->associate($personal);

        $congrat->save();

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
        $congrat = Congrat::find($id);
        $congrat->description=$request->description;
        $congrat->year=$request->year;
        $congrat->save();

        return back();
    }


    public function destroy($id)
    {
        $congrat = Congrat::find($id);
        $congrat->delete();

        return back();
    }
}
