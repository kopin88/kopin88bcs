<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Accounts\Month;
use App\Models\Accounts\OutPayroll;

class OutPayrollCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $month_id, $personal_id)
    {
      $out_payroll = New OutPayroll;

      $out_payroll->month_id = $month_id;
      $out_payroll->personal_id = $personal_id;
      $out_payroll->description = $request->description;
      $out_payroll->amount = $request->amount;
      $out_payroll->remark = $request->remark;
      $out_payroll->save();

      return back();
    }

    public function update(Request $request, $id)
    {
      $out_payroll = OutPayroll::find($id);

      // $out_payroll->month_id = $month_id;
      // $out_payroll->personal_id = $personal_id;
      $out_payroll->description = $request->description;
      $out_payroll->amount = $request->amount;
      $out_payroll->remark = $request->remark;
      $out_payroll->save();

      return back();
    }

    public function destory($id)
    {
      $out_payroll = OutPayroll::find($id);
      $out_payroll->delete();

      return back();
    }
}
