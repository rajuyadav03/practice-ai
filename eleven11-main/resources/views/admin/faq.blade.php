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
                                    <a href="admin">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <h1 class="mb-0 d-inline-block fs-6 lh-1">FAQs</h1>
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
                        <button class="btn btn-icon  btn-sm btn-show-table-options rounded-pill"
                            type="button">
                            <svg class="icon icon-sm icon-left" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18 6l-12 12"></path>
                                <path d="M6 6l12 12"></path>
                            </svg>

                        </button>

                        <div class="wrapper-filter">
                            <p>Filters</p>

                            <input type="hidden" class="filter-data-url"
                                value="admin/tables/filters">

                            <div class="sample-filter-item-wrap hidden">
                                <div class="row filter-item form-filter">
                                    <div class="col-auto w-50 w-sm-auto">
                                        <div class="mb-3 position-relative">
                                            <select class="form-select filter-column-key"
                                                name="filter_columns[]" id="filter_columns[]">
                                                <option value="question">Question</option>
                                                <option value="created_at">Created At</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-auto w-50 w-sm-auto">
                                        <div class="mb-3 position-relative">
                                            <select
                                                class="form-select filter-operator filter-column-operator"
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
                                        <button
                                            class="btn btn-icon   btn-remove-filter-item mb-3 text-danger"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Delete" data-bs-original-title="Delete">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
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

                            <form method="GET" action="admin/faqs"
                                accept-charset="UTF-8" class="filter-form">
                                <input type="hidden" name="filter_table_id" class="filter-data-table-id"
                                    value="botble-faq-tables-faq-table">
                                <input type="hidden" name="class" class="filter-data-class"
                                    value="Botble\Faq\Tables\FaqTable">
                                <div class="filter_list inline-block filter-items-wrap">
                                    <div class="row filter-item form-filter filter-item-default">
                                        <div class="col-auto w-50 w-sm-auto">
                                            <div class="mb-3 position-relative">
                                                <select class="form-select filter-column-key"
                                                    name="filter_columns[]" id="filter_columns[]">
                                                    <option value="" selected="">Select field</option>
                                                    <option value="question">Question</option>
                                                    <option value="created_at">Created At</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-auto w-50 w-sm-auto">
                                            <div class="mb-3 position-relative">
                                                <select
                                                    class="form-select filter-operator filter-column-operator"
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
                                        href="admin/faqs"
                                        data-bb-toggle="datatable-reset-filter">
                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
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
                        <div
                            class="w-100 gap-2 d-block d-md-flex align-items-start justify-content-between flex-wrap">
                            <div class="d-block d-md-flex gap-2">
                                <div class="dropdown d-inline-block mb-1">
                                    <div class="dropdown-menu">
                                        <div class="dropdown-submenu">
                                            <button class="dropdown-item">

                                                Bulk changes

                                                <svg class="icon dropdown-item-icon ms-auto me-0"
                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                    </path>
                                                    <path d="M9 6l6 6l-6 6"></path>
                                                </svg> </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item bulk-change-item"
                                                    data-key="question"
                                                    data-class-item="Botble\Faq\Tables\FaqTable"
                                                    data-save-url="admin/tables/bulk-changes/save">

                                                    Question

                                                </button>
                                                <button class="dropdown-item bulk-change-item"
                                                    data-key="created_at"
                                                    data-class-item="Botble\Faq\Tables\FaqTable"
                                                    data-save-url="admin/tables/bulk-changes/save">

                                                    Created At

                                                </button>
                                            </div>
                                        </div>

                                        <a class="dropdown-item"
                                            href="admin/tables/bulk-actions"
                                            data-trigger-bulk-action="data-trigger-bulk-action"
                                            data-method="POST"
                                            data-table-target="Botble\Faq\Tables\FaqTable"
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
                                <a href="/admin/faq/create" class="mb-1 btn action-item btn-primary " tabindex="0"
                                    aria-controls="botble-faq-tables-faq-table" type="button"
                                    aria-haspopup="dialog" aria-expanded="false">
                                    <span data-action="create"
                                        data-href="admin/faqs/create">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 5l0 14"></path>
                                            <path d="M5 12l14 0"></path>
                                        </svg>
                                        Create
                                    </span>

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-table">
                        <div class="table-responsive table-has-actions table-has-filter">
                            <div id="botble-faq-tables-faq-table_wrapper"
                                class="dataTables_wrapper dt-bootstrap5 no-footer">
 
                                <div id="botble-faq-tables-faq-table_processing"
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
                                    id="botble-faq-tables-faq-table"
                                    aria-describedby="botble-faq-tables-faq-table_info">
                                    <thead>
                                        <tr>
                                            <th class="w-1 text-start no-column-visibility sorting_disabled"
                                                rowspan="1" colspan="1" aria-label=""><input
                                                    class="form-check-input m-0 align-middle table-check-all"
                                                    data-set=".dataTable .checkboxes" name=""
                                                    type="checkbox"></th>
                                            <th title="ID" width="20"
                                                class="text-center no-column-visibility column-key-0 sorting sorting_desc"
                                                tabindex="0" aria-controls="botble-faq-tables-faq-table"
                                                rowspan="1" colspan="1" style="width: 20px;"
                                                aria-sort="descending" aria-label="IDorderby asc">ID</th>
                                            <th title="Question" class="text-start column-key-1 sorting"
                                                tabindex="0" aria-controls="botble-faq-tables-faq-table"
                                                rowspan="1" colspan="1" aria-label="Questionorderby asc">
                                                Question</th>
                                            <th title="Category" class="text-start column-key-2 sorting"
                                                tabindex="0" aria-controls="botble-faq-tables-faq-table"
                                                rowspan="1" colspan="1" aria-label="Categoryorderby asc">
                                                Category</th>
                                            <th title="Created At" width="100" class="column-key-3 sorting"
                                                tabindex="0" aria-controls="botble-faq-tables-faq-table"
                                                rowspan="1" colspan="1" style="width: 100px;"
                                                aria-label="Created Atorderby asc">Created At</th>
                                            <th title="Status" width="100"
                                                class="text-center column-key-4 sorting" tabindex="0"
                                                aria-controls="botble-faq-tables-faq-table" rowspan="1"
                                                colspan="1" style="width: 100px;"
                                                aria-label="Statusorderby asc">Status</th>
                                            <th title="Languages"
                                                class="text-nowrap language-header text-center sorting_disabled"
                                                rowspan="1" colspan="1" aria-label=""><img
                                                    src="vendor/core/core/base/img/flags/us.svg"
                                                    title="English" class="flag" style="height: 16px"
                                                    loading="lazy" alt="English flag"><img
                                                    src="vendor/core/core/base/img/flags/vn.svg"
                                                    title="Tiếng Việt" class="flag" style="height: 16px"
                                                    loading="lazy" alt="Tiếng Việt flag"><img
                                                    src="vendor/core/core/base/img/flags/sa.svg"
                                                    title="Arabic" class="flag" style="height: 16px"
                                                    loading="lazy" alt="Arabic flag"></th>
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
                                                    type="checkbox" name="id[]" value="24"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                24</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/24"
                                                    title="Where can I get some?">Where can I get some?</a>
                                            </td>
                                            <td class="  text-start  column-key-2">Support</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/24">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/24?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/24?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/24">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/24"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="23"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                23</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/23"
                                                    title="Why do we use it?">Why do we use it?</a></td>
                                            <td class="  text-start  column-key-2">Support</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/23">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/23?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/23?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/23">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/23"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="22"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                22</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/22"
                                                    title="Where To Place A FAQ Page">Where To Place A FAQ
                                                    Page</a></td>
                                            <td class="  text-start  column-key-2">Support</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/22">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/22?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/22?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/22">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/22"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="21"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                21</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/21"
                                                    title="What is your shipping policy?">What is your
                                                    shipping policy?</a></td>
                                            <td class="  text-start  column-key-2">Support</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/21">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/21?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/21?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/21">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/21"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="20"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                20</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/20"
                                                    title="How JobBox Work?">How JobBox Work?</a></td>
                                            <td class="  text-start  column-key-2">Support</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/20">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/20?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/20?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/20">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/20"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="19"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                19</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/19"
                                                    title="Where does it come from?">Where does it come
                                                    from?</a></td>
                                            <td class="  text-start  column-key-2">Support</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/19">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/19?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/19?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/19">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/19"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="18"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                18</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/18"
                                                    title="Where can I get some?">Where can I get some?</a>
                                            </td>
                                            <td class="  text-start  column-key-2">Payment</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/18">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/18?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/18?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/18">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/18"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="17"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                17</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/17"
                                                    title="Why do we use it?">Why do we use it?</a></td>
                                            <td class="  text-start  column-key-2">Payment</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/17">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/17?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/17?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/17">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/17"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="16"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                16</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/16"
                                                    title="Where To Place A FAQ Page">Where To Place A FAQ
                                                    Page</a></td>
                                            <td class="  text-start  column-key-2">Payment</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/16">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/16?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/16?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/16">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/16"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                                    type="checkbox" name="id[]" value="15"></td>
                                            <td
                                                class="text-center no-column-visibility column-key-0 sorting_1">
                                                15</td>
                                            <td class="  text-start  column-key-1"><a
                                                    href="admin/faqs/edit/15"
                                                    title="What is your shipping policy?">What is your
                                                    shipping policy?</a></td>
                                            <td class="  text-start  column-key-2">Payment</td>
                                            <td class="   column-key-3">2024-02-19</td>
                                            <td class="  text-center  column-key-4"><span
                                                    class="badge bg-success text-success-fg">Published</span>
                                            </td>
                                            <td class="  text-nowrap language-header text-center">
                                                <div class="text-center language-column">
                                                    <a
                                                        href="admin/faqs/edit/15">
                                                        <svg class="icon text-success"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/15?ref_lang=vi"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                    <a data-bs-toggle="tooltip"
                                                        href="admin/faqs/edit/15?ref_lang=ar"
                                                        aria-label="Edit related language for this record"
                                                        data-bs-original-title="Edit related language for this record">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                            </path>
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                            </path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg> </a>
                                                </div>
                                            </td>
                                            <td class="  text-center no-column-visibility text-nowrap">
                                                <div class="table-actions">
                                                    <a class="btn btn-sm btn-icon btn-primary"
                                                        href="admin/faqs/edit/15">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Edit"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
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
                                                        href="admin/faqs/15"
                                                        data-dt-single-action="" data-method="DELETE"
                                                        data-confirmation-modal="true"
                                                        data-confirmation-modal-title="Confirm delete"
                                                        data-confirmation-modal-message="Do you really want to delete this record?"
                                                        data-confirmation-modal-button="Delete"
                                                        data-confirmation-modal-cancel-button="Cancel">
                                                        <svg class="icon" data-bs-toggle="tooltip"
                                                            data-bs-title="Delete"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path
                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                            </path>
                                                            <path
                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
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
                                            id="botble-faq-tables-faq-table_length"><label><span
                                                    class="dt-length-style"><select
                                                        name="botble-faq-tables-faq-table_length"
                                                        aria-controls="botble-faq-tables-faq-table"
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
                                                id="botble-faq-tables-faq-table_info" role="status"
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

                                                        24
                                                    </span>
                                                    <span class="hidden-xs">records</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="botble-faq-tables-faq-table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="botble-faq-tables-faq-table_previous"><a
                                                        aria-controls="botble-faq-tables-faq-table"
                                                        aria-disabled="true"
                                                        aria-label="&amp;laquo; Previous" role="link"
                                                        data-dt-idx="previous" tabindex="-1"
                                                        class="page-link">« Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="botble-faq-tables-faq-table"
                                                        role="link" aria-current="page" data-dt-idx="0"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="botble-faq-tables-faq-table"
                                                        role="link" data-dt-idx="1" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="botble-faq-tables-faq-table"
                                                        role="link" data-dt-idx="2" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="botble-faq-tables-faq-table_next"><a href="#"
                                                        aria-controls="botble-faq-tables-faq-table"
                                                        aria-label="Next &amp;raquo;" role="link"
                                                        data-dt-idx="next" tabindex="0"
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
                    <div class="order-1 order-lg-2">
                        Page loaded in 0.08 seconds
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
</div>
@endsection
