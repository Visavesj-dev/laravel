<?php

namespace App\Http\Controllers;

use App\Models\Department;

class EmployeeController extends Controller
{
    public function view_deptmanager()
    {
        // $dep_manager = DeptManager::all();
        $department = Department::where("dept_name", "=", "Customer Service")->get();

        return view('pages.deptmanager')->with('dep_managers', $department);
    }
}
