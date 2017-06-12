<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Accounts\Month;
use App\Models\Accounts\IncomeHead;
use App\Models\Accounts\ExpenseHead;
use App\Models\Accounts\Income;
use App\Models\Accounts\Expense;
use App\Models\Personals\Personal;

class AccountCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // private function getTitle()
    // {
    //     $months = [];
    //     foreach (Month::all() as $month) {
    //       $months[$month->id]= $month->title;
    //     }
    //     return $months;
    // }

    private function getPersonal()
    {
      $personals = [];
      foreach (Personal::all() as $personal) {
        $personals[$personal->id] = $personal->name;
      }
      return $personals;
    }

    private function getIncomeHead()
    {
        $income_heads = [];
        foreach (IncomeHead::get()->where('active', 0) as $income_head) {
          $income_heads[$income_head->id]= $income_head->name;
        }
        return $income_heads;
    }


    private function getExpenseHead()
    {
        $expense_heads = [];
        foreach (ExpenseHead::get()->where('active', 0) as $expense_head) {
          $expense_heads[$expense_head->id]= $expense_head->name;
        }
        return $expense_heads;
    }
    // public function create()
    // {
    //     $month = Month::find($id);
    //     $income_heads = $this->getIncomeHead();
    //     $expense_heads = $this->getExpenseHead();
    //
    //     return view('accounts.show', compact('month', 'income_heads', 'expense_heads'));
    // }



    // private function getIncome(Request $request)
    // {
    //
    //     $data = $request->all();
    //     return $data;
    //
    //     $data_update = $request->find($id);
    //
    //     return $data_update;
    // }
    //
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


    // public function store(Request $request, $month_id)
    // {
    //     $this->validate($request, $this->rules);
    //     // $data = $this->get_account($request);
    //     // Month::create($data);
    //     $months = Month::find($month_id);
    //
    //     $account = new Account;
    //     $account->date = $request->date;
    //     $account->acc_head_id = $request->acc_head_id;
    //     $account->description = $request->description;
    //     $account->amount = $request->amount;
    //     $account->remark = $request->remark;
    //     $account->months()->associate($months);
    //     $account->save();
    //
    //     return back()->with('message', 'Saved!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($month_id)
    {
        $month = Month::find($month_id);
        $income_heads = $this->getIncomeHead();
        $ingrouped = $month->incomes->groupBy('income_head_id');
        $expense_heads = $this->getExpenseHead();
        $grouped = $month->expenses->groupBy('expense_head_id');
        $personals = $this->getPersonal();


        return view('accounts.show')
                ->withMonth($month)
                ->withIncomeHeads($income_heads)
                ->withIngrouped($ingrouped)
                ->withExpenseHeads($expense_heads)
                ->withGrouped($grouped)
                ->withPersonals($personals);
    }



    //
    // public function update(Request $request, $id)
    // {
    //   $this->validate($request, $this->rules);
    //   // $data = $this->get_account($request);
    //   // Month::create($data);
    //   $account = Account::find($id);
    //   $account->date = $request->date;
    //   $account->acc_head_id = $request->acc_head_id;
    //   $account->description = $request->description;
    //   $account->amount = $request->amount;
    //   $account->remark = $request->remark;
    //   $account->save();
    //
    //   return back()->with('message', 'Updated!');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //   $account = Account::find($id);
    //   $account->delete();
    //
    //   return back()->with('message', 'Deleted!');
    // }
}
