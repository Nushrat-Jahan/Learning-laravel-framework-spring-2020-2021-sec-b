<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users_table';
    public $timestamps = false;
    protected $primaryKey = 'userId';
}
