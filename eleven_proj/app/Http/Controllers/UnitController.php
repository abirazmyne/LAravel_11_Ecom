<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('ecomadmin.unit.index');
    }
    public function create( Request $request)
    {
        if ($request->name !== null && $request->description !== null && $request->image !== null) {

            Unit::newUnit($request);
            return back()->with('message', 'Unit info create successfully.');
        } else {
            return back()->with('message', 'Please input your data correctly.');
        }

    }

    public function manage()
    {
        $this->units = Unit::orderBy('created_at', 'desc')->get();
        if ($this->units->count() > 0) {
            return view('ecomadmin.unit.manage', ['units' => $this->units]);
        } else {
            return redirect('/unit/add')->with('message',' ** Add a unit first ** ');
        }


    }

    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('ecomadmin.unit.edit', compact('unit'));

    }

    public function update(Request $request, $id)
    {
        Unit::updateUnit($id,$request);
        return redirect('/unit/manage')->with('message','Unit Updated Successfully');

    }

    public function delete($id)
    {
        Unit::deleteUnit($id);
        return redirect('/unit/manage')->with('message','Unit Deleted Successfully');
    }
}
