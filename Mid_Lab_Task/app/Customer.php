<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    const CREATED_AT = "date_added";
    const UPDATED_AT = "last_updated";

    protected $table = 'customers';
    public $timestamps = true;
    protected $primaryKey = 'username';
}
