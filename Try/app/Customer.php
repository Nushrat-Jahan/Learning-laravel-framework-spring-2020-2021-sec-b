<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /*
    const $CREATED_AT = "Create_Time";
    const UPDATED_AT = "Update_Time";
    */
    protected $table = 'customers';
    public $timestamps = false;
    protected $primaryKey = 'username';
}
