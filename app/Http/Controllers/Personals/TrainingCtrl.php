<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Training;
use App\Models\Personals\Personal;
use Session;

class TrainingCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $training = new Training();
        $training->name = $request->name;
        $training->period = $request->period;
        $training->place = $request->place;
        $training->remark = $request->remark;
        $training->personal()->associate($personal);

        $training->save();

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
        $training = Training::find($id);
        $training->name=$request->name;
        $training->period=$request->period;
        $training->place=$request->place;
        $training->remark=$request->remark;
        $training->save();

        return back();
    }


    public function destroy($id)
    {
        //
    }
}
