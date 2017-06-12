<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Accounts\FinancialYear;
use App\Models\Accounts\Month;
use App\Models\Accounts\Income;

class FinancialYearCtrl extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  private function getYears()
  {
      $years = [];
      foreach (FinancialYear::all() as $year) {
        $years[$year->id]= $year->name;
      }
      return $years;
  }

  public function index()
  {
      $financial_years = FinancialYear::orderBy('created_at', 'desc')->where('active', 0)->paginate(10);
      $years = $this->getYears();

      return view('accounts.years.index', compact('financial_years', 'years'));
  }

  public function store(Request $request)
  {
      $this->validate($request, array('name' => 'required|max:255'));
      $year = new FinancialYear;
      $year->name = $request->name;
      $year->save();

      Session::flash('success', 'New Year was successfully created!');

      return back();
  }

  public function show($id)
  {
      $financial_year = FinancialYear::find($id);
      $months = Month::get()->where('financial_year_id', $id);

      return view('accounts.years.show')
                ->with('financial_year', $financial_year)
                ->with('months', $months);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, array('name' => 'required|max:255'));
      $year = FinancialYear::find($id);
      $year->name = $request->name;
      $year->open_balance = $request->open_balance;
      $year->balance = $request->balance;
      $year->save();

      Session::flash('success', 'New Year was successfully updated!');
      return back();
  }

  // public function destroy($id)
  // {
  //     $financial_year = FinancialYear::find($id);
  //     $financial_year->delete();
  //     return back();
  // }

  public function delete($id)
  {
      $financial_year = FinancialYear::find($id);
      $financial_year->active = 1;
      $financial_year->save();
      return back();
  }
}
