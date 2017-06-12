<?php

namespace App\Http\Controllers\Personals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personals\PositionType;
use Session;


class PositionTypeCtrl extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $position_types = PositionType::get()->where('active', 0);

      return view('personals.positions.type')->with('position_types', $position_types);
    }



    public function store(Request $request)
    {
        $position_type = new PositionType();

        $position_type->name = $request->name;
        $position_type->description = $request->description;
        $position_type->save();

        return back();
    }




    public function update(Request $request, $id)
    {
        $position_type = PositionType::find($id);

        $position_type->name = $request->name;
        $position_type->description = $request->description;
        $position_type->save();

        return back();
    }


    public function delete($id)
    {
      $position_type = PositionType::find($id);
      $position_type->active=1;
      $position_type->save();
      return back();
    }
}
