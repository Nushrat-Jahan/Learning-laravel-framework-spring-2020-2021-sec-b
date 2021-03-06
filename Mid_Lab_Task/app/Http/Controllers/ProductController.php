<?php

namespace App\Http\Controllers;

use App\Product;
use App\Vendors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditRequest;



class ProductController extends Controller
{
    public function index()
    {
        $list = $this->productCount();
        return view('product.index')->with('list',$list);
    }
    public function existing(Request $req)
    {
        $list =new Product();
        $list = $list->where('status','existing');
        if($req->sort){
            if($req->sortType){
                $list = $list->orderBy($req->sort,$req->sortType);
            }
            else{
                $list = $list->orderBy($req->sort,'asc');
            }
            $list = $list->paginate(20)->appends(['sort'=>$req->sort]);
        }
        else{
            $list = $list->paginate(20);

        }
        return view('product.existing')->with('list',$list);

    }

    public function upcoming(Request $req)
    {
        $list =new Product();
        $list = $list->where('status','upcoming');
        if($req->sort){
            if($req->sortType){
                $list = $list->orderBy($req->sort,$req->sortType);
            }
            else{
                $list = $list->orderBy($req->sort,'asc');
            }
            $list = $list->paginate(20)->appends(['sort'=>$req->sort]);
        }
        else{
            $list = $list->paginate(20);

        }
        return view('product.upcoming')->with('list',$list);
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


    public function edit($id)
    {
        $list = Product::find($id);
        return view('product.edit')->with('list',$list);
    }

    public function update($id, EditRequest $req)
    {
        $list= Product::find($id);
        $list->product_name = $req->pname;
        $list->category = $req->category;
        $list->unit_price = $req->unitPrice;
        $list->quantity = $req->quantity;
        $list->status = $req->status;

        $list->save();
        $req->session()->flash('msg','Sucessfully Updated Product ID: '.$id);
        return Back();
        //return redirect()->route('product.edit',['id'=> $req->id]);
    }

    public function destroy(Request $req,$id)
    {
        $list = Product::find($id);
        $req->session()->flash('delete','PRODUCT ID '.$list->id.' DELETED SUCESSFULLY');
        $list->delete();
        return Back();
    }
    public function details(Request $req, $product_id, $vendor_id)
    {
        $product = Product::where('id',$product_id)
                         ->where('vendor_id',$vendor_id)
                         ->first();
        $vendor = Vendors::find($vendor_id);
        //print_r($product);
        if($vendor && $product)
        {

            return view('product.details')->with('product',$product)->with('vendor',$vendor)->with('nf',"");
        }
        else
        {
            return view('product.details')->with('nf','1');

        }

    }

}
