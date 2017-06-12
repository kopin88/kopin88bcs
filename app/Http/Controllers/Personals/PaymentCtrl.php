<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Personals\Personal;
use App\Models\Personals\LeaveYear;
use App\Models\Accounts\FinancialYear;
use App\Models\Accounts\Month;

class PaymentCtrl extends Controller
{
    public function index(Request $request, $id)
    {
        $fyears = FinancialYear::where(function($query) use ($request) {
          // filter by keyword entered
          if (($fterm = $request->get('fterm'))) {
            $query->orWhere('name', 'like', '%' . $fterm . '%');
          }
        })->where('active', 0)
          ->orderBy("id", "desc")
          ->paginate(10);

        $leave_years = LeaveYear::where(function($query) use ($request) {
          if (($lterm = $request->get('lterm'))) {
            $query->orWhere('name', 'like', '%' . $lterm . '%');
          }
        })->where('active', '0')
          ->orderBy("id", "desc")
          ->paginate(10);

        $personal = Personal::find($id);

        return view('personals.payment.index', compact('fyears', 'personal', 'leave_years'));
    }


    public function show(Request $request, $id, $fyear_id)
    {
      $fyear = FinancialYear::find($fyear_id);
      $personal = Personal::find($id);
      $months = Month::where('financial_year_id', $fyear_id)->get();
      return view('personals.payment.show', compact('fyear', 'personal', 'months'));
    }
}
