@extends('layouts/main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-4 mt-3">{{ $title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="card rounded-3 border-0 shadow-none">
                            <div class="card-body py-5">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10">
                                        <a href="/employees/create" class="btn btn-primary mb-3"><i class="ri-add-line"></i> Add</a>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover" id="example">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">First Name</th>
                                                        <th class="text-center">Last Name</th>
                                                        <th class="text-center">Company</th>
                                                        <th class="text-center">Email</th>
                                                        <th class="text-center">Phone</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($employees as $row)
                                                        <tr>
                                                            <th class="align-middle text-center">{{ $loop->iteration }}</th>
                                                            <td class="align-middle">{{ $row->first_nm }}</td>
                                                            <td class="align-middle">{{ $row->last_nm }}</td>
                                                            <td class="align-middle">{{ $row->company->name }}</td>
                                                            <td class="align-middle">{{ $row->email }}</td>
                                                            <td class="align-middle">{{ $row->phone }}</td>
                                                            <td class="align-middle text-center">
                                                                <a href="/employees/{{ $row->id }}/edit" class="btn btn-sm btn-success"><i class="ri-pencil-fill"></i> Edit</a>
                                                                <a href="{{ route('employees.destroy', $row->id) }}" class="btn btn-sm btn-danger" data-confirm-delete="true"><i
                                                                        class="ri-delete-bin-line"></i>
                                                                    Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
