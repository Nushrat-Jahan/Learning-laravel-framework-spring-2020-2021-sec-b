<?php

namespace App\Http\Controllers;

use App\Product;
use App\Vendors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->productCount();
        return view('product.index')->with('list',$list);
    }
    public function existing()
    {
        //$list = $this->productExist();
        //return view('product.existing')->with('list',$list);
        return view('product.existing');
    }
    public function upcoming()
    {
        return view('product.upcoming');
    }
    public function add()
    {
        $list = Vendors::select('vendor_name','vendor_id')
                                ->distinct()
                                ->get();

        return view('product.add')->with('vendors', $list);
    }
    public function addVerify(AddProductRequest $req)
    {
        $product= new Product;
        $product->product_name = $req->pname;
        $product->vendor_id = $req->vendor_id;
        $product->quantity = $req->quantity;
        $product->category = $req->category;
        $product->unit_price = $req->unitPrice;
        $product->status = $req->status;

        $product->save();
        $req->session()->flash('msg','Product added succefully!');
        return redirect()->route('product.add');
    }
    public function productCount()
    {
        $existing = Product::where('status','=','existing')->sum('quantity');
        $upcoming = Product::where('status','=','upcoming')->sum('quantity');
        $productdata = ['existing'=> $existing, 'upcoming' => $upcoming];
        return $productdata;
    }
    public function productExist()
    {
        $data = Product::where('status','=','existing')->all();
        return $data;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
