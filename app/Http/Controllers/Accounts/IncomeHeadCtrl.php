<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Accounts\IncomeHead;
use Session;

class IncomeHeadCtrl extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
        $income_heads = IncomeHead::orderBy('created_at')->where('active', 0)->paginate(15);

        return view('accounts.income-heads.index', compact('income_heads'));
    }


    public function store(Request $request)
    {
        $this->validate($request, array('name' => 'required|max:255'));

        $income_head = new IncomeHead;
        $income_head->name = $request->name;
        $income_head->save();

        Session::flash('success', 'Successfully created!');
        return back();
    }

    public function show($id)
    {
        $income_head = AccHead::find($id);

        return view('accounts.income-heads.show', compact('income_head'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, array('name' => 'required|max:255'));

        $income_head = IncomeHead::find($id);
        $income_head->name = $request->name;
        $income_head->save();

        Session::flash('success', 'Successfully updated!');
        return back();
    }


    public function delete($id)
    {
        $income_head = IncomeHead::find($id);
        $income_head->active = 1;
        $income_head->save();
        return back();
    }
}
