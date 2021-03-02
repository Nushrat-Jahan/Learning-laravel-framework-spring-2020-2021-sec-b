<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    const CREATED_AT = 'date_sold';
    const UPDATED_AT = 'date_sold';

    protected $table = 'ecommerce_channel';
    protected $primaryKey = 'storeId';

    public $timestamps = true;

}
