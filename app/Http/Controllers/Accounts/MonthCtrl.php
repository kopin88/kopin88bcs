<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Accounts\Month;
use App\Models\Accounts\FinancialYear;

class MonthCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function getMonths($financial_year_id)
    {
        $month_balance = [];
        foreach (Month::where('financial_year_id', $financial_year_id)->get() as $month) {
          $month_balance[$month->id]= $month->name;
        }
        return $month_balance;
    }

    public function index(Request $request, $financial_year_id)
    {
        $financial_year = FinancialYear::find($financial_year_id);
        $months = Month::where('financial_year_id', $financial_year_id)->get();
        $month_balance = $this->getMonths($financial_year_id);


          return view('accounts.months.index')
                      ->withMonths($months)
                      ->withMonthBalance($month_balance)
                      ->withFinancialYear($financial_year);
    }
    //
    // private function get_month(Request $request)
    // {
    //     $data = $request->all();
    //
    //     return $data;
    //
    //     $data_update = $request->find($id);
    //
    //     return $data_update;
    // }


    public function store(Request $request, $financial_year_id)
    {
        // $data = $this->get_month($request);
        // Month::create($data);

        $month = new Month;
        $month->financial_year_id = $financial_year_id;
        $month->name = $request->name;
        $month->title = $request->title;
        $month->month_balance_id = $request->month_balance_id;
        $month->open_balance = $request->open_balance;
        $month->save();

        return back()->with('message', 'Saved!');

    }



    public function show($id)
    {
        $month = Month::find($id);

        return view('months.show', compact('month'));

    }



        public function update(Request $request, $id)
        {

              $month = Month::find($id);
              $month->name = $request->name;
              $month->title = $request->title;
              $month->month_balance_id = $request->month_balance_id;
              $month->open_balance = $request->open_balance;
              $month->save();
              return back();

              // $month = Month::find($id);
              //
              // $data_update = $this->get_month($request);
              //
              // $month->update($data_update);
              //
              // return redirect("months")->with('message', 'Updated!');
        }


            public function balance(Request $request, $id)
            {

                  $month = Month::find($id);
                  $month->in_total = $request->in_total;
                  $month->out_total = $request->out_total;
                  $month->balance = $request->balance;
                  $month->save();
                  return back();

                  // $month = Month::find($id);
                  //
                  // $data_update = $this->get_month($request);
                  //
                  // $month->update($data_update);
                  //
                  // return redirect("months")->with('message', 'Updated!');
            }




    public function destroy($id)
    {
        //
    }
}
