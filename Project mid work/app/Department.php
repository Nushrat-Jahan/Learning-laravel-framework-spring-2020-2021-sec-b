<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Department extends Model
{
    //
    use Sortable;
    public $sortable = ['department_id' , 'name', 'created_at'];
}
