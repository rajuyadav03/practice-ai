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
                                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Payments</h1>
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
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18 6l-12 12"></path>
                                <path d="M6 6l12 12"></path>
                            </svg>

                        </button>

                        <div class="wrapper-filter">
                            <p>Filters</p>

                            <input type="hidden" class="filter-data-url"
                                value="/admin/tables/filters">

                            <div class="sample-filter-item-wrap hidden">
                                <div class="row filter-item form-filter">
                                    <div class="col-auto w-50 w-sm-auto">
                                        <div class="mb-3 position-relative">
                                            <select class="form-select filter-column-key" name="filter_columns[]"
                                                id="filter_columns[]">
                                                <option value="status">Status</option>
                                                <option value="charge_id">Charge ID</option>
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
                                                <option value=">">Greater than</option>
                                                <option value="<">Less than</option>
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
                                            aria-label="Delete" data-bs-original-title="Delete">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 7l16 0"></path>
                                                <path d="M10 11l0 6"></path>
                                                <path d="M14 11l0 6"></path>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                </path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            </div>

                            <form method="GET" action="/admin/payments/transactions"
                                accept-charset="UTF-8" class="filter-form">
                                <input type="hidden" name="filter_table_id" class="filter-data-table-id"
                                    value="botble-payment-tables-payment-table">
                                <input type="hidden" name="class" class="filter-data-class"
                                    value="Botble\Payment\Tables\PaymentTable">
                                <div class="filter_list inline-block filter-items-wrap">
                                    <div class="row filter-item form-filter filter-item-default">
                                        <div class="col-auto w-50 w-sm-auto">
                                            <div class="mb-3 position-relative">
                                                <select class="form-select filter-column-key" name="filter_columns[]"
                                                    id="filter_columns[]">
                                                    <option value="" selected="">Select field</option>
                                                    <option value="status">Status</option>
                                                    <option value="charge_id">Charge ID</option>
                                                    <option value="created_at">Created At</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-auto w-50 w-sm-auto">
                                            <div class="mb-3 position-relative">
                                                <select class="form-select filter-operator filter-column-operator"
                                                    name="filter_operators[]" id="filter_operators[]">
                                                    <option value="like">Contains</option>
                                                    <option value="=" selected="">Is equal to</option>
                                                    <option value=">">Greater than</option>
                                                    <option value="<">Less than</option>
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
                                        href="/admin/payments/transactions"
                                        data-bb-toggle="datatable-reset-filter">
                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                        </svg>

                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card has-actions has-filter">
                    <div class="card-table">
                        <div class="table-responsive table-has-actions table-has-filter">
                            <div id="botble-payment-tables-payment-table_wrapper"
                                class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div id="botble-payment-tables-payment-table_processing"
                                    class="dataTables_processing card" role="status" style="display: none;">
                                    <div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <table
                                    class="table card-table table-vcenter table-striped table-hover dataTable no-footer dtr-inline"
                                    id="botble-payment-tables-payment-table"
                                    aria-describedby="botble-payment-tables-payment-table_info">
                                    <thead>
                                        <tr>
                                            <th class="w-1 text-start no-column-visibility sorting_disabled"
                                                rowspan="1" colspan="1" aria-label=""><input
                                                    class="form-check-input m-0 align-middle table-check-all"
                                                    data-set=".dataTable .checkboxes" name="" type="checkbox">
                                            </th>
                                            <th title="ID" width="20"
                                                class="text-center no-column-visibility column-key-0 sorting sorting_desc"
                                                tabindex="0" aria-controls="botble-payment-tables-payment-table"
                                                rowspan="1" colspan="1" style="width: 20px;"
                                                aria-sort="descending" aria-label="IDorderby asc">ID</th>
                                            <th title="Charge ID" class="column-key-1 sorting" tabindex="0"
                                                aria-controls="botble-payment-tables-payment-table" rowspan="1"
                                                colspan="1" aria-label="Charge IDorderby asc">
                                                Charge ID</th>
                                            <th title="Payer Name" class="text-start column-key-2 sorting"
                                                tabindex="0" aria-controls="botble-payment-tables-payment-table"
                                                rowspan="1" colspan="1" aria-label="Payer Nameorderby asc">
                                                Payer Name</th>
                                            <th title="Amount" class="text-start column-key-3 sorting" tabindex="0"
                                                aria-controls="botble-payment-tables-payment-table" rowspan="1"
                                                colspan="1" aria-label="Amountorderby asc">
                                                Amount</th>
                                            <th title="Payment Channel" class="text-start column-key-4 sorting"
                                                tabindex="0" aria-controls="botble-payment-tables-payment-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Payment Channelorderby asc">Payment Channel</th>
                                            <th title="Status" width="100"
                                                class="text-center column-key-5 sorting" tabindex="0"
                                                aria-controls="botble-payment-tables-payment-table" rowspan="1"
                                                colspan="1" style="width: 100px;" aria-label="Statusorderby asc">
                                                Status</th>
                                            <th title="Created At" width="100" class="column-key-6 sorting"
                                                tabindex="0" aria-controls="botble-payment-tables-payment-table"
                                                rowspan="1" colspan="1" style="width: 100px;"
                                                aria-label="Created Atorderby asc">Created At</th>
                                            <th title="Operations"
                                                class="text-center no-column-visibility text-nowrap sorting_disabled"
                                                rowspan="1" colspan="1" aria-label="Operations">Operations
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td valign="top" colspan="9" class="dataTables_empty">No data to
                                                display</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-footer d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2"
                                    style="display: none !important;">
                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                        <div class="dataTables_length" id="botble-payment-tables-payment-table_length"
                                            style="display: none;"><label><span class="dt-length-style"><select
                                                        name="botble-payment-tables-payment-table_length"
                                                        aria-controls="botble-payment-tables-payment-table"
                                                        class="form-select form-select-sm">
                                                        <option value="10">10</option>
                                                        <option value="30">30</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="500">500</option>
                                                        <option value="-1">All</option>
                                                    </select></span></label></div>
                                        <div class="m-0 text-muted">
                                            <div class="dataTables_info" id="botble-payment-tables-payment-table_info"
                                                role="status" aria-live="polite" style="display: none;">No record
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="botble-payment-tables-payment-table_paginate" style="display: none;">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="botble-payment-tables-payment-table_previous"><a
                                                        aria-controls="botble-payment-tables-payment-table"
                                                        aria-disabled="true" aria-label="&amp;laquo; Previous"
                                                        role="link" data-dt-idx="previous" tabindex="-1"
                                                        class="page-link">« Previous</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="botble-payment-tables-payment-table_next"><a
                                                        aria-controls="botble-payment-tables-payment-table"
                                                        aria-disabled="true" aria-label="Next &amp;raquo;"
                                                        role="link" data-dt-idx="next" tabindex="-1"
                                                        class="page-link">Next »</a></li>
                                            </ul>
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

    <footer class="footer position-sticky footer-transparent d-print-none">
        <div class="container-xl">
            <div class="text-start">
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-between">
                    <div class="order-2 order-lg-1">
                        Copyright 2024 © Eleven11 . Version <span class="fw-medium">1.9.5</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
</div>
@endsection