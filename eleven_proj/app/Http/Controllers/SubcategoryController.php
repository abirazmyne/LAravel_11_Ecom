<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\sub_category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        $this->categories = Category::all();
        if ($this->categories->count() > 0)
        {
            return view('ecomadmin.subcategory.index',['categories'=>$this->categories]);
        }
        else
        {
            return view('ecomadmin.subcategory.index',['categories'=>$this->categories]);
        }
    }

    public function create(Request $request)
    {
        Sub_category::newSubCategory($request);
        return back()->with('message', 'New Sub-Category created Successfully.');
    }
    public function edit($id)
    {
        $this->subCategory = Sub_category::find($id);
        $this->categories = Category::all();
        return view('ecomadmin.subcategory.edit',[
            'subCategory'=> $this->subCategory,
            'categories'=>$this->categories]);
    }

    public function update(Request $request, $id)
    {
        Sub_category::updateSubCategory($id,$request);
        return redirect('/subCategory/manage')->with('message','Category Updated Successfully');
    }

    public function delete($id)
    {
        Sub_category::deleteSubCategory($id);
        return redirect('/subCategory/manage')->with('message','Sub Category Deleted Successfully');
    }

    public function manage()
    {
        $subCategories = Sub_category::orderBy('created_at', 'desc')->get();
        return view('ecomadmin.subcategory.manage', compact('subCategories'));
    }
}
