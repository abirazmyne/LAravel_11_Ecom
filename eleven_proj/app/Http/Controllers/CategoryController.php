<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sub_category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('ecomadmin.category.index');
    }

    public function create( Request $request)
    {
        if ($request->name !== null && $request->description !== null && $request->image !== null) {

            Category::newCategory($request);
            return back()->with('message', 'Category info created successfully.');
        } else {
            return back()->with('message', 'Please input your data correctly.');
        }
    }

    public function manage()
    {
        $this->categories = Category::orderby('created_at', 'desc')->get();
        if ($this->categories->count() > 0) {
            return view('ecomadmin.category.manage', ['categories' => $this->categories]);
        } else {
            return view('ecomadmin.category.manage', ['categories' => $this->categories]);
        }
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('ecomadmin.category.edit', compact('category'));

    }

    public function update(Request $request, $id)
    {

        if ($request !== null && $id !== null) {
            Category::updateCategory($id,$request);
            return redirect('/category/manage')->with('message','Category Updated Successfully');
        } else {
            return back()->with('message', 'Please input your data correctly.');
        }

    }

    public function delete($id)
    {
        $subcategoriesCount = Sub_category::where('category_id', $id)->count();

        if ($subcategoriesCount > 0) {
            // If there are subcategories, show an error message
            return back()->with('message', '** Sorry! You can\'t delete this category. It has many subcategories. **');
        } else {
            // If no subcategories, proceed with deleting the category
            Category::destroy($id);
            return redirect('/category/manage')->with('message', 'Category Deleted Successfully');
        }
    }
}
