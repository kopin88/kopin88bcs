<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Personal;
use App\Models\Accounts\InPayroll;
use App\Models\Accounts\OutPayroll;
use App\Models\Accounts\Month;

class PayrollCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($month_id)
    {
      $month = Month::find($month_id);
      $personals = Personal::where('active', 0)->get();

      return view('accounts.payrolls.index')
                ->withMonth($month)
                ->withPersonals($personals);
    }

    public function create($month_id, $personal_id)
    {
      $month = Month::find($month_id);
      $personal = Personal::find($personal_id);
      $in_payrolls = InPayroll::where('month_id', $month_id)
                                                ->where('personal_id', $personal_id)
                                                ->get();
      $out_payrolls = OutPayroll::where('month_id', $month_id)
                                                ->where('personal_id', $personal_id)
                                                ->get();

      return view('accounts.payrolls.create')
                ->withMonth($month)
                ->withPersonal($personal)
                ->withInPayrolls($in_payrolls)
                ->withOutPayrolls($out_payrolls);
    }
}
