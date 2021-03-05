<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    const CREATED_AT = "date_added";
    const UPDATED_AT = "last_updated";

    protected $table = 'admins';
    public $timestamps = true;
    protected $primaryKey = 'email';
}
