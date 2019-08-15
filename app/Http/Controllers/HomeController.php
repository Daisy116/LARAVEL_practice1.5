<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;     // use參用其他資料夾的檔案
use App\Employee;       // 注意，App開頭要大寫!!!(即使資料夾名是小寫)

class HomeController extends Controller
{
    function index() {
        // $d = Department::find(3);
        // return $d->departmentId;

        // $d = Department::find(2)->employees();
        // dd($d->first()->firstName);
        // dd($d->get());
        
        // $emp = Employee::find(1);
        // dd($emp->firstName);

        // $d = Employee::find(1)->department();
        // dd($d->first()->departmentName);

        $employeeList = Employee::all();
        
        // $departList = Department::all();
        // dd($departList);
        return view("home.index", compact('employeeList'));
    }

    function detail($id) {       
        $emp2 = Employee::find($id);
        // return $emp2;
        $employeeList = Employee::all();
        return view("home.detail", compact('employeeList','emp2'));
    }

    function edit($id) {
        echo $id;
        // return $id;
    }
}
