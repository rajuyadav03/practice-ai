<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Eleven11 </title>
    <meta name="csrf-token" content="iHR3DtO4TmovCSJq1sOJF4heeR8Bgs3qjUl5yNwn">
    <link href="/favicon.png" rel="icon shortcut">
    <meta property="og:image" content="favicon.png">
    <meta name="description" content="Copyright 2024 © Eleven11 . Version 1.9.5">
    <meta property="og:description" content="Copyright 2024 © Eleven11 . Version 1.9.5">
    <style>
        [v-cloak],
        [x-cloak] {
            display: none;
        }
    </style>
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-font: "Inter";
            --primary-color: #206bc4;
            --primary-color-rgb: 32, 107, 196;
            --secondary-color: #6c7a91;
            --secondary-color-rgb: 108, 122, 145;
            --heading-color: inherit;
            --text-color: #182433;
            --text-color-rgb: 24, 36, 51;
            --link-color: #206bc4;
            --link-color-rgb: 32, 107, 196;
            --link-hover-color: #206bc4;
            --link-hover-color-rgb: 32, 107, 196;
        }
    </style>

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/fontawesome.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/select2.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/select2.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/toastr.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/flatpickr.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/spectrum.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/morris.css?v=1.9.5')}}">

    
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/eleven/dataTables.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/eleven/buttons.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/eleven/responsive.bootstrap.min.css')}}">


    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/core.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/language.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/jquery-jvectormap-1.2.2.css?v=1.9.5')}}">

    <script src="{{asset('js/jquery.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/app.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/vue.global.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/vue-app.js?v=1.9.5')}}"></script>
    {{-- <script>
        window.siteUrl = "https://hously.archielite.com";
        window.siteEditorLocale = "en";
        window.siteAuthorizedUrl = "admin/settings/license/verify";
        window.isAuthenticated = true;
    </script> --}}
</head>

