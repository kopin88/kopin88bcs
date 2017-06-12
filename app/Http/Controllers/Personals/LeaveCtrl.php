<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Personals\Leave;
use App\Models\Personals\LeaveType;
use App\Models\Personals\Personal;
use App\Models\Personals\LeaveYear;
use Session;


class LeaveCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    private function getLeaveType()
    {
        $leave_types = [];
        foreach (LeaveType::all() as $leave_type) {
          $leave_types[$leave_type->id]= $leave_type->name;
        }
        return $leave_types;
    }


    public function index(Request $request, $personal_id)
    {
        $personal = Personal::find($personal_id);
        $leave_years = LeaveYear::all();

        return view('personals.leaves.index')->withLeaveYears($leave_years)->withPersonal($personal);
    }

    // public function leaves(Request $request, $personal_id)
    // {
    //
    //   echo "OK";
    //     $personal = Personal::find($personal_id);
    //     $leave_years = LeaveYear::all();
    //
    //     return view('personals.leaves')->withLeaveYears($leave_years)->withPersonal($personal);
    // }

    public function store(Request $request, $personal_id, $leave_year_id)
    {
        $personal = Personal::find($personal_id);

        $leave = new Leave();
        $leave->leave_type_id = $request->leave_type_id;
        $leave->leave_year_id = $leave_year_id;
        $leave->from_date = $request->from_date;
        $leave->to_date = $request->to_date;
        $leave->total = $request->total;
        $leave->remark = $request->remark;
        $leave->personal()->associate($personal);
        $leave->save();

        Session::flash('success', 'Leave was added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($personal_id, $leave_year_id)
    {
        $personal = Personal::find($personal_id);
        $leave_year = LeaveYear::find($leave_year_id);
        $leave_types = $this->getLeaveType();

        $leave = Leave::where('personal_id', $personal_id)->where('leave_year_id', $leave_year_id)->get();
        $grouped = $leave->groupBy('leave_type_id');


        $leave_type = LeaveType::all();

        return view('personals.leaves.show')
          ->withPersonal($personal)
          ->withLeaveYear($leave_year)
          ->withLeave_type($leave_type)
          ->withLeave_types($leave_types)
          ->withGrouped($grouped)
          ->withLeave($leave);
    }

    public function detail($personal_id, $leave_year_id)
    {
        $personal = Personal::find($personal_id);
        $leave_year = LeaveYear::find($leave_year_id);
        $leave_types = $this->getLeaveType();

        $leave = Leave::where('personal_id', $personal_id)->where('leave_year_id', $leave_year_id)->get();
        $grouped = $leave->groupBy('leave_type_id');


        $leave_type = LeaveType::all();

        return view('personals.leaves-detail')
          ->withPersonal($personal)
          ->withLeaveYear($leave_year)
          ->withLeave_type($leave_type)
          ->withLeave_types($leave_types)
          ->withGrouped($grouped);
    }

    public function update(Request $request, $id)
    {
        $leave = Leave::find($id);
        $leave->leave_type_id = $request->leave_type_id;
        $leave->from_date = $request->from_date;
        $leave->to_date = $request->to_date;
        $leave->total = $request->total;
        $leave->remark = $request->remark;
        $leave->save();

        Session::flash('success', 'Comment was added');
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
        $leave = Leave::find($id);

        $leave->delete();

        return back();
    }
}
