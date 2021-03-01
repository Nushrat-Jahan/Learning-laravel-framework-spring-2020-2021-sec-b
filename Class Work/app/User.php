<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    /*


    const $CREATED_AT = "Create_Time";
    const UPDATED_AT = "Update_Time";
    */
    protected $table = 'user_table';
    public $timestamps = false;
    protected $primaryKey = 'userId';
}
