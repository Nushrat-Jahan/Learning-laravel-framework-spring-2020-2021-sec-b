<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Product extends Model
{
    //
    const CREATED_AT = "date_added";
    const UPDATED_AT = "last_updated";

    protected $table = 'products';
    public $timestamps = true;
    protected $primaryKey = 'id';
    use Sortable;
    protected $fillable = ['product_name'];
    public $sortable = ['id','product_name','category','unit_price','quantity','date_added'];

}
