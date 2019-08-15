<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = 'employeeId';   // 將主鍵設成employeeId

    function department() {   // 追蹤每個員工所屬的部門名稱
        return $this->hasOne(Department::class, 'departmentId');    
        // 透過hasOne()，根據員工的部門編號，找出該部門的名稱
    }
}
