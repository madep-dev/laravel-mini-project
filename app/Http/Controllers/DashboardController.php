<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employees;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $companies = Company::all()->count();
        $employees = Employees::all()->count();

        return view('dashboard', [
            'title' => 'Dashboard',
            'companies' => $companies,
            'employees' => $employees
        ]);
    }
}
