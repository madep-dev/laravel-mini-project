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
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-5">
                                                <div class="small-box bg-primary">
                                                    <div class="inner">
                                                        <h3>{{ $companies }}</h3>
                                                        <h5>Company</h5>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ri-building-fill"></i>
                                                    </div>
                                                    <a href="/company" class="small-box-footer">
                                                        Detail <i class="ri-arrow-right-s-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <div class="small-box bg-success">
                                                    <div class="inner">
                                                        <h3>{{ $employees }}</h3>
                                                        <h5>Employee</h5>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ri-user-3-fill"></i>
                                                    </div>
                                                    <a href="/employees" class="small-box-footer">
                                                        Detail <i class="ri-arrow-right-s-line"></i>
                                                    </a>
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
        </div>
    </div>
@endsection
