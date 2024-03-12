<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOtherImages;
use App\Models\sub_category;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('ecomadmin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ecomadmin.product.create',[
            'categories'=> Category::all(),
            'sub_categories'=> Sub_category::all(),
            'brands'=> Brand::all(),
            'units'=> Unit::all(),
        ]);
    }
    public function getSubcategoryByCategory()
    {
        return response()->json(Sub_category::where('category_id', $_GET['id'])->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        ProductOtherImages::newOtherImage($request->file('other_images'), $this->product->id);
        return back()->with('message', 'Product Info create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('ecomadmin.product.show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('ecomadmin.product.edit',
            [
                'categories'=> Category::all(),
                'sub_categories'=> Sub_category::all(),
                'brands'=> Brand::all(),
                'units'=> Unit::all(),
                'product'=> $product,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request, $product->id);
        if ($request->file('other_images'))
        {
            ProductOtherImages::updateOtherImage($request->file('other_images'), $product->id);
        }
        return redirect('/product')->with('message', 'Product info updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product->id);
        ProductOtherImages::deleteOtherImage($product->id);
        return redirect('/product')->with('message', 'Product info delete successfully');
    }
}
