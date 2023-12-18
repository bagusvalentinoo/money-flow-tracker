@extends('layouts.member')

@section('style')
    <style type="text/css">
        @media (max-width: 576px) {
            #section-button-export {
                width: 100% !important;
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }

            #section-button-export #button-export {
                width: 100% !important;
            }

            #section-button-download {
                width: 100% !important;
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }

            #section-button-download #button-download {
                width: 100% !important;
            }

            #section-button-delete {
                width: 100% !important;
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }

            #section-button-delete #button-delete {
                width: 100% !important;
            }

            #section-input-search {
                width: 100% !important;
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }

            #section-button-filter {
                width: 100% !important;
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }

            #section-button-filter #button-filter {
                width: 100% !important;
            }

            #section-button-add-new {
                width: 100% !important;
                margin-bottom: 5px !important;
                margin-top: 5px !important;
            }

            #section-button-add-new #button-add-new {
                width: 100% !important;
            }

            #section-input-search-button-filter-button-add-new {
                margin-top: 20px !important;
            }

            #section-display-flex-button-export-button-download-button-delete {
                flex-wrap: wrap !important;
            }

            #section-display-flex-input-search-button-filter-button-add-new {
                flex-wrap: wrap !important;
            }

            #section-filter-showing-entries {
                text-align: start !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="page-heading">
        <x-base.breadcrumb.breadcrumb :breadcrumbs="[
            [
                'name' => 'Expenditure',
                'url' => route('web.user.member.expenditure.index'),
            ],
        ]" />
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 mt-1 mb-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-12 my-1">
                                <div id="section-display-flex-button-export-button-download-button-delete"
                                    class="d-flex align-items-center">
                                    <div id="section-button-export" class="mx-2">
                                        <x-base.button.button id="button-export" type="button"
                                            className="btn-light icon icon-left px-3" text="Export" iconTagI="bi bi-upload"
                                            :iconMargin=true />
                                    </div>
                                    <div id="section-button-download" class="mx-2">
                                        <x-base.button.button id="button-download" type="button"
                                            className="btn-light icon icon-left px-3" text="Download"
                                            iconTagI="bi bi-download" :iconMargin=true />
                                    </div>
                                    <div id="section-button-delete" class="mx-2">
                                        <x-base.button.button id="button-delete" type="button"
                                            className="btn-outline-danger icon icon-left px-3" text="Delete"
                                            iconTagI="bi bi-trash" :iconMargin=true />
                                    </div>
                                </div>
                            </div>
                            <div id="section-input-search-button-filter-button-add-new"
                                class="col-lg-7 col-md-6 col-sm-12 my-1">
                                <div id="section-display-flex-input-search-button-filter-button-add-new"
                                    class="d-flex align-items-center justify-content-end">
                                    <div id="section-input-search" class="mx-2">
                                        <div class="form-group mb-0 position-relative has-icon-left">
                                            <form action="#" method="GET">
                                                @csrf
                                                @method('GET')
                                                <x-base.input.input type="text" placeholder="Search here" />
                                                <x-base.button.button type="submit" className="form-control-icon"
                                                    iconTagI="bi bi-search" />
                                            </form>
                                        </div>
                                    </div>
                                    <div id="section-button-filter" class="mx-2">
                                        <x-base.button.button id="button-filter" type="button"
                                            className="btn-outline-secondary icon icon-left px-3" text="Filter"
                                            iconTagI="bi bi-funnel" :iconMargin=true />
                                    </div>
                                    <div id="section-button-add-new" class="mx-2">
                                        <x-base.button.button id="button-add-new" type="button"
                                            className="btn-secondary icon icon-left" text="Add new"
                                            iconTagI="bi bi-plus-lg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <x-page.member.revenue-expenditure.list-revenues-expenditures-table :items=[] />
                        </div>
                        <div class="col-12 my-3">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div id="section-pagination" class="text-start">
                                        <x-base.pagination.pagination />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div id="section-filter-showing-entries" class="text-end">
                                        <label class="d-inline-flex align-items-center text-nowrap">
                                            Showing
                                            <x-base.select.basic className="mx-2" :options="[
                                                [
                                                    'text' => '10',
                                                    'value' => '10',
                                                ],
                                                [
                                                    'text' => '20',
                                                    'value' => '20',
                                                ],
                                                [
                                                    'text' => '30',
                                                    'value' => '30',
                                                ],
                                                [
                                                    'text' => '40',
                                                    'value' => '40',
                                                ],
                                                [
                                                    'text' => '50',
                                                    'value' => '50',
                                                ],
                                                [
                                                    'text' => '100',
                                                    'value' => '100',
                                                ],
                                            ]" />
                                            of 150
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
