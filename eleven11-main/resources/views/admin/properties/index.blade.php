@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <x-bread-crum :items="[
                            ['url' => route('admin.dashboard'), 'title' => 'Dashboard'],
                            ['url' => '', 'title' => 'Real Estate'],
                            ['url' => '', 'title' => 'Properties'],
                        ]" />
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
                    <div class="card has-actions has-filter">
                        <div class="card-header">
                            <div class="w-100 gap-2 d-block d-md-flex align-items-start justify-content-between flex-wrap">
                                <!-- Search For Properties -->
                                <div class="d-block d-md-flex gap-2">
                                    <div class="table-search-input mb-1">
                                        <label><input type="search" class="form-control input-sm" placeholder="Search..."
                                                style="min-width: 120px"></label>
                                    </div>
                                </div>

                                <div class="d-block d-md-flex gap-2 mb-1">
                                    <x-button>
                                        <a href="{{ route('admin.properties.create') }}">
                                            <svg class="icon text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 5l0 14" />
                                                <path d="M5 12l14 0" />
                                            </svg><span class="text-white">Create</span>
                                        </a>
                                    </x-button>
                                </div>
                            </div>
                        </div>
                        <div class="card-table">
                            <div class="table-responsive table-has-actions table-has-filter">
                                <table class="table card-table table-vcenter table-striped table-hover"
                                    id="botble-real-estate-tables-property-table">
                                    <thead>
                                        <tr>
                                            <th title="Checkbox"><input
                                                    class="form-check-input m-0 align-middle table-check-all"
                                                    data-set=".dataTable .checkboxes" name="" type="checkbox">
                                            </th>
                                            <th title="ID" width="20"
                                                class="text-center no-column-visibility  column-key-0">ID</th>
                                            <th title="Image" width="50" class=" column-key-1">Image</th>
                                            <th title="Name" class="text-start  column-key-2">Name</th>
                                            <th title="Views" class=" column-key-3">Views</th>
                                            <th title="Unique ID" class=" column-key-4">Unique ID</th>
                                            <th title="Created At" width="100" class=" column-key-5">Created At
                                            </th>
                                            <th title="Status" width="100" class="text-center  column-key-6">
                                                Status</th>
                                            <th title="Moderation status" width="150" class="text-center  column-key-7">
                                                Moderation status</th>
                                            <th title="Operations">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
                window.LaravelDataTables = window.LaravelDataTables || {};
                window.LaravelDataTables["botble-real-estate-tables-property-table"] = $(
                    "#botble-real-estate-tables-property-table").DataTable({
                    "serverSide": true,
                    "processing": true,
                    "ajax": {
                        "url": "https:\/\/hously.archielite.com\/admin\/real-estate\/properties?",
                        "method": "POST"
                    },
                    "columns": [{
                        "data": "checkbox",
                        "name": "checkbox",
                        "title": "<input class=\"form-check-input m-0 align-middle table-check-all\" data-set=\".dataTable .checkboxes\" name=\"\" type=\"checkbox\">",
                        "orderable": false,
                        "searchable": false,
                        "defaultContent": "",
                        "className": "w-1 text-start no-column-visibility",
                        "titleAttr": "Checkbox"
                    }, {
                        "data": "id",
                        "name": "id",
                        "title": "ID",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-center no-column-visibility  column-key-0",
                        "width": 20,
                        "class": "text-center no-column-visibility  column-key-0"
                    }, {
                        "data": "image",
                        "name": "image",
                        "title": "Image",
                        "orderable": false,
                        "searchable": false,
                        "width": 50,
                        "class": " column-key-1",
                        "className": " column-key-1"
                    }, {
                        "data": "name",
                        "name": "name",
                        "title": "Name",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-start  column-key-2",
                        "class": "text-start  column-key-2"
                    }, {
                        "data": "views",
                        "name": "views",
                        "title": "Views",
                        "orderable": true,
                        "searchable": true,
                        "class": " column-key-3",
                        "className": " column-key-3"
                    }, {
                        "data": "unique_id",
                        "name": "unique_id",
                        "title": "Unique ID",
                        "orderable": true,
                        "searchable": true,
                        "class": " column-key-4",
                        "className": " column-key-4"
                    }, {
                        "data": "created_at",
                        "name": "created_at",
                        "title": "Created At",
                        "orderable": true,
                        "searchable": true,
                        "type": "date",
                        "width": 100,
                        "class": " column-key-5",
                        "className": " column-key-5"
                    }, {
                        "data": "status",
                        "name": "status",
                        "title": "Status",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-center  column-key-6",
                        "width": 100,
                        "class": "text-center  column-key-6"
                    }, {
                        "data": "moderation_status",
                        "name": "moderation_status",
                        "title": "Moderation status",
                        "orderable": true,
                        "searchable": true,
                        "className": "text-center  column-key-7",
                        "width": 150,
                        "class": "text-center  column-key-7"
                    }, {
                        "data": "language",
                        "name": "language_meta.lang_meta_id",
                        "title": "<img src=\"https:\/\/hously.archielite.com\/vendor\/core\/core\/base\/img\/flags\/us.svg\" title=\"English\" class=\"flag\" style=\"height: 16px\" loading=\"lazy\" alt=\"English flag\"><img src=\"https:\/\/hously.archielite.com\/vendor\/core\/core\/base\/img\/flags\/sa.svg\" title=\"Arabic\" class=\"flag\" style=\"height: 16px\" loading=\"lazy\" alt=\"Arabic flag\">",
                        "orderable": false,
                        "searchable": false,
                        "className": "text-nowrap language-header text-center",
                        "titleAttr": "Languages",
                        "responsivePriority": 99
                    }, {
                        "data": "row_actions",
                        "name": "row_actions",
                        "title": "Operations",
                        "orderable": false,
                        "searchable": false,
                        "className": "text-center no-column-visibility text-nowrap",
                        "responsivePriority": 99
                    }],
                    "dom": "fBrt<'card-footer d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2'<'d-flex justify-content-between align-items-center gap-3'l<'m-0 text-muted'i>><'d-flex justify-content-center'p>>",
                    "buttons": {
                        "stateSave": true,
                        "buttons": [{
                            "className": "action-item btn-primary",
                            "text": "<span data-action=\"create\" data-href=\"https:\/\/hously.archielite.com\/admin\/real-estate\/properties\/create\"><svg class=\"icon\"\n  xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n  width=\"24\"\n  height=\"24\"\n  viewBox=\"0 0 24 24\"\n  fill=\"none\"\n  stroke=\"currentColor\"\n  stroke-width=\"2\"\n  stroke-linecap=\"round\"\n  stroke-linejoin=\"round\"\n  >\n  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"\/>\n  <path d=\"M12 5l0 14\" \/>\n  <path d=\"M5 12l14 0\" \/>\n<\/svg>Create\n<\/span>"
                        }, {
                            "className": "action-item",
                            "text": "<span data-action=\"import\" data-href=\"https:\/\/hously.archielite.com\/admin\/real-estate\/properties\/import\"><svg class=\"icon\"\n  xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n  width=\"24\"\n  height=\"24\"\n  viewBox=\"0 0 24 24\"\n  fill=\"none\"\n  stroke=\"currentColor\"\n  stroke-width=\"2\"\n  stroke-linecap=\"round\"\n  stroke-linejoin=\"round\"\n  >\n  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"\/>\n  <path d=\"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2\" \/>\n  <path d=\"M7 9l5 -5l5 5\" \/>\n  <path d=\"M12 4l0 12\" \/>\n<\/svg>Import Properties<\/span>"
                        }, {
                            "className": "action-item",
                            "text": "<span data-action=\"export\" data-href=\"https:\/\/hously.archielite.com\/admin\/real-estate\/export\/properties\"><svg class=\"icon\"\n  xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n  width=\"24\"\n  height=\"24\"\n  viewBox=\"0 0 24 24\"\n  fill=\"none\"\n  stroke=\"currentColor\"\n  stroke-width=\"2\"\n  stroke-linecap=\"round\"\n  stroke-linejoin=\"round\"\n  >\n  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"\/>\n  <path d=\"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2\" \/>\n  <path d=\"M7 11l5 5l5 -5\" \/>\n  <path d=\"M12 4l0 12\" \/>\n<\/svg>Export Properties<\/span>"
                        }, "reload"]
                    },
                    "initComplete": function() {
                        Botble.initResources();

                        document.dispatchEvent(new CustomEvent("core-table-init-completed", {
                            detail: {
                                table: this
                            }
                        }));
                    },
                    "drawCallback": function() {
                        var tableWrapper = $(this).closest(".dataTables_wrapper");
                        var dtDataCount = this.api().data().count();

                        if (dtDataCount === 0) {
                            tableWrapper.find(".card-footer").prop('style',
                                'display: none !important;');
                        } else {
                            tableWrapper.find(".card-footer").prop('style', null);
                        }

                        tableWrapper.find(".dataTables_paginate").toggle(this.api().page.info()
                            .pages > 1);

                        tableWrapper.find(".dataTables_length").toggle(dtDataCount >= 10);
                        tableWrapper.find(".dataTables_info").toggle(dtDataCount > 0);

                        setTimeout(function() {
                            var searchInputWrapper = $(
                                ".table-wrapper .table-search-input input");
                            if (!searchInputWrapper.val()) {
                                searchInputWrapper.val(tableWrapper.find(
                                    ".dataTables_filter input").val());
                            }

                            if (searchInputWrapper.val()) {
                                searchInputWrapper.addClass(
                                    'border-primary bg-info-subtle')

                                searchInputWrapper.closest('label').find(
                                    '.search-reset-icon').show()
                                searchInputWrapper.closest('label').find('.search-icon')
                                    .hide()
                            } else {
                                searchInputWrapper.removeClass(
                                    'border-primary bg-info-subtle')

                                searchInputWrapper.closest('label').find(
                                    '.search-reset-icon').hide()
                                searchInputWrapper.closest('label').find('.search-icon')
                                    .show()
                            }
                        }, 200);
                        Botble.initResources();

                        document.dispatchEvent(new CustomEvent("core-table-init-completed", {
                            detail: {
                                table: this
                            }
                        }));
                    },
                    "paging": true,
                    "searching": true,
                    "info": true,
                    "searchDelay": 350,
                    "bStateSave": true,
                    "lengthMenu": [
                        [10, 30, 50, 100, 500, -1],
                        [10, 30, 50, 100, 500, "All"]
                    ],
                    "pageLength": 10,
                    "bServerSide": true,
                    "bDeferRender": true,
                    "bProcessing": true,
                    "language": {
                        "aria": {
                            "sortAscending": "orderby asc",
                            "sortDescending": "orderby desc",
                            "paginate": {
                                "next": "Next &raquo;",
                                "previous": "&laquo; Previous"
                            }
                        },
                        "emptyTable": "No data to display",
                        "info": "<span class=\"dt-length-records\">\n    <svg class=\"icon\"\n  xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n  width=\"24\"\n  height=\"24\"\n  viewBox=\"0 0 24 24\"\n  fill=\"none\"\n  stroke=\"currentColor\"\n  stroke-width=\"2\"\n  stroke-linecap=\"round\"\n  stroke-linejoin=\"round\"\n  >\n  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"\/>\n  <path d=\"M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0\" \/>\n  <path d=\"M3.6 9h16.8\" \/>\n  <path d=\"M3.6 15h16.8\" \/>\n  <path d=\"M11.5 3a17 17 0 0 0 0 18\" \/>\n  <path d=\"M12.5 3a17 17 0 0 1 0 18\" \/>\n<\/svg>    <span class=\"d-none d-sm-inline\">Show from<\/span>\n    _START_\n    to _END_ in\n    <span class=\"badge bg-secondary text-secondary-fg\">\n    \n    _TOTAL_\n<\/span>\n    <span class=\"hidden-xs\">records<\/span>\n<\/span>\n",
                        "infoEmpty": "No record",
                        "lengthMenu": "<span class=\"dt-length-style\">_MENU_<\/span>",
                        "search": "",
                        "searchPlaceholder": "Search...",
                        "zeroRecords": "No record",
                        "processing": {},
                        "paginate": {
                            "next": "Next &raquo;",
                            "previous": "&laquo; Previous"
                        },
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    },
                    "order": [
                        [1, "desc"]
                    ],
                    "responsive": true,
                    "autoWidth": false
                });
            });
        });
    </script>
@endsection
