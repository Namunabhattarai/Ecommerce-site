<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::Latest()->get();
        return view('admin.products.index', ['products'=> $products] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories = category::all();
        return view('admin.products.create', /*['categories'=> $categories]*/ compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product;
        $product->product_name = $request->input('product_name');
        $product->product_desc = $request->input('product_desc');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        if ($request->hasFile('image_upload')) {
            // uploading image to images folder
            $name = $request->file('image_upload')->getClientOriginalName();
            $request->file('image_upload')->storeAs('public/images', $name);
            // croping the image and saving it to thumbnail folder inside images folder
            // $image_resize = Image::make(storage_path('app/public/images/'.$name));
            // $image_resize->resize(550, 750);
            // $image_resize->save(storage_path('app/public/images/thumbnail/'.$name));
            image_crop($name, 550, 750);
            $product->image = $name;
        }
        if($product->save()){
            return redirect()->route('admin.products.index');

        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
       
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = '';
        if($product->save()){
            return redirect()->route('admin.products.index');

        }
        else{
            return redirect()->back();
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        
        if($product->delete()){
        return redirect()->route('admin.products.index');

        }
        else{
            return redirect()->back();
        }

    }
}
