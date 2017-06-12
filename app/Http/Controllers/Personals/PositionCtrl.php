<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Personals\Position;
use App\Models\Personals\PositionType;
use App\Models\Personals\Dept;
use App\Models\Personals\Personal;
use Session;

class PositionCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    private function getPositionType()
    {
        $position_types = [];
        foreach (PositionType::get()->where('active', 0) as $position_type) {
          $position_types[$position_type->id]= $position_type->name;
        }
        return $position_types;
    }

    private function getDept()
    {
      $depts = [];
      foreach (Dept::get()->where('active', 0) as $dept) {
        $depts[$dept->id] = $dept->name;
      }
      return $depts;
    }

    public function index(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);
        $position_types = $this->getPositionType();
        $depts = $this->getDept();

        return view('personals.positions.index')
                  ->withPosition_types($position_types)
                  ->withDepts($depts)
                  ->withPersonal($personal);
    }



    public function store(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);

        $position = new Position();
        $position->position_type_id = $request->position_type_id;
        $position->dept_id = $request->dept_id;
        $position->date = $request->date;
        $position->basic_salary= $request->basic_salary;
        $position->annual_interest= $request->annual_interest;
        $position->end_salary = $request->end_salary;
        $position->remark = $request->remark;
        $position->personal()->associate($personal);
        $position-> save();

        Session::flash('success', 'Position was added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $position = Position::find($id);
      $position->position_type_id = $request->position_type_id;
      $position->dept_id = $request->dept_id;
      $position->date = $request->date;
      $position->basic_salary= $request->basic_salary;
      $position->annual_interest= $request->annual_interest;
      $position->end_salary = $request->end_salary;
      $position->remark = $request->remark;

      $position-> save();

      Session::flash('success', 'Position was added');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
