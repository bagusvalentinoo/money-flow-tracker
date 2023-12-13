@extends('layouts.member')

@section('content')
    <div class="page-heading">
        <x-base.breadcrumb.breadcrumb :breadcrumbs="[
            [
                'name' => 'Report',
                'url' => route('web.user.member.report.index'),
            ],
        ]" />
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 mt-1 mb-1">
                <h3>Report Index Page</h3>
            </div>
        </section>
    </div>
@endsection
