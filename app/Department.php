<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    protected $primaryKey = 'departmentId';

    function employees() {    // 追蹤部門中的每個員工
        return $this->hasMany(Employee::class, 'departmentId');
        // 透過hasMany()，根據部門編號，找出該部門的所有員工
    }
}
