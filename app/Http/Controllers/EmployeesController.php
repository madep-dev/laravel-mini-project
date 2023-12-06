<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all()->sortDesc();

        $title = 'Delete';
        $text = "Are you sure ?";
        confirmDelete($title, $text);

        return view('employees/index', [
            'title' => 'Employees',
            'employees' => $employees
        ]);
    }

    public function create()
    {
        return view('employees/create', [
            'title' => 'Add Employee',
            'companies' => Company::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_nm' => 'required',
            'last_nm' => 'required'
        ]);

        Employees::create([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        Alert::success('Success', '');

        return redirect('/employees');
    }

    public function edit($id)
    {
        return view('employees/edit', [
            'title' => 'Edit Employee',
            'employee' => Employees::find($id),
            'companies' => Company::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_nm' => 'required',
            'last_nm' => 'required'
        ]);

        Employees::where('id', $id)->update([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        Alert::success('Success', '');

        return redirect('/employees');
    }

    public function destroy($id)
    {
        Employees::destroy($id);

        Alert::success('Success', '');

        return redirect('/employees');
    }
}
