<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalStore extends Model
{
    const CREATED_AT = "sold_date";
    const UPDATED_AT = "last_updated";

    protected $table = 'physical_store_channel';
    public $timestamps = true;
    protected $primaryKey = 'productId';
}
