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
                                    <div class="col-12 col-md-6">
                                        <form action="/employees/{{ $employee->id }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="first_nm">First Name</label>
                                                <input type="text" class="form-control @error('first_nm') is-invalid @enderror" id="first_nm" name="first_nm"
                                                    value={{ $employee->first_nm }}>
                                                @error('first_nm')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="last_nm">Last Name</label>
                                                <input type="text" class="form-control @error('last_nm') is-invalid @enderror" id="last_nm" name="last_nm"
                                                    value={{ $employee->last_nm }}>
                                                @error('last_nm')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Company</label>
                                                <select class="form-control" id="company_id" name="company_id">
                                                    @foreach ($companies as $row)
                                                        @if (old('company_id', $employee->company_id) == $row->id)
                                                            <option value="{{ $row->id }}" selected>{{ $row->name }}</option>
                                                        @else
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control " id="email" name="email" value={{ $employee->email }}>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="phone">Phone</label>
                                                <input type="number" class="form-control " id="phone" name="phone" value={{ $employee->phone }}>
                                            </div>
                                            <div class="form-group text-right">
                                                <a href="/employees" class="btn btn-outline-secondary mr-3"><i class="ri-close-line"></i> Cancel</a>
                                                <button type="submit" class="btn btn-primary"><i class="ri-save-3-line"></i> Save</button>
                                            </div>
                                        </form>
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
