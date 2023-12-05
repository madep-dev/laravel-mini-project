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
                                        <form action="/company/{{ $company->id }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control " id="name" name="name" value="{{ $company->name }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control " id="address" name="address" value="{{ $company->address }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control " id="email" name="email" value="{{ $company->email }}">
                                            </div>
                                            <div class="form-group text-right">
                                                <a href="/company" class="btn btn-outline-secondary mr-3"><i class="ri-close-line"></i> Cancel</a>
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
