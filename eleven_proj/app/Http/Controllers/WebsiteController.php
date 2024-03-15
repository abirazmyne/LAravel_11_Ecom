<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {



        $this->allProducts = Product::where('product_status', 0)->get();

        return view('website.home.index', [
            'allProducts' => $this->allProducts,
            'categories'  => Category::all(),
            'subCategories'  => Sub_Category::all(),
        ]);

//
////        if ($this->allProducts->isEmpty()) {
////            return view('website.home.index');
////        }
////        else {
////            return view('website.home.index', [
////                'allProducts' => $this->allProducts,
////            ]);
////        }
//




    }
    public function subCategoryProduct($id)
    {
//        $this->subCategoryProducts = Product::where('sub_category_id', $id)->orderBy('id', 'desc')->paginate(16);

        return view('website.subcategory.index');
    }

    public function productdetail()
    {
        return view('website.productdetail.index');
    }

    public function bycategoryProduct($id)
    {
        return view('website.category.index', ['categories' => Category::all(),]);
    }
}
