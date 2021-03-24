<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Student extends Model
{
    use Sortable;
    public $sortable = ['student_id' , 'name', 'email', 'created_at','department_id','credits_completed'];
}
