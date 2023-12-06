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
                                        <form action="/company" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name"
                                                    placeholder="Company Name">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control " id="address" name="address" placeholder="Company Address" value="{{ old('address') }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control " id="email" name="email" placeholder="Company Email" value="{{ old('email') }}">
                                            </div>
                                            <div class="form-group text-right">
                                                <a href="/company" class="btn btn-outline-secondary mr-3"><i class="ri-close-line"></i> Cancel</a>
                                                <button type="submit" class="btn btn-primary"><i class="ri-check-line"></i> Add</button>
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
