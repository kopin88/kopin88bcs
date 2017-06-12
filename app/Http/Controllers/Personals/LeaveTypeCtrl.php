<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\LeaveType;

class LeaveTypeCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leave_types = LeaveType::get()->where('active', 0);

        return view('personals.leaves.type')->with('leave_types', $leave_types);
    }


    public function store(Request $request)
    {
        $leave_type = new LeaveType();

        $leave_type->name = $request->name;
        $leave_type->day = $request->day;
        $leave_type->save();

        return back();
    }


    public function update(Request $request, $id)
    {
        $leave_type = LeaveType::find($id);

        $leave_type->name = $request->name;
        $leave_type->day = $request->day;
        $leave_type->save();

        return back();
    }


    // public function destroy($id)
    // {
    //     $leave_type = LeaveType::find($id);
    //
    //     $leave_type->delete();
    //
    //     return back();
    // }

    public function delete($id)
    {
        $leave_type = LeaveType::find($id);

        $leave_type->active = 1;
        $leave_type->save();

        return back();
    }
}
