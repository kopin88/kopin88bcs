<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\User;

class ReportCtrl extends Controller
{
    public function index()
    {
      $users = User::all();
      $report_errors = Report::where('active', 0)->orderBy("created_at", "desc")->get();
      $report_remarks = Report::where('active', 1)->orderBy("updated_at", "desc")->get();
      return view('reports.index')
              ->withReportErrors($report_errors)
              ->withReportRemarks($report_remarks)
              ->withUsers($users);
    }

    public function store(Request $request, $user_id)
    {
      $report =  New Report;
      $report->report=$request->report;
      $report->user_id=$user_id;
      $report->save();

      return back();
    }

    public function update(Request $request, $id)
    {
      $report = Report::find($id);

      $report->remark = $request->remark;
      $report->active = 1;
      $report->save();

      return back();
    }
}
