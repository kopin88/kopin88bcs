<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Accounts\ExpenseHead;

class ExpenseHeadCtrl extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function index()
    {
        $expense_heads = ExpenseHead::orderBy('created_at')->where('active', 0)->paginate(15);

        return view('accounts.expense-heads.index', compact('expense_heads'));
    }


    public function store(Request $request)
    {
        $this->validate($request, array('name' => 'required|max:255'));

        $expense_head = new ExpenseHead;
        $expense_head->name = $request->name;
        $expense_head->save();

        Session::flash('success', 'Successfully created!');
        return back();
    }


    public function show($id)
    {
        $expense_head = ExpenseHead::find($id);

        return view('accounts.expense-heads.show', compact('expense_head'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, array('name' => 'required|max:255'));

        $expense_head = ExpenseHead::find($id);
        $expense_head->name = $request->name;
        $expense_head->save();

        Session::flash('success', 'Successfully updated!');
        return back();
    }

    public function delete($id)
    {
        $expense_head = ExpenseHead::find($id);
        $expense_head->active = 1;
        $expense_head->save();
        return back();
    }
}
