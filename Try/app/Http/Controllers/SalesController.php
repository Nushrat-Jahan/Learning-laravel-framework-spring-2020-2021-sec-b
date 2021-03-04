<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PhysicalStore;
use App\Ecommerce;
use App\SocialMedia;
use DateTime;


class SalesController extends Controller
{

    public function index(){
        $list = $this->sale7day();
        return view('sales.index')->with('list',$list);
    }
    public function physicalStore(){
        $list = $this->physicalStore7day();
        return view('sales.physicalStore')->with('list',$list);
    }
    public function socialMedia(){

        return view('sales.socialMedia');
    }
    public function ecommerce(){

        return view('sales.ecommerce');
    }
    public function physicalStore7day()
    {
        $list = $this->sale7day();
        $Individualsum = DB::select(DB::raw("SELECT productId,sum(quantity)
                                            FROM physical_store_channel
                                            GROUP BY productId
                                            ORDER BY sum(quantity)
                                            DESC limit 1"))[0];

        $bestProduct = PhysicalStore::select('productName')
                        ->where('productId',$Individualsum->productId)
                        ->first();

        $monthsum = PhysicalStore::whereMonth('sold_date',date('m'))
                                    ->sum('total');

        $monthavg = $monthsum/intval(date('d'));

        $physicalStore7day = ['pday'=>$list['pday'],'p7day'=>$list['p7day'],'bestProduct'=>$bestProduct->productName,'avg'=>$monthavg];

        return $physicalStore7day;
    }

    public function sale7day()
    {
        $week = (new DateTime(date('Y-m-d')))
                ->modify('-7 day')
                ->format('Y-m-d');

        $now = date('Y-m-d');

        $p7day = PhysicalStore::where('sold_date','>=',$week)
                                ->where('sold_date','<=',$now)
                                ->sum('quantity');

        $s7day = SocialMedia::where('sold_date','>=',$week)
                               ->where('sold_date','<=',$now)
                               ->sum('quantity');

        $e7day = Ecommerce::where('sold_date','>=',$week)
                                  ->where('sold_date','<=',$now)
                                  ->sum('quantity');

        $pday = PhysicalStore::where('sold_date','=',$now)->sum('quantity');
        $sday = SocialMedia::where('sold_date','=',$now)->sum('quantity');
        $eday = Ecommerce::where('sold_date','=',$now)->sum('quantity');

        $sell7daydata = ['pday'=> $pday , 'p7day' => $p7day ,'eday'=>$eday , 'e7day'=>$e7day , 'sday'=>$sday, 's7day'=>$s7day];

        return $sell7daydata;
    }
}



