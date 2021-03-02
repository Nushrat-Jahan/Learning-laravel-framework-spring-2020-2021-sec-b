<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalStore extends Model
{
    const CREATED_AT = 'date_sold';
    const UPDATED_AT = 'date_sold';

    protected $table = 'physical_store_channel';
    protected $primaryKey = 'storeId';

    public $timestamps = true;

}
