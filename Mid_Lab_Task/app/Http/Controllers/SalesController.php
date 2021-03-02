<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ecommerce;
use App\PhysicalStore;
use App\SocialMedia;
use DateTime;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class SalesController extends Controller
{
    public function index( Request $req){
        $list = $this->saleslist();
        return view('sales.index')->with('list', $list);
    }
    public function storelist(){
        $list = PhysicalStore::all();
        return view('sales.physical_store')->with('list', $list);
    }
    public function sales_log(){

        return view('sales.sales_log');
    }
    public function ecommercelist(){

        $list = Ecommerce::all();
        return view('sales.ecommerce')->with('list', $list);
    }
    public function verify(ProductRequest $request)
    {

        $pstore = new PhysicalStore();
        $pstore->customer_name = $request->customer_name;
        $pstore->address = $request->address;
        $pstore->phone = $request->phone;
        $pstore->product_id = $request->product_id;
        $pstore->product_name = $request->product_name;
        $pstore->unit_price = $request->unit_price;
        $pstore->quantity = $request->quantity;
        $pstore->total_price = $request->total_price;
        $pstore->date_sold = date('Y-m-d');
        $pstore->payment_type = $request->payment_type;
        $pstore->status = 'sold';
        $pstore->save();

        $request->session()->flash('msg',"Added one entry data");

        return redirect()->route('sales.index');
    }
    public function store(){

        return view('sales.physical_store');
    }


    public function media(){

        return view('sales.social_media');
    }


    public function ecommerce (){

        return view('sales.ecommerce');
    }

    public function Storephysical(Request $request)
    {
        return view('sales.physical_store')->with('list',$this->physicalStore());
    }

    public function physicalStore()
    {
        $list = $this->saleslist();

        $maxSold= DB::select(DB::raw("Select product_id,sum(quantity) from physical_store_channel GROUP BY productId ORDER BY sum(quantity) DESC limit 1"))[0];

        $mostSold = PhysicalStore::select('productname')
                        ->where('productId',$maxSold->productId)
                        ->first();


        $avg = DB::select(DB::raw("SELECT sum(total_price) as avgprice from physical_store_channel where Month(date_sold) = Month(CURRENT_DATE) GROUP by date_sold"));

        $sum = 0;
        $cnt = 0;
        foreach($avg as $avg)
        {
            $cnt =$cnt+1;
            $sum = $sum+ intval($avg->avgprice);
        }
        $avgValue = $sum/$cnt;

        return ['day'=>$list['day'],'daySeven'=>$list['daySeven'],'bestProduct'=>$mostSold->product_name,'avg'=>$avgValue];

    }

    public function saleslist()
    {
        $week = (new DateTime(date('Y-m-d')))->modify('-7 day')->format('Y-m-d');
        $day = date('Y-m-d');

        $phySeven = PhysicalStore::where('date_sold','>=',$week)
                                            ->where('date_sold','<=',$day)
                                            ->sum('quantity');

        $phyday = PhysicalStore::where('date_sold','=',$day)
                                        ->sum('quantity');

        $ecomSeven = Ecommerce::where('date_sold','>=',$week)
                                            ->where('date_sold','<=',$day)
                                            ->sum('quantity');

        $ecomday = Ecommerce::where('date_sold','=',$day)
                                        ->sum('quantity');

        $socSeven = SocialMedia::where('date_sold','>=',$week)
                                            ->where('date_sold','<=',$day)
                                            ->sum('quantity');

        $socday = SocialMedia::where('date_sold','=',$day)
                                        ->sum('quantity');


        return ['day'=> $phyday , 'daySeven' => $phySeven ,'ecomday'=>$ecomday , 'ecomSeven'=>$ecomSeven , 'socday'=>$socday, 'socSeven'=>$socSeven];
    }

}
