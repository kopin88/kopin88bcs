<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Accounts\Income;
use App\Models\Accounts\Month;

class IncomeCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $rules =[
        'date' => ['required'],
        'name' => ['required'],
        'description' => ['required'],
        'income_head_id' =>['required'],
        'amount' =>['required']
      ];

      public function store(Request $request, $month_id)
      {
          $this->validate($request, $this->rules);
          // $data = $this->get_account($request);
          // Month::create($data);
          $month = Month::find($month_id);

          $income = new Income;
          $income->date = $request->date;
          $income->name = $request->name;
          $income->income_head_id = $request->income_head_id;
          $income->description = $request->description;
          $income->amount = $request->amount;
          $income->remark = $request->remark;
          $income->month()->associate($month);
          $income->save();

          return back();
      }

      public function update(Request $request, $id)
      {
        $this->validate($request, $this->rules);
        // $data = $this->get_account($request);
        // Month::create($data);
        $income = Income::find($id);
        $income->date = $request->date;
        $income->name = $request->name;
        $income->income_head_id = $request->income_head_id;
        $income->description = $request->description;
        $income->amount = $request->amount;
        $income->remark = $request->remark;
        $income->save();
        return back();
      }



      public function destroy($id)
      {
        $income = Income::find($id);
        $income->delete();

        return back()->with('message', 'Deleted!');
      }
}
