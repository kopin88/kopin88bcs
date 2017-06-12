<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Accounts\AccHead;

class AccHeadCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $acc_heads = AccHead::orderBy('created_at')->paginate(10);

        return view('accounts.acc-heads.index', compact('acc_heads'));
    }


    public function store(Request $request)
    {
        $this->validate($request, array('name' => 'required|max:255'));

        $acc_head = new AccHead;
        $acc_head->name = $request->name;
        $acc_head->save();

        Session::flash('success', 'Successfully created!');
        return back();
    }


    public function show($id)
    {
        $acc_head = AccHead::find($id);

        return view('accounts.acc-heads.show')->withAcc_head($acc_head);
    }


    public function update(Request $request, $id)
    {
      $this->validate($request, array('name' => 'required|max:255'));

      $acc_head = AccHead::find($id);
      $acc_head->name = $request->name;
      $acc_head->save();

      Session::flash('success', 'Successfully updated!');
      return back();
    }

    public function destroy($id)
    {
        //
    }
}
