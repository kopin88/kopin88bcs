<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Personals\LeaveYear;
use Session;

class LeaveYearCtrl extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
      $leave_years = LeaveYear::orderBy('created_at', 'desc')->where('active', 0)->paginate(10);

      return view('personals.leaves.leave-year', compact('leave_years'));
  }

  public function store(Request $request)
  {
      $this->validate($request, array('name' => 'required|max:255'));
      $leave_year = new LeaveYear;
      $leave_year->name = $request->name;
      $leave_year->save();

      Session::flash('success', 'New Year was successfully created!');

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
      $leave_year = LeaveYear::find($id);

      return view('personals.leaves.show')->withLeaveYear($leave_year);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, array('name' => 'required|max:255'));
      $leave_year = LeaveYear::find($id);
      $leave_year->name = $request->name;
      $leave_year->save();

      Session::flash('success', 'New Year was successfully updated!');
      return back();
  }

  // public function destroy($id)
  // {
  //     $leave_year = LeaveYear::find($id);
  //
  //     $leave_year->delete();
  //
  //     return back();
  // }

  public function delete($id)
  {
    $leave_year = LeaveYear::find($id);
    $leave_year->active = 1;
    $leave_year->save();
    return back();
  }
}
