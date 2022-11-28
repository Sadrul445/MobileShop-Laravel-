<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        // $this->authorize('create-product');
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        if ($request->status != '') {
            $request->status = $request->status;
        } else {
            $request->status = 0;
        }

        $imageName = request()->file('image')->store('public/images');

        Product::create([
            'name' => $request->name,
            'category_name' => $request->category_name,
            'brand_name' => $request->brand_name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'status' => $request->status
        ]);
        return redirect()->route('products.index')->withMessage($request->name . ' added succesfully!!'); //blank page na eshe index means amader category list page e redirect korlam 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // 
    }
    // return view('backend.products.show',[
    //     //     'product' => $product 
    //     // ]);
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->status != '') {
            $request->status = $request->status;
        } else {
            $request->status = 0;
        }

        request()->validate(
            [

                'name' => ['required', 'min:3', 'max:30'],
            ]
        );

        if (request()->file('image') != "") {
            $fileName = request()->file('image')->store('public/images');
        } else {
            $fileName = $request->oldImage;
        }


        $product->update([
            'name' => $request->name,
            'category_name' => $request->category_name,
            'brand_name' => $request->brand_name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $fileName,
            'status' => $request->status
        ]);
        return redirect()->route('products.index')->withMessage($request->name . ' Updated succesfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->withMessage($product->name . 'Deleted Successfully!!');
    }
}
