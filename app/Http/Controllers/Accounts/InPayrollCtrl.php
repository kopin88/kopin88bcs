<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Accounts\InPayroll;
use App\Models\Accounts\Month;
// use App\Models\Personals\Personal;

class InPayrollCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $month_id, $personal_id)
    {
      $in_payroll = New InPayroll();

      $in_payroll->month_id=$month_id;
      $in_payroll->personal_id=$personal_id;
      $in_payroll->description= $request->description;
      $in_payroll->amount = $request->amount;
      $in_payroll->remark = $request->remark;
      $in_payroll->save();

      return back();
    }

    public function update(Request $request, $id)
    {
      $in_payroll  = InPayroll::find($id);
      $in_payroll->description= $request->description;
      $in_payroll->amount = $request->amount;
      $in_payroll->remark = $request->remark;
      $in_payroll->save();

      return back();
    }

    public function destory($id)
    {
      $in_payroll = InPayroll::find($id);
      $in_payroll->delete();
      return back();
    }

}
