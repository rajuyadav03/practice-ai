@extends('users.website.layout.app')
@section('content')
    <div class="ps-main__wrapper" id="vendor-dashboard">
        <header class="d-sm-flex justify-content-between align-items-center mb-3">
            <h3 class="fs-1">Invoices</h3>
            <div class="d-flex align-items-center gap-4">
                {{-- <div class="dropdown ">
                    <a class="d-flex align-items-center gap-2 dropdown-toggle text-muted text-decoration-none" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/vendor/core/core/base/img/flags/us.svg" title="English"
                            class="flag" style="height: 16px" loading="lazy" alt="English flag">
                        English
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item d-flex gap-2 align-items-center"
                            href="/ar/account/invoices">
                            <img src="/vendor/core/core/base/img/flags/sa.svg" title="Arabic"
                                class="flag" style="height: 16px" loading="lazy" alt="Arabic flag">
                            Arabic

                        </a>
                    </div>
                </div> --}}



                <a href="" target="_blank" class="text-uppercase">
                    Go to homepage
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path d="M13 18l6 -6" />
                        <path d="M13 6l6 6" />
                    </svg> </a>
            </div>
        </header>

        <div id="app">

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
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

                            <form method="GET" action="/account/invoices"
                                accept-charset="UTF-8" class="filter-form">
                                <input type="hidden" name="filter_table_id" class="filter-data-table-id"
                                    value="botble-real-estate-tables-account-invoice-table">
                                <input type="hidden" name="class" class="filter-data-class"
                                    value="Botble\RealEstate\Tables\AccountInvoiceTable">
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
                                        href="/account/invoices"
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
                                                    data-class-item="Botble\RealEstate\Tables\AccountInvoiceTable"
                                                    data-save-url="/admin/tables/bulk-changes/save">

                                                    Name

                                                </button>
                                                <button class="dropdown-item bulk-change-item" data-key="status"
                                                    data-class-item="Botble\RealEstate\Tables\AccountInvoiceTable"
                                                    data-save-url="/admin/tables/bulk-changes/save">

                                                    Status

                                                </button>
                                                <button class="dropdown-item bulk-change-item" data-key="created_at"
                                                    data-class-item="Botble\RealEstate\Tables\AccountInvoiceTable"
                                                    data-save-url="/admin/tables/bulk-changes/save">

                                                    Created At

                                                </button>
                                            </div>
                                        </div>

                                        <a class="dropdown-item"
                                            href="/admin/tables/bulk-actions"
                                            data-trigger-bulk-action="data-trigger-bulk-action" data-method="POST"
                                            data-table-target="Botble\RealEstate\Tables\AccountInvoiceTable"
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

                        </div>
                    </div>

                    <div class="card-table">
                        <div class="table-responsive table-has-actions table-has-filter">
                            <table class="table card-table table-vcenter table-striped table-hover"
                                id="botble-real-estate-tables-account-invoice-table">
                                <thead>
                                    <tr>
                                        <th title="Checkbox"><input
                                                class="form-check-input m-0 align-middle table-check-all"
                                                data-set=".dataTable .checkboxes" name="" type="checkbox"></th>
                                        <th title="ID" width="20"
                                            class="text-center no-column-visibility  column-key-0">ID</th>
                                        <th title="Code" class="text-start  column-key-1">Code</th>
                                        <th title="Amount" class="text-start  column-key-2">Amount</th>
                                        <th title="Created At" width="100" class=" column-key-3">Created At</th>
                                        <th title="Status" width="100" class="text-center  column-key-4">Status</th>
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
@endsection
