@extends('users.website.layout.app')
@section('content')
<div class="ps-main__wrapper" id="vendor-dashboard">
    <h1>Properties</h1>

    <div id="app">

        <div class="table-wrapper">
            <div class="card mb-3 table-configuration-wrap" style="display: none;">
                <div class="card-body">
                    <button class="btn btn-icon  btn-sm btn-show-table-options rounded-pill" type="button">
                        <svg class="icon icon-sm icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>

                    </button>

                    <div class="wrapper-filter">
                        <p>Filters</p>

                        <input type="hidden" class="filter-data-url" value="admin/tables/filters" />

                        <div class="sample-filter-item-wrap hidden">
                            <div class="row filter-item form-filter">
                                <div class="col-auto w-50 w-sm-auto">
                                    <div class="mb-3 position-relative">
                                        <select class="form-select filter-column-key" name="filter_columns[]" id="filter_columns[]">
                                            <option value="name">Name</option>
                                            <option value="status">Status</option>
                                            <option value="moderation_status">Moderation status</option>
                                            <option value="created_at">Created At</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-auto w-50 w-sm-auto">
                                    <div class="mb-3 position-relative">
                                        <select class="form-select filter-operator filter-column-operator" name="filter_operators[]" id="filter_operators[]">
                                            <option value="like">Contains</option>
                                            <option value="=">Is equal to</option>
                                            <option value="&gt;">Greater than</option>
                                            <option value="&lt;">Less than</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-auto w-100 w-sm-25">
                                    <span class="filter-column-value-wrap">
                                        <input class="form-control filter-column-value" type="text" placeholder="Value" name="filter_values[]">
                                    </span>
                                </div>

                                <div class="col">
                                    <button class="btn btn-icon   btn-remove-filter-item mb-3 text-danger" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

                        <form method="GET" action="account/properties" accept-charset="UTF-8" class="filter-form">
                            <input type="hidden" name="filter_table_id" class="filter-data-table-id" value="botble-real-estate-tables-account-property-table">
                            <input type="hidden" name="class" class="filter-data-class" value="Botble\RealEstate\Tables\AccountPropertyTable">
                            <div class="filter_list inline-block filter-items-wrap">
                                <div class="row filter-item form-filter filter-item-default">
                                    <div class="col-auto w-50 w-sm-auto">
                                        <div class="mb-3 position-relative">
                                            <select class="form-select filter-column-key" name="filter_columns[]" id="filter_columns[]">
                                                <option value="" selected>Select field</option>
                                                <option value="name">Name</option>
                                                <option value="status">Status</option>
                                                <option value="moderation_status">Moderation status</option>
                                                <option value="created_at">Created At</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-auto w-50 w-sm-auto">
                                        <div class="mb-3 position-relative">
                                            <select class="form-select filter-operator filter-column-operator" name="filter_operators[]" id="filter_operators[]">
                                                <option value="like">Contains</option>
                                                <option value="=" selected>Is equal to</option>
                                                <option value="&gt;">Greater than</option>
                                                <option value="&lt;">Less than</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-auto w-100 w-sm-25">
                                        <div class="filter-column-value-wrap mb-3">
                                            <input class="form-control filter-column-value" type="text" placeholder="Value" name="filter_values[]" value="">
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
                                <a class="btn btn-icon" style="display: none;" type="button" href="account/properties" data-bb-toggle="datatable-reset-filter">
                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                    <div class="w-100 gap-2 d-block d-md-flex align-items-start justify-content-between flex-wrap">
                        <div class="d-block d-md-flex gap-2">
                            <div class="dropdown d-inline-block mb-1">
                                <button class="btn   dropdown-toggle" type="button" data-bs-toggle="dropdown">

                                    Bulk Actions

                                </button>

                                <div class="dropdown-menu">
                                    <div class="dropdown-submenu">
                                        <button class="dropdown-item">

                                            Bulk changes

                                            <svg class="icon dropdown-item-icon ms-auto me-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M9 6l6 6l-6 6" />
                                            </svg> </button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item bulk-change-item" data-key="name" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="admin/tables/bulk-changes/save">

                                                Name

                                            </button>
                                            <button class="dropdown-item bulk-change-item" data-key="status" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="admin/tables/bulk-changes/save">

                                                Status

                                            </button>
                                            <button class="dropdown-item bulk-change-item" data-key="moderation_status" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="admin/tables/bulk-changes/save">

                                                Moderation status

                                            </button>
                                            <button class="dropdown-item bulk-change-item" data-key="created_at" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="admin/tables/bulk-changes/save">

                                                Created At

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn   btn-show-table-options" type="button">

                                Filters

                            </button>

                            <div class="table-search-input mb-1">
                                <label><input type="search" class="form-control input-sm" placeholder="Search..." style="min-width: 120px"></label>
                            </div>
                        </div>

                        <div class="d-block d-md-flex gap-2 mb-1">
                            <a href="/users/properties/create" class="mb-1 btn action-item btn-primary" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" type="button" aria-haspopup="dialog" aria-expanded="false">
                                <span data-action="create" data-href="account/properties/create"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>Create
                                </span>
                            </a>

                            <button class="btn item-action" data-bb-toggle="dt-buttons" data-bb-target=".buttons-reload" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" type="button" aria-haspopup="dialog" aria-expanded="false">
                                <span>
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                    </svg> Reload
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-table">
                    <div class="table-responsive table-has-actions table-has-filter">
                        <table class="table card-table table-vcenter table-striped table-hover" id="botble-real-estate-tables-account-property-table">
                            <thead>
                                <tr>
                                    <th title="Checkbox"><input class="form-check-input m-0 align-middle table-check-all" data-set=".dataTable .checkboxes" name="" type="checkbox"></th>
                                    <th title="ID" width="20" class="text-center no-column-visibility  column-key-0">ID</th>
                                    <th title="Image" width="50" class=" column-key-1">Image</th>
                                    <th title="Name" class="text-start  column-key-2">Name</th>
                                    <th title="Views" class=" column-key-3">Views</th>
                                    <th title="Unique ID" class=" column-key-4">Unique ID</th>
                                    <th title="Expire date" width="150" class=" column-key-5">Expire date</th>
                                    <th title="Created At" width="100" class=" column-key-6">Created At</th>
                                    <th title="Status" width="100" class="text-center  column-key-7">Status</th>
                                    <!-- <th title="Moderation status" width="150" class="text-center  column-key-8">
                                            Moderation status</th> -->
                                    <!-- <th title="Languages">
                                            <img src="vendor/core/core/base/img/flags/us.svg"
                                                title="English" class="flag" style="height: 16px" loading="lazy"
                                                alt="English flag"><img src="vendor/core/core/base/img/flags/vn.svg"
                                                title="Tiếng Việt" class="flag" style="height: 16px" loading="lazy"
                                                alt="Tiếng Việt flag"><img
                                                src="vendor/core/core/base/img/flags/sa.svg" title="Arabic"
                                                class="flag" style="height: 16px" loading="lazy" alt="Arabic flag">
                                        </th> -->
                                    <th title="Operations">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td class="w-1 text-start no-column-visibility dtr-control" style=""><input class="form-check-input m-0 align-middle checkboxes" type="checkbox" name="id[]" value="19"></td>
                                    <td class="text-center no-column-visibility column-key-0 sorting_1">19</td>
                                    <td class="   column-key-1"><img src="/storage/properties/9-150x150.jpg" width="50" alt="Image"></td>
                                    <td class="  text-start  column-key-2"><a href="/account/properties/edit/19" title="Apartment Muiderstraatweg in Diemen">Apartment
                                            Muiderstraatweg in Diemen</a></td>
                                    <td class="   column-key-3">76502</td>
                                    <td class="   column-key-4">—</td>
                                    <td class="   column-key-5"><span class="text-danger">1970-01-01</span></td>
                                    <td class="   column-key-6">2024-02-19</td>
                                    <td class="text-center column-key-7 dtr-hidden" style="display: none;"><span class="badge bg-success text-success-fg">

                                            Selling
                                        </span></td>
                                    <td class="  text-center  column-key-8" style="display: none;"><span class="badge bg-success text-success-fg">

                                            Approved
                                        </span></td>
                                    <td class="  text-nowrap language-header text-center">
                                        <div class="text-center language-column">
                                            <a href="/account/properties/edit/19">
                                                <svg class="icon text-success" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg> </a>
                                            <a data-bs-toggle="tooltip" href="/account/properties/edit/19?ref_lang=vi" aria-label="Edit related language for this record" data-bs-original-title="Edit related language for this record">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg> </a>
                                            <a data-bs-toggle="tooltip" href="/account/properties/edit/19?ref_lang=ar" aria-label="Edit related language for this record" data-bs-original-title="Edit related language for this record">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg> </a>
                                        </div>
                                    </td>
                                    <td class="  text-center no-column-visibility text-nowrap">
                                        <div class="table-actions">
                                            <a class="btn btn-sm btn-icon btn-info" href="/account/properties/renew/19" data-bb-toggle="property-renew-modal">
                                                <svg class="icon" data-bs-toggle="tooltip" data-bs-title="Renew" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                                </svg>
                                                <span class="sr-only">Renew</span>
                                            </a>

                                            <a class="btn btn-sm btn-icon btn-primary" href="/account/properties/edit/19">
                                                <svg class="icon" data-bs-toggle="tooltip" data-bs-title="Edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg>
                                                <span class="sr-only">Edit</span>
                                            </a>

                                            <a class="btn btn-sm btn-icon btn-danger" href="/account/properties/19" data-dt-single-action="" data-method="DELETE" data-confirmation-modal="true" data-confirmation-modal-title="Confirm delete" data-confirmation-modal-message="Do you really want to delete this record?" data-confirmation-modal-button="Delete" data-confirmation-modal-cancel-button="Cancel">
                                                <svg class="icon" data-bs-toggle="tooltip" data-bs-title="Delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7l16 0"></path>
                                                    <path d="M10 11l0 6"></path>
                                                    <path d="M14 11l0 6"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                    </path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg>
                                                <span class="sr-only">Delete</span>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection