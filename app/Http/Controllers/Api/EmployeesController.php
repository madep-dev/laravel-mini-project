<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeesResource;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();

        return new EmployeesResource(true, 'List Employees', $employees);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_nm' => 'required',
            'last_nm' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $employees = Employees::create([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return new EmployeesResource(true, 'Employee has beed added.', $employees);
    }
}
