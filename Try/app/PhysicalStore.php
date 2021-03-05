<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalStore extends Model
{
    const CREATED_AT = "sold_date";
    const UPDATED_AT = "last_updated";

    protected $table = 'physical_store_channel';
    public $timestamps = true;
    protected $primaryKey = 'id';

    protected $fillable = array("customerName",
    "address", "phone",
    "productId",
    "productName" ,
    "unitPrice",
    "quantity",
    "total",
    "sold_date",
    "payType",
    "status");
}
