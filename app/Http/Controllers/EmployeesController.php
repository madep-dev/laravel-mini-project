<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employees/home', [
            'title' => 'Employees'
        ]);
    }

    public function create()
    {
        return view('employees/create', [
            'title' => 'Add Employees'
        ]);
    }
}
