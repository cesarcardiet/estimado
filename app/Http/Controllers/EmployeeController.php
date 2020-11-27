<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {

        return datatables()->query(DB::table('users'))->toJson();
        // return view('employees.index');
    }
}
