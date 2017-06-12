<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Accounts\Expense;
use App\Models\Accounts\Month;

class ExpenseCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $rules =[
        'date' => ['required'],
        'description' => ['required'],
        'expense_head_id' =>['required'],
        'amount' =>['required']
      ];
  // private function getExpense(Request $request)
  // {
  //
  //     $data = $request->all();
  //     return $data;
  //
  //     $data_update = $request->find($id);
  //
  //     return $data_update;
  // }


    public function store(Request $request, $month_id)
    {
        $this->validate($request, $this->rules);
        // $data = $this->get_account($request);
        // Month::create($data);
        $month = Month::find($month_id);

        $expense = new Expense;
        $expense->date = $request->date;
        $expense->expense_head_id = $request->expense_head_id;
        $expense->name = $request->name;
        $expense->amount = $request->amount;
        $expense->description = $request->description;
        $expense->remark = $request->remark;
        $expense->month()->associate($month);
        $expense->save();

        Session::flash('success', 'Comment was added');
        return back();
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, $this->rules);
      // $data = $this->get_account($request);
      // Month::create($data);
      $expense = Expense::find($id);
      $expense->date = $request->date;
      $expense->expense_head_id = $request->expense_head_id;
      $expense->description = $request->description;
      $expense->amount = $request->amount;
      $expense->remark = $request->remark;
      $expense->save();

      return back()->with('message', 'Updated!');
    }



    public function destroy($id)
    {
      $expense = Expense::find($id);
      $expense->delete();

      return back();
    }
}
