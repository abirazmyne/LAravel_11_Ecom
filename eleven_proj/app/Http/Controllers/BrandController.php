<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('ecomadmin.brand.index');
    }
    public function create( Request $request)
    {
        Brand::newBrand($request);
        return back()->with('message', 'Brand info create successfully.');

    }

    public function manage()
    {
        $this->brands = Brand::orderBy('created_at', 'desc')->get();
        if ($this->brands->count() > 0) {
            return view('ecomadmin.brand.manage', ['brands' => $this->brands]);
        } else {
            return redirect('/brand/add')->with('message',' ** Add a Brand first ** ');
        }
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('ecomadmin.brand.edit', compact('brand'));

    }

    public function update(Request $request, $id)
    {
        Brand::updateBrand($id,$request);
        return redirect('/brand/manage')->with('message','Brand Updated Successfully');

    }

    public function delete($id)
    {
        Brand::deleteBrand($id);
        return redirect('/brand/manage')->with('message','Brand Deleted Successfully');
    }
}
