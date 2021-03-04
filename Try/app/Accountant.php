<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
    const CREATED_AT = "date_added";
    const UPDATED_AT = "last_updated";

    protected $table = 'accountants';
    public $timestamps = true;
    protected $primaryKey = 'email';
}
