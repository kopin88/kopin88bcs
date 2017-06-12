<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\Dept;
use Session;


class DeptCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        $depts = Dept::get()->where('active', 0);
        return view('personals.depts.index')->with('depts', $depts);
    }

    public function store(Request $request)
    {
        $depts = new Dept();
        $depts->name = $request->name;
        $depts->description = $request->description;
        $depts->save();
        return back();
    }

    public function update(Request $request, $id)
    {
        $dept = Dept::find($id);
        $dept->name = $request->name;
        $dept->description = $request->description;
        $dept->save();
        return back();
    }


    public function delete($id)
    {
      $dept = Dept::find($id);
      $dept->active=1;
      $dept->save();
      return back();
    }
}
