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
                                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Accounts</h1>
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
                                                <option value="first_name">First Name</option>
                                                <option value="last_name">Last Name</option>
                                                <option value="email">Email</option>
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

                            <form method="GET" action="/admin/real-estate/accounts"
                                accept-charset="UTF-8" class="filter-form">
                                <input type="hidden" name="filter_table_id" class="filter-data-table-id"
                                    value="botble-real-estate-tables-account-table">
                                <input type="hidden" name="class" class="filter-data-class"
                                    value="Botble\RealEstate\Tables\AccountTable">
                                <div class="filter_list inline-block filter-items-wrap">
                                    <div class="row filter-item form-filter filter-item-default">
                                        <div class="col-auto w-50 w-sm-auto">
                                            <div class="mb-3 position-relative">
                                                <select class="form-select filter-column-key" name="filter_columns[]"
                                                    id="filter_columns[]">
                                                    <option value="" selected="">Select field</option>
                                                    <option value="first_name">First Name</option>
                                                    <option value="last_name">Last Name</option>
                                                    <option value="email">Email</option>
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
                                        href="/admin/real-estate/accounts"
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
                    <div class="card-header">
                        <div class="w-100 gap-2 d-block d-md-flex align-items-start justify-content-between flex-wrap">
                            <div class="d-block d-md-flex gap-2">
                                <div class="dropdown d-inline-block mb-1">
                                    <div class="dropdown-menu">
                                        <div class="dropdown-submenu">
                                            <button class="dropdown-item">

                                                Bulk changes

                                                <svg class="icon dropdown-item-icon ms-auto me-0"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                    </path>
                                                    <path d="M9 6l6 6l-6 6"></path>
                                                </svg> </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item bulk-change-item" data-key="first_name"
                                                    data-class-item="Botble\RealEstate\Tables\AccountTable"
                                                    data-save-url="/admin/tables/bulk-changes/save">

                                                    First Name

                                                </button>
                                                <button class="dropdown-item bulk-change-item" data-key="last_name"
                                                    data-class-item="Botble\RealEstate\Tables\AccountTable"
                                                    data-save-url="/admin/tables/bulk-changes/save">

                                                    Last Name

                                                </button>
                                                <button class="dropdown-item bulk-change-item" data-key="email"
                                                    data-class-item="Botble\RealEstate\Tables\AccountTable"
                                                    data-save-url="/admin/tables/bulk-changes/save">

                                                    Email

                                                </button>
                                                <button class="dropdown-item bulk-change-item" data-key="created_at"
                                                    data-class-item="Botble\RealEstate\Tables\AccountTable"
                                                    data-save-url="/admin/tables/bulk-changes/save">

                                                    Created At

                                                </button>
                                            </div>
                                        </div>

                                        <a class="dropdown-item"
                                            href="/admin/tables/bulk-actions"
                                            data-trigger-bulk-action="data-trigger-bulk-action" data-method="POST"
                                            data-table-target="Botble\RealEstate\Tables\AccountTable"
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

                            <div class="d-block d-md-flex gap-2 mb-1">
                                <a href="/admin/accounts/create" class="mb-1 btn action-item btn-primary" tabindex="0"
                                    aria-controls="botble-real-estate-tables-account-table" type="button"
                                    aria-haspopup="dialog" aria-expanded="false">
                                    <span data-action="create"
                                        data-href="admin/accounts/create"><svg
                                            class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 5l0 14"></path>
                                            <path d="M5 12l14 0"></path>
                                        </svg>Create
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-table">
                        <div class="table-responsive table-has-actions table-has-filter">
                            <div id="botble-real-estate-tables-account-table_wrapper"
                                class="dataTables_wrapper dt-bootstrap5 no-footer">



                                <div id="botble-real-estate-tables-account-table_processing"
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
                                    id="botble-real-estate-tables-account-table"
                                    aria-describedby="botble-real-estate-tables-account-table_info">
                                    <thead>
                                        <tr>
                                            <th class="w-1 text-start no-column-visibility sorting_disabled"
                                                rowspan="1" colspan="1" aria-label=""><input
                                                    class="form-check-input m-0 align-middle table-check-all"
                                                    data-set=".dataTable .checkboxes" name="" type="checkbox">
                                            </th>
                                            <th title="ID" width="20"
                                                class="text-center no-column-visibility column-key-0 sorting sorting_desc"
                                                tabindex="0" aria-controls="botble-real-estate-tables-account-table"
                                                rowspan="1" colspan="1" style="width: 20px;"
                                                aria-sort="descending" aria-label="IDorderby asc">ID</th>
                                            <th title="Image" width="70" class="column-key-1 sorting"
                                                tabindex="0" aria-controls="botble-real-estate-tables-account-table"
                                                rowspan="1" colspan="1" style="width: 70px;"
                                                aria-label="Imageorderby asc">Image</th>
                                            <th title="Name" class="text-start column-key-2 sorting_disabled"
                                                rowspan="1" colspan="1" aria-label="Name">Name</th>
                                            <th title="Email" class="text-start column-key-3 sorting" tabindex="0"
                                                aria-controls="botble-real-estate-tables-account-table" rowspan="1"
                                                colspan="1" aria-label="Emailorderby asc">Email
                                            </th>
                                            <th title="Phone" class="text-start column-key-4 sorting" tabindex="0"
                                                aria-controls="botble-real-estate-tables-account-table" rowspan="1"
                                                colspan="1" aria-label="Phoneorderby asc">Phone
                                            </th>
                                            <th title="credits" class="text-start column-key-5 sorting"
                                                tabindex="0" aria-controls="botble-real-estate-tables-account-table"
                                                rowspan="1" colspan="1" aria-label="creditsorderby asc">
                                                credits</th>
                                            <th title="Number of properties" width="100"
                                                class="column-key-6 sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 100px;" aria-label="Number of properties">Number of
                                                properties</th>
                                            <th title="Created At" width="100" class="column-key-7 sorting"
                                                tabindex="0" aria-controls="botble-real-estate-tables-account-table"
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
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="21">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                21</td>
                                            <td class="   column-key-1"><img
                                                    src="{{asset('img/2-150x150.jpg')}}"
                                                    width="50" alt="Pat Berge"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/21"
                                                    title="Pat Berge">Pat Berge</a></td>
                                            <td class="  text-start  column-key-3">
                                                maximilian.fahey@nicolas.info</td>
                                            <td class="  text-start  column-key-4">+18285840799</td>
                                            <td class="  text-start  column-key-5">2</td>
                                            <td class="   column-key-6">1</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/21">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/21"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="20">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                20</td>
                                            <td class="   column-key-1"><img
                                                    src="{{asset('img/2-150x150.jpg')}}"
                                                    width="50" alt="Micaela Shields"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/20"
                                                    title="Micaela Shields">Micaela Shields</a></td>
                                            <td class="  text-start  column-key-3">raoul.reichert@crona.biz
                                            </td>
                                            <td class="  text-start  column-key-4">+18433872859</td>
                                            <td class="  text-start  column-key-5">2</td>
                                            <td class="   column-key-6">3</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/20">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/20"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="19">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                19</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/6-150x150.jpg"
                                                    width="50" alt="Jamal Mraz"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/19"
                                                    title="Jamal Mraz">Jamal Mraz</a></td>
                                            <td class="  text-start  column-key-3">toy.martine@rolfson.com
                                            </td>
                                            <td class="  text-start  column-key-4">+15166329609</td>
                                            <td class="  text-start  column-key-5">3</td>
                                            <td class="   column-key-6">0</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/19">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/19"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="18">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                18</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/7-150x150.jpg"
                                                    width="50" alt="Anna Stark"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/18"
                                                    title="Anna Stark">Anna Stark</a></td>
                                            <td class="  text-start  column-key-3">ukirlin@cormier.org</td>
                                            <td class="  text-start  column-key-4">+14583304145</td>
                                            <td class="  text-start  column-key-5">10</td>
                                            <td class="   column-key-6">1</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/18">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/18"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="17">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                17</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/6-150x150.jpg"
                                                    width="50" alt="Jovanny Pacocha"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/17"
                                                    title="Jovanny Pacocha">Jovanny Pacocha</a></td>
                                            <td class="  text-start  column-key-3">
                                                urban.jakubowski@yahoo.com</td>
                                            <td class="  text-start  column-key-4">+17079146278</td>
                                            <td class="  text-start  column-key-5">2</td>
                                            <td class="   column-key-6">2</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/17">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/17"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="16">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                16</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/7-150x150.jpg"
                                                    width="50" alt="Judy Schroeder"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/16"
                                                    title="Judy Schroeder">Judy Schroeder</a></td>
                                            <td class="  text-start  column-key-3">elyse.hessel@yahoo.com
                                            </td>
                                            <td class="  text-start  column-key-4">+17579246332</td>
                                            <td class="  text-start  column-key-5">1</td>
                                            <td class="   column-key-6">1</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/16">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/16"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="15">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                15</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/4-150x150.jpg"
                                                    width="50" alt="Dena Maggio"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/15"
                                                    title="Dena Maggio">Dena Maggio</a></td>
                                            <td class="  text-start  column-key-3">ufarrell@yahoo.com</td>
                                            <td class="  text-start  column-key-4">+16204470498</td>
                                            <td class="  text-start  column-key-5">3</td>
                                            <td class="   column-key-6">1</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/15">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/15"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="14">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                14</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/2-150x150.jpg"
                                                    width="50" alt="Naomi Hagenes"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/14"
                                                    title="Naomi Hagenes">Naomi Hagenes</a></td>
                                            <td class="  text-start  column-key-3">kallie.wisoky@friesen.com
                                            </td>
                                            <td class="  text-start  column-key-4">+13169200099</td>
                                            <td class="  text-start  column-key-5">5</td>
                                            <td class="   column-key-6">1</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/14">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/14"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="13">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                13</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/7-150x150.jpg"
                                                    width="50" alt="Gilbert Bogisich"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/13"
                                                    title="Gilbert Bogisich">Gilbert Bogisich</a></td>
                                            <td class="  text-start  column-key-3">cremin.joannie@gmail.com
                                            </td>
                                            <td class="  text-start  column-key-4">+12024478002</td>
                                            <td class="  text-start  column-key-5">8</td>
                                            <td class="   column-key-6">1</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/13">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/13"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="w-1 text-start no-column-visibility dtr-control">
                                                <input class="form-check-input m-0 align-middle checkboxes"
                                                    type="checkbox" name="id[]" value="12">
                                            </td>
                                            <td class="text-center no-column-visibility column-key-0 sorting_1">
                                                12</td>
                                            <td class="   column-key-1"><img
                                                    src="/storage/accounts/5-150x150.jpg"
                                                    width="50" alt="Janis Miller"></td>
                                            <td class="  text-start  column-key-2"><a
                                                    href="/admin/real-estate/accounts/edit/12"
                                                    title="Janis Miller">Janis Miller</a></td>
                                            <td class="  text-start  column-key-3">oleannon@littel.com</td>
                                            <td class="  text-start  column-key-4">+13527362054</td>
                                            <td class="  text-start  column-key-5">6</td>
                                            <td class="   column-key-6">0</td>
                                            <td class="   column-key-7">2024-02-19</td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="/admin/real-estate/accounts/edit/12">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        <span class="sr-only">Edit</span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger"
                                                        href="/admin/real-estate/accounts/12"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-footer d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2"
                                    style="">
                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                        <div class="dataTables_length"
                                            id="botble-real-estate-tables-account-table_length"><label><span
                                                    class="dt-length-style"><select
                                                        name="botble-real-estate-tables-account-table_length"
                                                        aria-controls="botble-real-estate-tables-account-table"
                                                        class="form-select form-select-sm">
                                                        <option value="10">10</option>
                                                        <option value="30">30</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="500">500</option>
                                                        <option value="-1">All</option>
                                                    </select></span></label></div>
                                        <div class="m-0 text-muted">
                                            <div class="dataTables_info"
                                                id="botble-real-estate-tables-account-table_info" role="status"
                                                aria-live="polite"><span class="dt-length-records">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0">
                                                        </path>
                                                        <path d="M3.6 9h16.8"></path>
                                                        <path d="M3.6 15h16.8"></path>
                                                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                                    </svg> <span class="d-none d-sm-inline">Show from</span>
                                                    1
                                                    to 10 in
                                                    <span class="badge bg-secondary text-secondary-fg">

                                                        21
                                                    </span>
                                                    <span class="hidden-xs">records</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="botble-real-estate-tables-account-table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="botble-real-estate-tables-account-table_previous"><a
                                                        aria-controls="botble-real-estate-tables-account-table"
                                                        aria-disabled="true" aria-label="&amp;laquo; Previous"
                                                        role="link" data-dt-idx="previous" tabindex="-1"
                                                        class="page-link">« Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="botble-real-estate-tables-account-table"
                                                        role="link" aria-current="page" data-dt-idx="0"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="botble-real-estate-tables-account-table"
                                                        role="link" data-dt-idx="1" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="botble-real-estate-tables-account-table"
                                                        role="link" data-dt-idx="2" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="botble-real-estate-tables-account-table_next"><a
                                                        href="#"
                                                        aria-controls="botble-real-estate-tables-account-table"
                                                        aria-label="Next &amp;raquo;" role="link"
                                                        data-dt-idx="next" tabindex="0" class="page-link">Next
                                                        »</a></li>
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
