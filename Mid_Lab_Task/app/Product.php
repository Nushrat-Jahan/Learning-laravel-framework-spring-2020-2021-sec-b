<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    const CREATED_AT = "date_added";
    const UPDATED_AT = "last_updated";

    protected $table = 'products';
    public $timestamps = true;
    protected $primaryKey = 'id';

}
