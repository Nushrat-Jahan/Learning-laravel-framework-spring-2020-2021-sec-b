<?php

namespace App\Exports;

use App\PhysicalStore;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class PhysicalStoreExport implements FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return PhysicalStore::query()->where('status','sold')->whereYear('sold_date',date('Y'))->whereMonth('sold_date',date('m'));
    }
}
