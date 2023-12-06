<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all()->sortDesc();

        $title = 'Delete';
        $text = "Are you sure ?";
        confirmDelete($title, $text);

        return view('company/index', [
            'title' => 'Companies',
            'companies' => $companies
        ]);
    }

    public function create()
    {
        return view('company/create', [
            'title' => 'Add Company'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Company::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
        ]);

        Alert::success('Success', '');

        return redirect('/company');
    }

    public function edit($id)
    {
        return view('company/edit', [
            'title' => 'Edit Company',
            'company' => Company::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Company::where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
        ]);

        Alert::success('Success', '');

        return redirect('/company');
    }

    public function destroy($id)
    {
        Company::destroy($id);

        Alert::success('Success', '');

        return redirect('/company');
    }
}
