@extends('layouts.member')

@section('content')
    <div class="page-heading">
        <x-base.breadcrumb.breadcrumb :breadcrumbs="[
            [
                'name' => 'Dashboard',
                'url' => route('web.user.member.dashboard.index'),
            ],
        ]" />
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 my-1">
                <div class="card alert alert-dismissible fade show" role="alert">
                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-lg-8 col-md-6 col-sm-12 ps-5 my-auto">
                                <h2>Welcome back John!</h2>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, at?</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 my-auto">
                                <img class="w-75" src="{{ asset('assets/images/page/dashboard/welcome.svg') }}"
                                    alt="Welcome Illustration">
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="w-25" src="{{ asset('assets/images/page/dashboard/revenue.svg') }}"
                                alt="Revenue Illustration">
                            <h4 class="mt-3 ms-4 text-success">Revenue</h4>
                        </div>
                        <div class="d-block text-center mt-4">
                            <h4 class="text-success">Rp. 1.000.000</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="w-25" src="{{ asset('assets/images/page/dashboard/expenditure.svg') }}"
                                alt="Expenditure Illustration">
                            <h4 class="mt-3 ms-4 text-danger">Expenditure</h4>
                        </div>
                        <div class="d-block text-center mt-4">
                            <h4 class="text-danger">Rp. 500.000</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="w-25" src="{{ asset('assets/images/page/dashboard/net_asset.svg') }}"
                                alt="Net Assets Illustration">
                            <h4 class="mt-3 ms-4 text-primary">Net Assets</h4>
                        </div>
                        <div class="d-block text-center mt-4">
                            <h4 class="text-primary">Rp. 500.000</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
