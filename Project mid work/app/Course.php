<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Course extends Model
{
    //
    use Sortable;
    public $sortable = ['course_id' , 'name', 'credits', 'created_at'];
}
