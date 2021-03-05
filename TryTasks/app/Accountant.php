<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
    protected $table = 'accountants';
    public $timestamps = false;
    protected $primaryKey = 'email';
}
