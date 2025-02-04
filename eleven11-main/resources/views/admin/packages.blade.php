@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/admin/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">Packages</h1>
                                    </li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body page-content">
            <div class="container-xl">


                <div class="table-wrapper">
                    <div class="card mb-3 table-configuration-wrap" style="display: none;">
                        <div class="card-body">
                            <button class="btn btn-icon  btn-sm btn-show-table-options rounded-pill" type="button">
                                <svg class="icon icon-sm icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                </svg>

                            </button>

                            <div class="wrapper-filter">
                                <p>Filters</p>

                                <input type="hidden" class="filter-data-url"
                                    value="/admin/tables/filters" />

                                <div class="sample-filter-item-wrap hidden">
                                    <div class="row filter-item form-filter">
                                        <div class="col-auto w-50 w-sm-auto">
                                            <div class="mb-3 position-relative">
                                                <select class="form-select filter-column-key" name="filter_columns[]"
                                                    id="filter_columns[]">
                                                    <option value="name">Name</option>
                                                    <option value="status">Status</option>
                                                    <option value="created_at">Created At</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-auto w-50 w-sm-auto">
                                            <div class="mb-3 position-relative">
                                                <select class="form-select filter-operator filter-column-operator"
                                                    name="filter_operators[]" id="filter_operators[]">
                                                    <option value="like">Contains</option>
                                                    <option value="=">Is equal to</option>
                                                    <option value="&gt;">Greater than</option>
                                                    <option value="&lt;">Less than</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-auto w-100 w-sm-25">
                                            <span class="filter-column-value-wrap">
                                                <input class="form-control filter-column-value" type="text"
                                                    placeholder="Value" name="filter_values[]">
                                            </span>
                                        </div>

                                        <div class="col">
                                            <button class="btn btn-icon   btn-remove-filter-item mb-3 text-danger"
                                                type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Delete">
                                                <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <form method="GET" action="/admin/real-estate/packages"
                                    accept-charset="UTF-8" class="filter-form">
                                    <input type="hidden" name="filter_table_id" class="filter-data-table-id"
                                        value="botble-real-estate-tables-package-table">
                                    <input type="hidden" name="class" class="filter-data-class"
                                        value="Botble\RealEstate\Tables\PackageTable">
                                    <div class="filter_list inline-block filter-items-wrap">
                                        <div class="row filter-item form-filter filter-item-default">
                                            <div class="col-auto w-50 w-sm-auto">
                                                <div class="mb-3 position-relative">
                                                    <select class="form-select filter-column-key" name="filter_columns[]"
                                                        id="filter_columns[]">
                                                        <option value="" selected>Select field</option>
                                                        <option value="name">Name</option>
                                                        <option value="status">Status</option>
                                                        <option value="created_at">Created At</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-auto w-50 w-sm-auto">
                                                <div class="mb-3 position-relative">
                                                    <select class="form-select filter-operator filter-column-operator"
                                                        name="filter_operators[]" id="filter_operators[]">
                                                        <option value="like">Contains</option>
                                                        <option value="=" selected>Is equal to</option>
                                                        <option value="&gt;">Greater than</option>
                                                        <option value="&lt;">Less than</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-auto w-100 w-sm-25">
                                                <div class="filter-column-value-wrap mb-3">
                                                    <input class="form-control filter-column-value" type="text"
                                                        placeholder="Value" name="filter_values[]" value="">
                                                </div>
                                            </div>

                                            <div class="col">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-list">
                                        <button class="btn   add-more-filter" type="button">

                                            Add additional filter

                                        </button>
                                        <button class="btn btn-primary  btn-apply" type="submit">

                                            Apply

                                        </button>
                                        <a class="btn btn-icon" style="display: none;" type="button"
                                            href="/admin/real-estate/packages"
                                            data-bb-toggle="datatable-reset-filter">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                            </svg>

                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card has-actions has-filter">
                        <div class="card-header">
                            <div class="w-100 justify-content-between d-flex flex-wrap align-items-center gap-1">
                                <div class="d-flex flex-wrap flex-md-nowrap align-items-center gap-1">
                                    <div class="dropdown d-inline-block">
                                        <div class="dropdown-menu">
                                            <div class="dropdown-submenu">
                                                <button class="dropdown-item">

                                                    Bulk changes

                                                    <svg class="icon dropdown-item-icon ms-auto me-0"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M9 6l6 6l-6 6" />
                                                    </svg> </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item bulk-change-item" data-key="name"
                                                        data-class-item="Botble\RealEstate\Tables\PackageTable"
                                                        data-save-url="/admin/tables/bulk-changes/save">

                                                        Name

                                                    </button>
                                                    <button class="dropdown-item bulk-change-item" data-key="status"
                                                        data-class-item="Botble\RealEstate\Tables\PackageTable"
                                                        data-save-url="/admin/tables/bulk-changes/save">

                                                        Status

                                                    </button>
                                                    <button class="dropdown-item bulk-change-item" data-key="created_at"
                                                        data-class-item="Botble\RealEstate\Tables\PackageTable"
                                                        data-save-url="/admin/tables/bulk-changes/save">

                                                        Created At

                                                    </button>
                                                </div>
                                            </div>

                                            <a class="dropdown-item"
                                                href="/admin/tables/bulk-actions"
                                                data-trigger-bulk-action="data-trigger-bulk-action" data-method="POST"
                                                data-table-target="Botble\RealEstate\Tables\PackageTable"
                                                data-target="Botble\Table\BulkActions\DeleteBulkAction"
                                                data-confirmation-modal-title="Confirm to perform this action"
                                                data-confirmation-modal-message="Are you sure you want to do this action? This cannot be undone."
                                                data-confirmation-modal-button="Delete"
                                                data-confirmation-modal-cancel-button="Cancel">

                                                Delete

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="/admin/packages/create" class="btn action-item btn-primary" tabindex="0"
                                        aria-controls="botble-real-estate-tables-package-table" type="button"
                                        aria-haspopup="dialog" aria-expanded="false">
                                        <span data-action="create"
                                            data-href="/admin/real-estate/packages/create"><svg
                                                class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 5l0 14" />
                                                <path d="M5 12l14 0" />
                                            </svg>Create
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-table">
                            <div class="table-responsive table-has-actions table-has-filter">
                                <table class="table card-table table-vcenter table-striped table-hover"
                                    id="botble-real-estate-tables-package-table">
                                    <thead>
                                        <tr>
                                            <th title="Checkbox"><input
                                                    class="form-check-input m-0 align-middle table-check-all"
                                                    data-set=".dataTable .checkboxes" name="" type="checkbox">
                                            </th>
                                            <th title="ID" width="20"
                                                class="text-center no-column-visibility  column-key-0">ID</th>
                                            <th title="Name" class="text-start  column-key-1">Name</th>
                                            <th title="Created At" width="100" class=" column-key-2">Created At
                                            </th>
                                            <th title="Status" width="100" class="text-center  column-key-3">
                                                Status</th>
                                            <th title="Languages"><img
                                                    src="/vendor/core/core/base/img/flags/us.svg"
                                                    title="English" class="flag" style="height: 16px" loading="lazy"
                                                    alt="English flag"><img
                                                    src="/vendor/core/core/base/img/flags/sa.svg"
                                                    title="Arabic" class="flag" style="height: 16px" loading="lazy"
                                                    alt="Arabic flag"></th>
                                            <th title="Operations">Operations</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>

        <footer class="footer position-sticky footer-transparent d-print-none">
            <div class="container-xl">
                <div class="text-start">
                    <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-between">
                        <div class="order-2 order-lg-1">
                            Copyright 2024 © Archi Elite. Version <span class="fw-medium">1.10.5</span>
                        </div>
                        <div class="order-1 order-lg-2">
                            Page loaded in 1.15 seconds
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    </div>
@endsection