<body class="page-sidebar-closed-hide-logo page-content-white page-container-bg-solid " style="">
    <div id="app">
        <div class="page">
            @include('admin.layout.header')
            @include('admin.layout.sidebar')
            @yield('content')

        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('js/core-ui.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/excanvas.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/ie8.fix.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/modernizr.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/select2.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/flatpickr.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery.cookie.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/core.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/toastr.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery.stickytableheaders.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/spectrum.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/fslightbox.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/sortable.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/raphael-min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/morris.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/language-global.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/dashboard.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/eleven/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/eleven/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/eleven/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/eleven/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/eleven/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/eleven/table.js')}}"></script>
    <script src="{{asset('js/eleven/table.js')}}"></script>
    <script src="{{asset('js/check-for-updates.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery-jvectormap-1.2.2.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/jquery-jvectormap-world-mill-en.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/analytics.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/blog.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/audit-log.js?v=1.9.5')}}"></script>



    <div id="stack-footer">
        <div class="modal fade modal-blur" id="global-search-modal" data-bb-toggle="gs-modal" tabindex="-1" role="dialog" aria-hidden="true" data-select2-dropdown-parent="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="POST" action="admin/search" accept-charset="UTF-8" data-bb-toggle="gs-form"><input name="_token" type="hidden" value="iHR3DtO4TmovCSJq1sOJF4heeR8Bgs3qjUl5yNwn">
                            <div class="mb-3 position-relative input-icon input-icon">
                                <label class="form-label sr-only" for="keyword">
                                    Search
                                </label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg> </span>
                                    <input class="form-control" type="text" name="keyword" id="keyword" placeholder="Search" tabindex="0" data-bb-toggle="gs-input" />
                                </div>
                            </div>
                        </form>
                        <div data-bb-toggle="gs-result">
                            <div class="text-center text-muted">
                                No result found
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span class="text-muted">
                            <kbd>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" />
                                </svg> </kbd>
                            to select
                        </span>
                        <span class="text-muted">
                            <kbd>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M16 9l-4 -4" />
                                    <path d="M8 9l4 -4" />
                                </svg> </kbd>
                            <kbd>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M16 15l-4 4" />
                                    <path d="M8 15l4 4" />
                                </svg> </kbd>
                            to navigate
                        </span>
                        <span class="text-muted">
                            <kbd>esc</kbd>
                            to close
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/x-custom-template" id="gs-not-result-template">
            <div class="text-center text-muted">
                No result found
            </div>
        </script>
        <script src="{{asset('js/global-search.js')}}"></script>
        <div class="modal modal-blur fade media-modal rv-media-modal" id="rv_media_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-full" role="document">
                <div class="modal-content bb-loading">
                    <div class="modal-header">
                        <h5 class="modal-title">Media gallery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="p-0 modal-body media-modal-body media-modal-loading" id="rv_media_body">
                        <div class="loading-spinner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-blur" id="image-picker-add-from-url" tabindex="-1" role="dialog" aria-hidden="true" data-select2-dropdown-parent="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-has-form " role="document">
                <div class="modal-content">
                    <form action="admin/media/files/download-url" method="POST" id="image-picker-add-from-url-form">
                        <input type="hidden" name="_token" value="iHR3DtO4TmovCSJq1sOJF4heeR8Bgs3qjUl5yNwn" autocomplete="off">
                        <div class="modal-header">
                            <h5 class="modal-title">Add from URL</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="image-box-target">
                            <div class="mb-3 position-relative">
                                <label class="form-label required" for="url">
                                    URL
                                </label>
                                <input class="form-control" type="url" name="url" id="url" required="required" placeholder="https://" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" type="button" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button class="btn btn-primary" type="submit" data-bb-toggle="image-picker-add-from-url" form="image-picker-add-from-url-form">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            "use strict";
            var RV_MEDIA_URL = JSON.parse('{\u0022base_url\u0022:\u0022https:\\\/\\\/hously.archielite.com\u0022,\u0022base\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\u0022,\u0022get_media\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/list\u0022,\u0022create_folder\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/folders\\\/create\u0022,\u0022popup\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/popup\u0022,\u0022download\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/download\u0022,\u0022upload_file\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/files\\\/upload\u0022,\u0022get_breadcrumbs\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/breadcrumbs\u0022,\u0022global_actions\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/global-actions\u0022,\u0022media_upload_from_editor\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/files\\\/upload-from-editor\u0022,\u0022download_url\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/admin\\\/media\\\/files\\\/download-url\u0022}')
            var RV_MEDIA_CONFIG = JSON.parse('{\u0022permissions\u0022:[\u0022folders.create\u0022,\u0022folders.edit\u0022,\u0022folders.trash\u0022,\u0022folders.destroy\u0022,\u0022files.create\u0022,\u0022files.edit\u0022,\u0022files.trash\u0022,\u0022files.destroy\u0022,\u0022files.favorite\u0022,\u0022folders.favorite\u0022],\u0022translations\u0022:{\u0022name\u0022:\u0022Name\u0022,\u0022url\u0022:\u0022URL\u0022,\u0022full_url\u0022:\u0022Full URL\u0022,\u0022alt\u0022:\u0022Alt text\u0022,\u0022size\u0022:\u0022Size\u0022,\u0022mime_type\u0022:\u0022Type\u0022,\u0022created_at\u0022:\u0022Uploaded at\u0022,\u0022updated_at\u0022:\u0022Modified at\u0022,\u0022nothing_selected\u0022:\u0022Nothing is selected\u0022,\u0022visit_link\u0022:\u0022Open link\u0022,\u0022width\u0022:\u0022Width\u0022,\u0022height\u0022:\u0022Height\u0022,\u0022no_item\u0022:{\u0022all_media\u0022:{\u0022title\u0022:\u0022Drop files and folders here\u0022,\u0022message\u0022:\u0022Or use the upload button above\u0022},\u0022trash\u0022:{\u0022title\u0022:\u0022There is nothing in your trash currently\u0022,\u0022message\u0022:\u0022Delete files to move them to trash automatically. Delete files from trash to remove them permanently\u0022},\u0022favorites\u0022:{\u0022title\u0022:\u0022You have not added anything to your favorites yet\u0022,\u0022message\u0022:\u0022Add files to favorites to easily find them later\u0022},\u0022recent\u0022:{\u0022title\u0022:\u0022You did not opened anything yet\u0022,\u0022message\u0022:\u0022All recent files that you opened will be appeared here\u0022},\u0022default\u0022:{\u0022title\u0022:\u0022No items\u0022,\u0022message\u0022:\u0022This directory has no item\u0022}},\u0022clipboard\u0022:{\u0022success\u0022:\u0022These file links have been copied to clipboard\u0022},\u0022message\u0022:{\u0022error_header\u0022:\u0022Error\u0022,\u0022success_header\u0022:\u0022Success\u0022},\u0022download\u0022:{\u0022error\u0022:\u0022No files selected or cannot download these files\u0022},\u0022actions_list\u0022:{\u0022basic\u0022:{\u0022preview\u0022:\u0022Preview\u0022,\u0022crop\u0022:\u0022Crop\u0022},\u0022file\u0022:{\u0022copy_link\u0022:\u0022Copy link\u0022,\u0022rename\u0022:\u0022Rename\u0022,\u0022make_copy\u0022:\u0022Make a copy\u0022,\u0022alt_text\u0022:\u0022ALT text\u0022},\u0022user\u0022:{\u0022favorite\u0022:\u0022Add to favorite\u0022,\u0022remove_favorite\u0022:\u0022Remove favorite\u0022},\u0022other\u0022:{\u0022download\u0022:\u0022Download\u0022,\u0022trash\u0022:\u0022Move to trash\u0022,\u0022delete\u0022:\u0022Delete permanently\u0022,\u0022restore\u0022:\u0022Restore\u0022,\u0022properties\u0022:\u0022Properties\u0022}},\u0022change_image\u0022:\u0022Change image\u0022,\u0022delete_image\u0022:\u0022Delete image\u0022,\u0022choose_image\u0022:\u0022Choose image\u0022,\u0022preview_image\u0022:\u0022Preview image\u0022},\u0022pagination\u0022:{\u0022paged\u0022:null,\u0022posts_per_page\u0022:null,\u0022in_process_get_media\u0022:false,\u0022has_more\u0022:true},\u0022chunk\u0022:{\u0022enabled\u0022:false,\u0022chunk_size\u0022:1048576,\u0022max_file_size\u0022:1048576,\u0022storage\u0022:{\u0022chunks\u0022:\u0022chunks\u0022,\u0022disk\u0022:\u0022local\u0022},\u0022clear\u0022:{\u0022timestamp\u0022:\u0022-3 HOURS\u0022,\u0022schedule\u0022:{\u0022enabled\u0022:true,\u0022cron\u0022:\u002225 * * * *\u0022}},\u0022chunk\u0022:{\u0022name\u0022:{\u0022use\u0022:{\u0022session\u0022:true,\u0022browser\u0022:false}}}},\u0022random_hash\u0022:\u00228f8f1184abcc2993d877c09c891b9780\u0022,\u0022default_image\u0022:\u0022https:\\\/\\\/hously.archielite.com\\\/vendor\\\/core\\\/core\\\/base\\\/images\\\/placeholder.png\u0022}')

            RV_MEDIA_CONFIG.translations.actions_list.other.properties = 'Properties';
        </script>
        <script src="{{asset('js/integrate.js?v=1712126223')}}"></script>
        <div class="modal fade modal-blur" id="widgets-management-modal" data-bb-toggle="widgets-management-modal" tabindex="-1" role="dialog" aria-hidden="true" data-select2-dropdown-parent="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-has-form " role="document">
                <div class="modal-content">
                    <form action="admin/widgets/hides" method="POST">
                        <input type="hidden" name="_token" value="iHR3DtO4TmovCSJq1sOJF4heeR8Bgs3qjUl5yNwn" autocomplete="off">
                        <div class="modal-header">
                            <h5 class="modal-title">Manage Widgets</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>


                        <div class="modal-body p-0">
                            <table class="table table-vcenter card-table table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_total_1]" class="w-full py-3 fw-bold d-block">
                                                Active properties
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_total_1]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_total_1]" type="checkbox" value="1" id="widgets[widget_total_1]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_total_2]" class="w-full py-3 fw-bold d-block">
                                                Pending properties
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_total_2]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_total_2]" type="checkbox" value="1" id="widgets[widget_total_2]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_total_3]" class="w-full py-3 fw-bold d-block">
                                                Expired properties
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_total_3]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_total_3]" type="checkbox" value="1" id="widgets[widget_total_3]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_total_4]" class="w-full py-3 fw-bold d-block">
                                                Agents
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_total_4]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_total_4]" type="checkbox" value="1" id="widgets[widget_total_4]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_general]" class="w-full py-3 fw-bold d-block">
                                                Site Analytics
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_general]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_analytics_general]" type="checkbox" value="1" id="widgets[widget_analytics_general]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_page]" class="w-full py-3 fw-bold d-block">
                                                Top Most Visit Pages
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_page]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_analytics_page]" type="checkbox" value="1" id="widgets[widget_analytics_page]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_browser]" class="w-full py-3 fw-bold d-block">
                                                Top Browsers
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_browser]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_analytics_browser]" type="checkbox" value="1" id="widgets[widget_analytics_browser]" data-bb-toggle="widgets-management-item" checked />

                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_referrer]" class="w-full py-3 fw-bold d-block">
                                                Top Referrers
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_referrer]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_analytics_referrer]" type="checkbox" value="1" id="widgets[widget_analytics_referrer]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_posts_recent]" class="w-full py-3 fw-bold d-block">
                                                Recent Posts
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_posts_recent]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_posts_recent]" type="checkbox" value="1" id="widgets[widget_posts_recent]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_audit_logs]" class="w-full py-3 fw-bold d-block">
                                                Activities Logs
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_audit_logs]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_audit_logs]" type="checkbox" value="1" id="widgets[widget_audit_logs]" data-bb-toggle="widgets-management-item" checked />
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn   me-auto" type="button" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button class="btn btn-primary" type="submit">
                                Save &amp; Exit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="notification-sidebar" aria-labelledby="notification-sidebar-label" data-url="admin/notifications" data-count-url="admin/notifications/count-unread">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="notification-content"></div>
    </div>
    <script src="{{asset('js/notification.js')}}"></script>
</body>
</html>