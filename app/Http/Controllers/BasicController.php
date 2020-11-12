<?php

namespace App\Http\Controllers;

use App\Models\Employee;

// load model
use DB;

// request from form

class BasicController extends Controller
{
    // ฟังก์ชั้น home
    public function home()
    {
        return view('pages/home');
    }
    // ฟังก์ชั้น home
    public function about()
    {
        return view('pages/about');
    }
    // ฟังก์ชั้น home
    public function service()
    {
        return view('pages/service');
    }
    // ฟังก์ชั้น home
    public function portfolio()
    {
        return view('pages/portfolio');
    }
    // ฟังก์ชั้น home
    public function blog()
    {
        return view('pages/blog');
    }
    // ฟังก์ชั้น home
    public function contact()
    {
        return view('pages/contact');
    }

    // อ่านข้อมุ, employees
    public function employees()
    {
        //@emp = DB::table('employees')->get();
        //$emp = DB::table('employees')->get(['id', 'fullname']); // select * employee

        //dd($emp)

        //Where
        // $emp = DB::table('employees')->where('id', 3)->get(['id', 'fullname']);

        //Select 1 items
        // $emp = DB::table('employees')->first();

        //find by id
        // $emp = DB::table('employees')->find(2);

        //Where 2 condition
        // $emp = DB::table('employees')
        //     ->where("id", 1)
        //     ->where("status", 1)
        //     ->first();

        //Aggregates
        // ->Max MIN AVG

        //Insert data
        // $data_emp = array(
        //     'fullname' => 'Santi',
        //     'gender' => 'Santi',
        //     'email' => 'Santi',
        //     'address' => 'Santi',
        //     'avatar' => 'Santi',
        //     'status' => 'Santi',
        // );

        // $emp = DB::table('employees')->insert($data_emp);

        // $emp = DB::table('employees')->get();
        // print_r($emp);

        $emp = DB::table('employees')->paginate(2);

        return view('pages.employee')->with('emps', $emp);
    }

    public function employeelist()
    {
        // อ่านข้อมูลทั้งหมด
        // $employees = Employee::all();
        // print_r($employees);

        $employees = Employee::paginate(2);
        return view('pages.employeelist')->with('employeeList', $employees);

    }
}
