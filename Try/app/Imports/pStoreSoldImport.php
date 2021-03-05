<?php

namespace App\Imports;

use App\PhysicalStore;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class pStoreSoldImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PhysicalStore([
            "customerName" => $row[1],
            "address" => $row[2],
            "phone" => $row[3],
            "productId" => $row[4],
            "productName" => $row[5],
            "unitPrice" => $row[6],
            "quantity" => $row[7],
            "total" => $row[8],
            "sold_date" => $row[9],
            "payType" => $row[10],
            "status" => $row[11],
        ]);
    }
}
