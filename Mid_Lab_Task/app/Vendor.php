<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    const CREATED_AT = "date_added";
    const UPDATED_AT = "last_updated";

    protected $table = 'vendors';
    public $timestamps = true;
    protected $primaryKey = 'email';
}
