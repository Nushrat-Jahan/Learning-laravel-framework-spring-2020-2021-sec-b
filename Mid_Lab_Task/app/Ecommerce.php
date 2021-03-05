<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    const CREATED_AT = "sold_date";
    const UPDATED_AT = "last_updated";

    protected $table = 'ecommerce_channel';
    public $timestamps = true;
    protected $primaryKey = 'productId';
}
