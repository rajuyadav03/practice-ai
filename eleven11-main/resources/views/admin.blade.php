
@extends('layouts.sidebar')

@section('content')
            <div class="page-wrapper">
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <div class="page-pretitle">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active" aria-current="page">
                                                <h1 class="mb-0 d-inline-block fs-6 lh-1">Dashboard</h1>
                                            </li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                            <div class="col-auto ms-auto d-print-none">
                                <div class="btn-list">
                                    <button class="btn btn-outline-primary  manage-widget" type="button"
                                        data-bs-toggle="modal" data-bs-target="#widgets-management-modal">
                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                            <path
                                                d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                            <path
                                                d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                            <path
                                                d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                        </svg>
                                        Manage Widgets

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-body page-content">
                    <div class="container-xl">


                        <div class="row">
                            <div class="col-12">
                                <v-check-for-updates
                                    check-update-url="https://hously.archielite.com/admin/system/check-update"
                                    v-slot="{ hasNewVersion, message }" v-cloak>
                                    <div role="alert" class="alert alert-warning" v-if="hasNewVersion">
                                        <div class="d-flex">
                                            <div>
                                                <svg class="icon alert-icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                    <path d="M12 8v4" />
                                                    <path d="M12 16h.01" />
                                                </svg>
                                            </div>
                                            <div class="w-100">


                                                 message , please go to <a
                                                    href="https://hously.archielite.com/admin/system/updater"
                                                    class="text-warning fw-bold">System Updater</a> to upgrade to the
                                                latest version!

                                            </div>
                                        </div>



                                    </div>
                                </v-check-for-updates>
                            </div>

                            <div class="col-12">
                                <div role="alert" class="alert alert-info">
                                    <div class="d-flex">
                                        <div>
                                            <svg class="icon alert-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                <path d="M12 8v4" />
                                                <path d="M12 16h.01" />
                                            </svg>
                                        </div>
                                        <div class="w-100">


                                            Hi guest, if you see demo site is destroyed, please help me <a
                                                href="https://shreeagt.com/">go here</a>
                                            and restore demo site to the latest revision! Thank you so much!

                                        </div>
                                    </div>



                                </div>

                            </div>

                            <div class="col-12">
                                <div class="row row-cards">
                                    <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                        <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none"
                                            href="https://hously.archielite.com/admin/real-estate/properties?filter_table_id=botble-real-estate-tables-property-table&amp;class=Botble%5CRealEstate%5CTables%5CPropertyTable&amp;filter_columns%5B0%5D=status&amp;filter_operators%5B0%5D=%3D&amp;filter_values%5B0%5D=active"
                                            style="background-color: #8e44ad">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div
                                                    class="details px-4 py-3 d-flex flex-column justify-content-between">
                                                    <div class="desc fw-medium">Active properties</div>
                                                    <div class="number fw-bolder">
                                                        <span data-counter="counterup" data-value="21">0</span>
                                                    </div>
                                                </div>
                                                <div class="visual ps-1 position-absolute end-0">
                                                    <svg class="icon me-n2" style="opacity: .1; --bb-icon-size: 80px;"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                                        <path d="M12 12l0 .01" />
                                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                        <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none"
                                            href="https://hously.archielite.com/admin/real-estate/properties?filter_table_id=botble-real-estate-tables-property-table&amp;class=Botble%5CRealEstate%5CTables%5CPropertyTable&amp;filter_columns%5B0%5D=moderation_status&amp;filter_operators%5B0%5D=%3D&amp;filter_values%5B0%5D=pending"
                                            style="background-color: #32c5d2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div
                                                    class="details px-4 py-3 d-flex flex-column justify-content-between">
                                                    <div class="desc fw-medium">Pending properties</div>
                                                    <div class="number fw-bolder">
                                                        <span data-counter="counterup" data-value="0">0</span>
                                                    </div>
                                                </div>
                                                <div class="visual ps-1 position-absolute end-0">
                                                    <svg class="icon me-n2" style="opacity: .1; --bb-icon-size: 80px;"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                                        <path d="M12 12l0 .01" />
                                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                        <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none"
                                            href="https://hously.archielite.com/admin/real-estate/properties?filter_table_id=botble-real-estate-tables-property-table&amp;class=Botble%5CRealEstate%5CTables%5CPropertyTable&amp;filter_columns%5B0%5D=status&amp;filter_operators%5B0%5D=%3D&amp;filter_values%5B0%5D=expired"
                                            style="background-color: #e7505a">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div
                                                    class="details px-4 py-3 d-flex flex-column justify-content-between">
                                                    <div class="desc fw-medium">Expired properties</div>
                                                    <div class="number fw-bolder">
                                                        <span data-counter="counterup" data-value="0">0</span>
                                                    </div>
                                                </div>
                                                <div class="visual ps-1 position-absolute end-0">
                                                    <svg class="icon me-n2" style="opacity: .1; --bb-icon-size: 80px;"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                                        <path d="M12 12l0 .01" />
                                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                        <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none"
                                            href=""
                                            style="background-color: #3598dc">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div
                                                    class="details px-4 py-3 d-flex flex-column justify-content-between">
                                                    <div class="desc fw-medium">Agents</div>
                                                    <div class="number fw-bolder">
                                                        <span data-counter="counterup" data-value="21">0</span>
                                                    </div>
                                                </div>
                                                <div class="visual ps-1 position-absolute end-0">
                                                    <i class="fas fa-users me-n2 me-n2"
                                                        style="opacity: .1; --bb-icon-size: 80px;"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-3 col-12">

                        </div>

                        <div class="col-12">
                            <div id="list_widgets" class="row row-cards" data-bb-toggle="widgets-list"
                                data-url="https://hously.archielite.com/admin/widgets/order">
                                <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_posts_recent"
                                    data-url="https://hously.archielite.com/admin/blog/posts/widgets/recent-posts">
                                    <div class="card card-sm flex-fill">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                Recent Posts
                                            </h4>

                                            <div class="card-actions btn-actions"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between h-100 widget-content  "
                                            style="min-height: 10rem;"></div>
                                    </div>
                                </div>

                                <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_audit_logs"
                                    data-url="https://hously.archielite.com/admin/audit-logs/widgets/activities">
                                    <div class="card card-sm flex-fill">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                Activities Logs
                                            </h4>

                                            <div class="card-actions btn-actions"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between h-100 widget-content  "
                                            style="min-height: 10rem;"></div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                @include('layouts.footer')
            </div>

        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        var BotbleVariables = BotbleVariables || {};

        BotbleVariables.languages = {
            tables: JSON.parse('{\u0022id\u0022:\u0022ID\u0022,\u0022name\u0022:\u0022Name\u0022,\u0022slug\u0022:\u0022Slug\u0022,\u0022title\u0022:\u0022Title\u0022,\u0022order_by\u0022:\u0022Order By\u0022,\u0022order\u0022:\u0022Order\u0022,\u0022status\u0022:\u0022Status\u0022,\u0022created_at\u0022:\u0022Created At\u0022,\u0022updated_at\u0022:\u0022Updated At\u0022,\u0022description\u0022:\u0022Description\u0022,\u0022operations\u0022:\u0022Operations\u0022,\u0022url\u0022:\u0022URL\u0022,\u0022author\u0022:\u0022Author\u0022,\u0022notes\u0022:\u0022Notes\u0022,\u0022column\u0022:\u0022Column\u0022,\u0022origin\u0022:\u0022Origin\u0022,\u0022after_change\u0022:\u0022After changes\u0022,\u0022views\u0022:\u0022Views\u0022,\u0022browser\u0022:\u0022Browser\u0022,\u0022session\u0022:\u0022Session\u0022,\u0022activated\u0022:\u0022activated\u0022,\u0022deactivated\u0022:\u0022deactivated\u0022,\u0022is_featured\u0022:\u0022Is featured\u0022,\u0022edit\u0022:\u0022Edit\u0022,\u0022delete\u0022:\u0022Delete\u0022,\u0022restore\u0022:\u0022Restore\u0022,\u0022activate\u0022:\u0022Activate\u0022,\u0022deactivate\u0022:\u0022Deactivate\u0022,\u0022excel\u0022:\u0022Excel\u0022,\u0022export\u0022:\u0022Export\u0022,\u0022csv\u0022:\u0022CSV\u0022,\u0022pdf\u0022:\u0022PDF\u0022,\u0022print\u0022:\u0022Print\u0022,\u0022reset\u0022:\u0022Reset\u0022,\u0022reload\u0022:\u0022Reload\u0022,\u0022display\u0022:\u0022Display\u0022,\u0022all\u0022:\u0022All\u0022,\u0022add_new\u0022:\u0022Add New\u0022,\u0022action\u0022:\u0022Actions\u0022,\u0022delete_entry\u0022:\u0022Delete\u0022,\u0022view\u0022:\u0022View Detail\u0022,\u0022save\u0022:\u0022Save\u0022,\u0022show_from\u0022:\u0022Show from\u0022,\u0022to\u0022:\u0022to\u0022,\u0022in\u0022:\u0022in\u0022,\u0022records\u0022:\u0022records\u0022,\u0022no_data\u0022:\u0022No data to display\u0022,\u0022no_record\u0022:\u0022No record\u0022,\u0022confirm_delete\u0022:\u0022Confirm delete\u0022,\u0022confirm_delete_msg\u0022:\u0022Do you really want to delete this record?\u0022,\u0022confirm_delete_many_msg\u0022:\u0022Do you really want to delete selected record(s)?\u0022,\u0022confirm_delete_all_msg\u0022:\u0022Do you really want to delete all record?\u0022,\u0022cancel\u0022:\u0022Cancel\u0022,\u0022template\u0022:\u0022Template\u0022,\u0022email\u0022:\u0022Email\u0022,\u0022phone\u0022:\u0022Phone\u0022,\u0022last_login\u0022:\u0022Last login\u0022,\u0022shortcode\u0022:\u0022Shortcode\u0022,\u0022image\u0022:\u0022Image\u0022,\u0022bulk_changes\u0022:\u0022Bulk changes\u0022,\u0022submit\u0022:\u0022Submit\u0022,\u0022please_select_record\u0022:\u0022Please select at least one record to perform this action!\u0022,\u0022checkbox\u0022:\u0022Checkbox\u0022}'),
            notices_msg: JSON.parse('{\u0022create_success_message\u0022:\u0022Created successfully\u0022,\u0022update_success_message\u0022:\u0022Updated successfully\u0022,\u0022delete_success_message\u0022:\u0022Deleted successfully\u0022,\u0022success_header\u0022:\u0022Success!\u0022,\u0022error_header\u0022:\u0022Error!\u0022,\u0022no_select\u0022:\u0022Please select at least one record to perform this action!\u0022,\u0022processing_request\u0022:\u0022We are processing your request.\u0022,\u0022error\u0022:\u0022Error!\u0022,\u0022success\u0022:\u0022Success!\u0022,\u0022info\u0022:\u0022Info!\u0022,\u0022enum\u0022:{\u0022validate_message\u0022:\u0022The :attribute value you have entered is invalid.\u0022}}'),
            pagination: JSON.parse('{\u0022previous\u0022:\u0022\\u0026laquo; Previous\u0022,\u0022next\u0022:\u0022Next \\u0026raquo;\u0022}'),
        };
        BotbleVariables.authorized =
            "0";
        BotbleVariables.authorize_url = "https://hously.archielite.com/admin/membership/authorize";
    </script>


    <script src="js/core-ui.js?v=1.9.5"></script>
    <script src="js/excanvas.min.js?v=1.9.5"></script>
    <script src="js/ie8.fix.min.js?v=1.9.5"></script>
    <script src="js/modernizr.min.js?v=1.9.5"></script>
    <script
        src="js/select2.min.js?v=1.9.5"></script>
    <script
        src="js/flatpickr.min.js?v=1.9.5"></script>
    <script
        src="js/jquery.cookie.js?v=1.9.5"></script>
    <script src="js/core.js?v=1.9.5"></script>
    <script src="js/toastr.min.js?v=1.9.5"></script>
    <script
        src="js/jquery.mCustomScrollbar.js?v=1.9.5"></script>
    <script
        src="js/jquery.stickytableheaders.js?v=1.9.5"></script>
    <script
        src="js/jquery.waypoints.min.js?v=1.9.5"></script>
    <script src="js/spectrum.js?v=1.9.5"></script>
    <script
        src="js/jquery.fancybox.min.js?v=1.9.5"></script>
    <script src="js/fslightbox.js?v=1.9.5"></script>
    <script
        src="js/sortable.min.js?v=1.9.5"></script>
    <script
        src="js/jquery.counterup.min.js?v=1.9.5"></script>
    <script src="js/raphael-min.js?v=1.9.5"></script>
    <script src="js/morris.min.js?v=1.9.5"></script>
    <script src="js/language-global.js?v=1.9.5"></script>
    <script src="js/dashboard.js?v=1.9.5"></script>
    <script src="js/check-for-updates.js?v=1.9.5"></script>
    <script
        src="js/jquery-jvectormap-1.2.2.min.js?v=1.9.5"></script>
    <script
        src="js/jquery-jvectormap-world-mill-en.js?v=1.9.5"></script>
    <script src="js/analytics.js?v=1.9.5"></script>
    <script src="js/blog.js?v=1.9.5"></script>
    <script src="js/audit-log.js?v=1.9.5"></script>



    <div id="stack-footer">
        <div class="modal fade modal-blur" id="global-search-modal" data-bb-toggle="gs-modal" tabindex="-1"
            role="dialog" aria-hidden="true" data-select2-dropdown-parent="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">



                    <div class="modal-body">
                        <form method="POST" action="https://hously.archielite.com/admin/search" accept-charset="UTF-8"
                            data-bb-toggle="gs-form"><input name="_token" type="hidden"
                                value="iHR3DtO4TmovCSJq1sOJF4heeR8Bgs3qjUl5yNwn">
                            <div class="mb-3 position-relative input-icon input-icon">
                                <label class="form-label sr-only" for="keyword">
                                    Search


                                </label>

                                <div class="input-icon">

                                    <span class="input-icon-addon">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg> </span>

                                    <input class="form-control" type="text" name="keyword" id="keyword"
                                        placeholder="Search" tabindex="0" data-bb-toggle="gs-input" />



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
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" />
                                </svg> </kbd>
                            to select
                        </span>

                        <span class="text-muted">
                            <kbd>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M16 9l-4 -4" />
                                    <path d="M8 9l4 -4" />
                                </svg> </kbd>
                            <kbd>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
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

        <script src="js/global-search.js"></script>
        <div class="modal modal-blur fade media-modal rv-media-modal" id="rv_media_modal" tabindex="-1" role="dialog"
            aria-hidden="true">
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

        <div class="modal fade modal-blur" id="image-picker-add-from-url" tabindex="-1" role="dialog" aria-hidden="true"
            data-select2-dropdown-parent="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-has-form " role="document">
                <div class="modal-content">
                    <form action="https://hously.archielite.com/admin/media/files/download-url" method="POST"
                        id="image-picker-add-from-url-form">
                        <input type="hidden" name="_token" value="iHR3DtO4TmovCSJq1sOJF4heeR8Bgs3qjUl5yNwn"
                            autocomplete="off">
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



                                <input class="form-control" type="url" name="url" id="url" required="required"
                                    placeholder="https://" />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn" type="button" data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button class="btn btn-primary" type="submit" data-bb-toggle="image-picker-add-from-url"
                                form="image-picker-add-from-url-form">

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

        <script src="js/integrate.js?v=1712126223"></script>



        <script type="text/javascript">const Ziggy = { "url": "https:\/\/hously.archielite.com", "port": null, "defaults": {}, "routes": { "api.sanctum-token.index": { "uri": "admin\/sanctum-token", "methods": ["GET", "POST", "HEAD"] }, "api.sanctum-token.create": { "uri": "admin\/sanctum-token\/create", "methods": ["GET", "HEAD"] }, "api.sanctum-token.create.store": { "uri": "admin\/sanctum-token\/create", "methods": ["POST"] }, "api.sanctum-token.destroy": { "uri": "admin\/sanctum-token\/{sanctum_token}", "methods": ["DELETE"], "wheres": { "sanctum_token": "[0-9]+" }, "parameters": ["sanctum_token"] }, "api.settings": { "uri": "admin\/settings\/api", "methods": ["GET", "HEAD"] }, "api.settings.update": { "uri": "admin\/settings\/api", "methods": ["PUT"] }, "get-started.save": { "uri": "admin\/get-started\/save", "methods": ["POST"] }, "installers.welcome": { "uri": "install\/welcome", "methods": ["GET", "HEAD"] }, "installers.welcome.next": { "uri": "install\/welcome\/next", "methods": ["POST"] }, "installers.requirements.index": { "uri": "install\/requirements", "methods": ["GET", "POST", "HEAD"] }, "installers.environments.index": { "uri": "install\/environments", "methods": ["GET", "POST", "HEAD"] }, "installers.environments.createenvironments.store": { "uri": "install\/environments\/create", "methods": ["POST"] }, "installers.themes.index": { "uri": "install\/themes", "methods": ["GET", "HEAD"] }, "installers.themes.store": { "uri": "install\/themes", "methods": ["POST"] }, "installers.accounts.index": { "uri": "install\/accounts", "methods": ["GET", "POST", "HEAD"] }, "installers.accounts.createaccounts.store": { "uri": "install\/accounts\/create", "methods": ["POST"] }, "installers.licenses.index": { "uri": "install\/licenses", "methods": ["GET", "POST", "HEAD"] }, "installers.licenses.createlicenses.store": { "uri": "install\/licenses\/create", "methods": ["POST"] }, "installers.final": { "uri": "install\/final", "methods": ["GET", "HEAD"] }, "installers.licenses.skip": { "uri": "install\/licenses\/skip", "methods": ["POST"] }, "menus.index": { "uri": "admin\/menus", "methods": ["GET", "POST", "HEAD"] }, "menus.create": { "uri": "admin\/menus\/create", "methods": ["GET", "HEAD"] }, "menus.create.store": { "uri": "admin\/menus\/create", "methods": ["POST"] }, "menus.edit": { "uri": "admin\/menus\/edit\/{menu}", "methods": ["GET", "HEAD"], "wheres": { "menu": "[0-9]+" }, "parameters": ["menu"] }, "menus.edit.update": { "uri": "admin\/menus\/edit\/{menu}", "methods": ["POST"], "wheres": { "menu": "[0-9]+" }, "parameters": ["menu"], "bindings": { "menu": "id" } }, "menus.destroy": { "uri": "admin\/menus\/{menu}", "methods": ["DELETE"], "wheres": { "menu": "[0-9]+" }, "parameters": ["menu"], "bindings": { "menu": "id" } }, "menus.get-node": { "uri": "admin\/menus\/ajax\/get-node", "methods": ["GET", "HEAD"] }, "optimize.settings": { "uri": "admin\/settings\/optimize", "methods": ["GET", "HEAD"] }, "optimize.settings.update": { "uri": "admin\/settings\/optimize", "methods": ["PUT"] }, "pages.index": { "uri": "admin\/pages", "methods": ["GET", "POST", "HEAD"] }, "pages.create": { "uri": "admin\/pages\/create", "methods": ["GET", "HEAD"] }, "pages.create.store": { "uri": "admin\/pages\/create", "methods": ["POST"] }, "pages.edit": { "uri": "admin\/pages\/edit\/{page}", "methods": ["GET", "HEAD"], "wheres": { "page": "[0-9]+" }, "parameters": ["page"], "bindings": { "page": "id" } }, "pages.edit.update": { "uri": "admin\/pages\/edit\/{page}", "methods": ["POST"], "wheres": { "page": "[0-9]+" }, "parameters": ["page"], "bindings": { "page": "id" } }, "pages.destroy": { "uri": "admin\/pages\/{page}", "methods": ["DELETE"], "wheres": { "page": "[0-9]+" }, "parameters": ["page"], "bindings": { "page": "id" } }, "settings.index": { "uri": "admin\/settings", "methods": ["GET", "HEAD"] }, "settings.options": { "uri": "admin\/settings\/options", "methods": ["GET", "HEAD"] }, "settings.general": { "uri": "admin\/settings\/general", "methods": ["GET", "HEAD"] }, "settings.general.update": { "uri": "admin\/settings\/general", "methods": ["PUT"] }, "settings.admin-appearance": { "uri": "admin\/settings\/admin-appearance", "methods": ["GET", "HEAD"] }, "settings.admin-appearance.update": { "uri": "admin\/settings\/admin-appearance", "methods": ["PUT"] }, "settings.cache": { "uri": "admin\/settings\/cache", "methods": ["GET", "HEAD"] }, "settings.cache.update": { "uri": "admin\/settings\/cache\/cache", "methods": ["PUT"] }, "settings.datatables": { "uri": "admin\/settings\/datatables", "methods": ["GET", "HEAD"] }, "settings.datatables.update": { "uri": "admin\/settings\/datatables", "methods": ["PUT"] }, "settings.media": { "uri": "admin\/settings\/media", "methods": ["GET", "HEAD"] }, "settings.media.update": { "uri": "admin\/settings\/media", "methods": ["PUT"] }, "settings.media.generate-thumbnails": { "uri": "admin\/settings\/media\/generate-thumbnails", "methods": ["POST"] }, "settings.license.verify": { "uri": "admin\/settings\/license\/verify", "methods": ["GET", "HEAD"] }, "settings.license.activate": { "uri": "admin\/settings\/license\/activate", "methods": ["POST"] }, "settings.license.deactivate": { "uri": "admin\/settings\/license\/deactivate", "methods": ["POST"] }, "settings.license.reset": { "uri": "admin\/settings\/license\/reset", "methods": ["POST"] }, "settings.email": { "uri": "admin\/settings\/email", "methods": ["GET", "HEAD"] }, "settings.email.update": { "uri": "admin\/settings\/email", "methods": ["PUT"] }, "settings.email.test.send": { "uri": "admin\/settings\/email\/test\/send", "methods": ["POST"] }, "settings.email.template": { "uri": "admin\/settings\/email\/templates", "methods": ["GET", "HEAD"] }, "settings.email.template.status.update": { "uri": "admin\/settings\/email\/templates\/{type}\/{module}\/{template}\/status", "methods": ["POST"], "parameters": ["type", "module", "template"] }, "settings.email.template.edit": { "uri": "admin\/settings\/email\/templates\/{type}\/{module}\/{template}\/edit", "methods": ["GET", "HEAD"], "parameters": ["type", "module", "template"] }, "settings.email.template.update": { "uri": "admin\/settings\/email\/templates\/{type}\/{module}\/{template}", "methods": ["PUT"], "parameters": ["type", "module", "template"] }, "settings.email.template.restore": { "uri": "admin\/settings\/email\/templates\/{type}\/{module}\/{template}\/restore", "methods": ["POST"], "parameters": ["type", "module", "template"] }, "settings.email.template.preview": { "uri": "admin\/settings\/email\/templates\/{type}\/{module}\/{template}\/preview", "methods": ["POST", "GET", "HEAD"], "parameters": ["type", "module", "template"] }, "settings.email.template.iframe": { "uri": "admin\/settings\/email\/templates\/{type}\/{module}\/{template}\/iframe", "methods": ["GET", "HEAD"], "parameters": ["type", "module", "template"] }, "settings.email.rules": { "uri": "admin\/settings\/email\/rules", "methods": ["GET", "HEAD"] }, "settings.rules.update": { "uri": "admin\/settings\/email\/rules", "methods": ["PUT"] }, "system.index": { "uri": "admin\/system", "methods": ["GET", "HEAD"] }, "system.info": { "uri": "admin\/system\/info", "methods": ["GET", "POST", "HEAD"] }, "system.info.get-addition-data": { "uri": "admin\/system\/info\/get-addition-data", "methods": ["GET", "HEAD"] }, "system.cache": { "uri": "admin\/system\/cache", "methods": ["GET", "HEAD"] }, "system.cache.clear": { "uri": "admin\/system\/cache\/clear", "methods": ["POST"] }, "system.check-update": { "uri": "admin\/system\/check-update", "methods": ["GET", "HEAD"] }, "system.updater": { "uri": "admin\/system\/updater", "methods": ["GET", "HEAD"] }, "system.updater.post": { "uri": "admin\/system\/updater", "methods": ["POST"] }, "system.cleanup": { "uri": "admin\/system\/cleanup", "methods": ["GET", "HEAD"] }, "system.cleanup.process": { "uri": "admin\/system\/cleanup", "methods": ["POST"] }, "system.debug-mode.turn-off": { "uri": "admin\/system\/debug-mode\/turn-off", "methods": ["POST"] }, "system.cronjob": { "uri": "admin\/system\/cronjob", "methods": ["GET", "HEAD"] }, "membership.authorize": { "uri": "admin\/membership\/authorize", "methods": ["POST"] }, "menu-items-count": { "uri": "admin\/menu-items-count", "methods": ["GET", "HEAD"] }, "unlicensed": { "uri": "admin\/unlicensed", "methods": ["GET", "HEAD"] }, "unlicensed.skip": { "uri": "admin\/unlicensed", "methods": ["POST"] }, "notifications.index": { "uri": "admin\/notifications", "methods": ["GET", "HEAD"] }, "notifications.destroy": { "uri": "admin\/notifications\/{id}", "methods": ["DELETE"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "notifications.read-notification": { "uri": "admin\/notifications\/read-notification\/{id}", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "notifications.read-all-notification": { "uri": "admin\/notifications\/read-all-notification", "methods": ["PUT"] }, "notifications.destroy-all-notification": { "uri": "admin\/notifications\/destroy-all-notification", "methods": ["DELETE"] }, "notifications.count-unread": { "uri": "admin\/notifications\/count-unread", "methods": ["GET", "HEAD"] }, "toggle-theme-mode": { "uri": "admin\/toggle-theme-mode", "methods": ["GET", "HEAD"] }, "core.global-search": { "uri": "admin\/search", "methods": ["GET", "HEAD"] }, "core-icons": { "uri": "admin\/core-icons", "methods": ["GET", "HEAD"] }, "table.bulk-change.data": { "uri": "admin\/tables\/bulk-changes\/data", "methods": ["GET", "HEAD"] }, "table.bulk-change.save": { "uri": "admin\/tables\/bulk-changes\/save", "methods": ["POST"] }, "table.bulk-action.dispatch": { "uri": "admin\/tables\/bulk-actions", "methods": ["POST"] }, "table.filter.input": { "uri": "admin\/tables\/filters", "methods": ["GET", "HEAD"] }, "access.login": { "uri": "admin\/login", "methods": ["GET", "HEAD"] }, "access.login.post": { "uri": "admin\/login", "methods": ["POST"] }, "access.password.request": { "uri": "admin\/password\/reset", "methods": ["GET", "HEAD"] }, "access.password.email": { "uri": "admin\/password\/email", "methods": ["POST"] }, "access.password.reset": { "uri": "admin\/password\/reset\/{token}", "methods": ["GET", "HEAD"], "parameters": ["token"] }, "access.password.reset.post": { "uri": "admin\/password\/reset", "methods": ["POST"] }, "access.logout": { "uri": "admin\/logout", "methods": ["GET", "HEAD"] }, "users.index": { "uri": "admin\/system\/users", "methods": ["GET", "POST", "HEAD"] }, "users.create": { "uri": "admin\/system\/users\/create", "methods": ["GET", "HEAD"] }, "users.create.store": { "uri": "admin\/system\/users\/create", "methods": ["POST"] }, "users.destroy": { "uri": "admin\/system\/users\/{user}", "methods": ["DELETE"], "wheres": { "user": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.profile.image": { "uri": "admin\/system\/users\/modify-profile-image\/{user}", "methods": ["POST"], "wheres": { "id": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.profile.image.destroy": { "uri": "admin\/system\/users\/delete-profile-image\/{user}", "methods": ["POST"], "wheres": { "id": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.change-password": { "uri": "admin\/system\/users\/password\/{user}", "methods": ["PUT"], "wheres": { "user": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.profile.view": { "uri": "admin\/system\/users\/profile\/{user}", "methods": ["GET", "HEAD"], "wheres": { "user": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.update-profile": { "uri": "admin\/system\/users\/profile\/{user}", "methods": ["PUT"], "wheres": { "user": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.update-preferences": { "uri": "admin\/system\/users\/profile\/{user}\/preferences", "methods": ["PUT"], "wheres": { "user": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.make-super": { "uri": "admin\/system\/users\/make-super\/{user}", "methods": ["GET", "HEAD"], "wheres": { "user": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "users.remove-super": { "uri": "admin\/system\/users\/remove-super\/{user}", "methods": ["GET", "HEAD"], "wheres": { "user": "[0-9]+" }, "parameters": ["user"], "bindings": { "user": "id" } }, "roles.index": { "uri": "admin\/system\/roles", "methods": ["GET", "POST", "HEAD"] }, "roles.create": { "uri": "admin\/system\/roles\/create", "methods": ["GET", "HEAD"] }, "roles.create.store": { "uri": "admin\/system\/roles\/create", "methods": ["POST"] }, "roles.edit": { "uri": "admin\/system\/roles\/edit\/{role}", "methods": ["GET", "HEAD"], "wheres": { "role": "[0-9]+" }, "parameters": ["role"], "bindings": { "role": "id" } }, "roles.edit.update": { "uri": "admin\/system\/roles\/edit\/{role}", "methods": ["POST"], "wheres": { "role": "[0-9]+" }, "parameters": ["role"], "bindings": { "role": "id" } }, "roles.destroy": { "uri": "admin\/system\/roles\/{role}", "methods": ["DELETE"], "wheres": { "role": "[0-9]+" }, "parameters": ["role"], "bindings": { "role": "id" } }, "roles.duplicate": { "uri": "admin\/system\/roles\/duplicate\/{role}", "methods": ["GET", "HEAD"], "wheres": { "role": "[0-9]+" }, "parameters": ["role"], "bindings": { "role": "id" } }, "roles.list.json": { "uri": "admin\/system\/roles\/json", "methods": ["GET", "HEAD"] }, "roles.assign": { "uri": "admin\/system\/roles\/assign", "methods": ["POST"] }, "dashboard.index": { "uri": "admin", "methods": ["GET", "HEAD"] }, "dashboard.hide_widget": { "uri": "admin\/widgets\/hide", "methods": ["GET", "HEAD"] }, "dashboard.hide_widgets": { "uri": "admin\/widgets\/hides", "methods": ["POST"] }, "dashboard.update_widget_order": { "uri": "admin\/widgets\/order", "methods": ["POST"] }, "dashboard.edit_widget_setting_item": { "uri": "admin\/widgets\/setting-item", "methods": ["POST"] }, "media.index": { "uri": "admin\/media", "methods": ["GET", "HEAD"] }, "media.popup": { "uri": "admin\/media\/popup", "methods": ["GET", "HEAD"] }, "media.list": { "uri": "admin\/media\/list", "methods": ["GET", "HEAD"] }, "media.breadcrumbs": { "uri": "admin\/media\/breadcrumbs", "methods": ["GET", "HEAD"] }, "media.global_actions": { "uri": "admin\/media\/global-actions", "methods": ["POST"] }, "media.download": { "uri": "admin\/media\/download", "methods": ["POST"] }, "media.files.upload": { "uri": "admin\/media\/files\/upload", "methods": ["POST"] }, "media.files.upload.from.editor": { "uri": "admin\/media\/files\/upload-from-editor", "methods": ["POST"] }, "media.download_url": { "uri": "admin\/media\/files\/download-url", "methods": ["POST"] }, "media.folders.create": { "uri": "admin\/media\/folders\/create", "methods": ["POST"] }, "plugins.index": { "uri": "admin\/plugins\/installed", "methods": ["GET", "HEAD"] }, "plugins.change.status": { "uri": "admin\/plugins\/status", "methods": ["PUT"] }, "plugins.remove": { "uri": "admin\/plugins\/{plugin}", "methods": ["DELETE"], "parameters": ["plugin"] }, "plugins.check-requirement": { "uri": "admin\/plugins\/check-requirement", "methods": ["POST"] }, "plugins.new": { "uri": "admin\/plugins\/new", "methods": ["GET", "HEAD"] }, "plugins.marketplace.ajax.list": { "uri": "admin\/plugins\/marketplace\/ajax\/plugins", "methods": ["GET", "HEAD"] }, "plugins.marketplace.ajax.detail": { "uri": "admin\/plugins\/marketplace\/ajax\/{id}", "methods": ["GET", "HEAD"], "parameters": ["id"] }, "plugins.marketplace.ajax.iframe": { "uri": "admin\/plugins\/marketplace\/ajax\/{id}\/iframe", "methods": ["GET", "HEAD"], "parameters": ["id"] }, "plugins.marketplace.ajax.install": { "uri": "admin\/plugins\/marketplace\/ajax\/{id}\/install", "methods": ["POST"], "parameters": ["id"] }, "plugins.marketplace.ajax.update": { "uri": "admin\/plugins\/marketplace\/ajax\/{id}\/update\/{name?}", "methods": ["POST"], "parameters": ["id", "name"] }, "plugins.marketplace.ajax.check-update": { "uri": "admin\/plugins\/marketplace\/ajax\/check-update", "methods": ["POST"] }, "short-codes.ajax-get-admin-config": { "uri": "admin\/short-codes\/ajax-get-admin-config\/{key}", "methods": ["POST"], "parameters": ["key"] }, "slug.settings": { "uri": "admin\/settings\/permalink", "methods": ["GET", "HEAD"] }, "slug.settings.update": { "uri": "admin\/settings\/permalink", "methods": ["PUT"] }, "slug.create": { "uri": "ajax\/slug\/create", "methods": ["POST"] }, "theme.index": { "uri": "admin\/theme\/all", "methods": ["GET", "HEAD"] }, "theme.active": { "uri": "admin\/theme\/active", "methods": ["POST"] }, "theme.remove": { "uri": "admin\/theme\/remove", "methods": ["POST"] }, "theme.options": { "uri": "admin\/theme\/options", "methods": ["GET", "HEAD"] }, "theme.options.post": { "uri": "admin\/theme\/options", "methods": ["POST"] }, "theme.custom-css": { "uri": "admin\/theme\/custom-css", "methods": ["GET", "HEAD"] }, "theme.custom-css.post": { "uri": "admin\/theme\/custom-css", "methods": ["POST"] }, "theme.custom-js": { "uri": "admin\/theme\/custom-js", "methods": ["GET", "HEAD"] }, "theme.custom-js.post": { "uri": "admin\/theme\/custom-js", "methods": ["POST"] }, "theme.custom-html": { "uri": "admin\/theme\/custom-html", "methods": ["GET", "HEAD"] }, "theme.custom-html.post": { "uri": "admin\/theme\/custom-html", "methods": ["POST"] }, "theme.robots-txt": { "uri": "admin\/theme\/robots-txt", "methods": ["GET", "HEAD"] }, "theme.robots-txt.post": { "uri": "admin\/theme\/robots-txt", "methods": ["POST"] }, "widgets.index": { "uri": "admin\/widgets", "methods": ["GET", "HEAD"] }, "widgets.save_widgets_sidebar": { "uri": "admin\/widgets\/save-widgets-to-sidebar", "methods": ["POST"] }, "widgets.destroy": { "uri": "admin\/widgets\/delete", "methods": ["DELETE"] }, "sanctum.csrf-cookie": { "uri": "sanctum\/csrf-cookie", "methods": ["GET", "HEAD"] }, "languages.index": { "uri": "admin\/settings\/languages", "methods": ["GET", "HEAD"] }, "settings.language": { "uri": "admin\/settings\/languages\/options", "methods": ["GET", "HEAD"] }, "languages.store": { "uri": "admin\/settings\/languages\/store", "methods": ["POST"] }, "languages.edit": { "uri": "admin\/settings\/languages\/edit", "methods": ["POST"] }, "languages.destroy": { "uri": "admin\/settings\/languages\/delete\/{id}", "methods": ["DELETE"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "languages.set.default": { "uri": "admin\/settings\/languages\/set-default", "methods": ["GET", "HEAD"] }, "languages.get": { "uri": "admin\/settings\/languages\/get", "methods": ["GET", "HEAD"] }, "languages.settings": { "uri": "admin\/settings\/languages\/edit-setting", "methods": ["POST"] }, "languages.change.item.language": { "uri": "languages\/change-item-language", "methods": ["POST"] }, "languages.change.data.language": { "uri": "languages\/change-data-language\/{locale}", "methods": ["GET", "HEAD"], "parameters": ["locale"] }, "language-advanced.save": { "uri": "admin\/language-advanced\/save\/{id}", "methods": ["POST"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "analytics.general": { "uri": "admin\/analytics\/general", "methods": ["GET", "HEAD"] }, "analytics.page": { "uri": "admin\/analytics\/page", "methods": ["GET", "HEAD"] }, "analytics.browser": { "uri": "admin\/analytics\/browser", "methods": ["GET", "HEAD"] }, "analytics.referrer": { "uri": "admin\/analytics\/referrer", "methods": ["GET", "HEAD"] }, "analytics.settings": { "uri": "admin\/settings\/analytics", "methods": ["GET", "HEAD"] }, "analytics.settings.update": { "uri": "admin\/settings\/analytics", "methods": ["PUT"] }, "analytics.settings.json": { "uri": "admin\/settings\/analytics\/json", "methods": ["POST"] }, "audit-log.index": { "uri": "admin\/audit-logs", "methods": ["GET", "POST", "HEAD"] }, "audit-log.destroy": { "uri": "admin\/audit-logs\/{}", "methods": ["DELETE"], "wheres": { "id": "[0-9]+" }, "parameters": [""] }, "audit-log.widget.activities": { "uri": "admin\/audit-logs\/widgets\/activities", "methods": ["GET", "HEAD"] }, "audit-log.empty": { "uri": "admin\/audit-logs\/items\/empty", "methods": ["GET", "HEAD"] }, "backups.index": { "uri": "admin\/system\/backups", "methods": ["GET", "HEAD"] }, "backups.create": { "uri": "admin\/system\/backups\/create", "methods": ["POST"] }, "backups.destroy": { "uri": "admin\/system\/backups\/delete\/{folder}", "methods": ["DELETE"], "parameters": ["folder"] }, "backups.restore": { "uri": "admin\/system\/backups\/restore\/{folder}", "methods": ["GET", "HEAD"], "parameters": ["folder"] }, "backups.download.database": { "uri": "admin\/system\/backups\/download-database\/{folder}", "methods": ["GET", "HEAD"], "parameters": ["folder"] }, "backups.download.uploads.folder": { "uri": "admin\/system\/backups\/download-uploads-folder\/{folder}", "methods": ["GET", "HEAD"], "parameters": ["folder"] }, "posts.index": { "uri": "admin\/blog\/posts", "methods": ["GET", "POST", "HEAD"] }, "posts.create": { "uri": "admin\/blog\/posts\/create", "methods": ["GET", "HEAD"] }, "posts.create.store": { "uri": "admin\/blog\/posts\/create", "methods": ["POST"] }, "posts.edit": { "uri": "admin\/blog\/posts\/edit\/{post}", "methods": ["GET", "HEAD"], "wheres": { "post": "[0-9]+" }, "parameters": ["post"], "bindings": { "post": "id" } }, "posts.edit.update": { "uri": "admin\/blog\/posts\/edit\/{post}", "methods": ["POST"], "wheres": { "post": "[0-9]+" }, "parameters": ["post"], "bindings": { "post": "id" } }, "posts.destroy": { "uri": "admin\/blog\/posts\/{post}", "methods": ["DELETE"], "wheres": { "post": "[0-9]+" }, "parameters": ["post"], "bindings": { "post": "id" } }, "posts.widget.recent-posts": { "uri": "admin\/blog\/posts\/widgets\/recent-posts", "methods": ["GET", "HEAD"] }, "categories.index": { "uri": "admin\/blog\/categories", "methods": ["GET", "POST", "HEAD"] }, "categories.create": { "uri": "admin\/blog\/categories\/create", "methods": ["GET", "HEAD"] }, "categories.create.store": { "uri": "admin\/blog\/categories\/create", "methods": ["POST"] }, "categories.edit": { "uri": "admin\/blog\/categories\/edit\/{category}", "methods": ["GET", "HEAD"], "wheres": { "category": "[0-9]+" }, "parameters": ["category"], "bindings": { "category": "id" } }, "categories.edit.update": { "uri": "admin\/blog\/categories\/edit\/{category}", "methods": ["POST"], "wheres": { "category": "[0-9]+" }, "parameters": ["category"], "bindings": { "category": "id" } }, "categories.destroy": { "uri": "admin\/blog\/categories\/{category}", "methods": ["DELETE"], "wheres": { "category": "[0-9]+" }, "parameters": ["category"], "bindings": { "category": "id" } }, "categories.update-tree": { "uri": "admin\/blog\/categories\/update-tree", "methods": ["PUT"] }, "tags.index": { "uri": "admin\/blog\/tags", "methods": ["GET", "POST", "HEAD"] }, "tags.create": { "uri": "admin\/blog\/tags\/create", "methods": ["GET", "HEAD"] }, "tags.create.store": { "uri": "admin\/blog\/tags\/create", "methods": ["POST"] }, "tags.edit": { "uri": "admin\/blog\/tags\/edit\/{tag}", "methods": ["GET", "HEAD"], "wheres": { "tag": "[0-9]+" }, "parameters": ["tag"], "bindings": { "tag": "id" } }, "tags.edit.update": { "uri": "admin\/blog\/tags\/edit\/{tag}", "methods": ["POST"], "wheres": { "tag": "[0-9]+" }, "parameters": ["tag"], "bindings": { "tag": "id" } }, "tags.destroy": { "uri": "admin\/blog\/tags\/{tag}", "methods": ["DELETE"], "wheres": { "tag": "[0-9]+" }, "parameters": ["tag"], "bindings": { "tag": "id" } }, "tags.all": { "uri": "admin\/blog\/tags\/all", "methods": ["GET", "HEAD"] }, "blog.settings": { "uri": "admin\/settings\/blog", "methods": ["GET", "HEAD"] }, "blog.settings.update": { "uri": "admin\/settings\/blog", "methods": ["PUT"] }, "public.search": { "uri": "search", "methods": ["GET", "HEAD"] }, "captcha.settings": { "uri": "admin\/settings\/captcha", "methods": ["GET", "HEAD"] }, "captcha.settings.update": { "uri": "admin\/settings\/captcha", "methods": ["PUT"] }, "contacts.index": { "uri": "admin\/contacts", "methods": ["GET", "POST", "HEAD"] }, "contacts.edit": { "uri": "admin\/contacts\/edit\/{contact}", "methods": ["GET", "HEAD"], "wheres": { "contact": "[0-9]+" }, "parameters": ["contact"], "bindings": { "contact": "id" } }, "contacts.edit.update": { "uri": "admin\/contacts\/edit\/{contact}", "methods": ["POST"], "wheres": { "contact": "[0-9]+" }, "parameters": ["contact"], "bindings": { "contact": "id" } }, "contacts.destroy": { "uri": "admin\/contacts\/{contact}", "methods": ["DELETE"], "wheres": { "contact": "[0-9]+" }, "parameters": ["contact"], "bindings": { "contact": "id" } }, "contacts.reply": { "uri": "admin\/contacts\/reply\/{contact}", "methods": ["POST"], "wheres": { "id": "[0-9]+" }, "parameters": ["contact"], "bindings": { "contact": "id" } }, "contact.settings": { "uri": "admin\/settings\/contact", "methods": ["GET", "HEAD"] }, "contact.settings.update": { "uri": "admin\/settings\/contact", "methods": ["PUT"] }, "public.send.contact": { "uri": "contact\/send", "methods": ["POST"] }, "faq_category.index": { "uri": "admin\/faq-categories", "methods": ["GET", "POST", "HEAD"] }, "faq_category.create": { "uri": "admin\/faq-categories\/create", "methods": ["GET", "HEAD"] }, "faq_category.create.store": { "uri": "admin\/faq-categories\/create", "methods": ["POST"] }, "faq_category.edit": { "uri": "admin\/faq-categories\/edit\/{faq_category}", "methods": ["GET", "HEAD"], "wheres": { "faq_category": "[0-9]+" }, "parameters": ["faq_category"] }, "faq_category.edit.update": { "uri": "admin\/faq-categories\/edit\/{faq_category}", "methods": ["POST"], "wheres": { "faq_category": "[0-9]+" }, "parameters": ["faq_category"] }, "faq_category.destroy": { "uri": "admin\/faq-categories\/{faq_category}", "methods": ["DELETE"], "wheres": { "faq_category": "[0-9]+" }, "parameters": ["faq_category"] }, "faq.index": { "uri": "admin\/faqs", "methods": ["GET", "POST", "HEAD"] }, "faq.create": { "uri": "admin\/faqs\/create", "methods": ["GET", "HEAD"] }, "faq.create.store": { "uri": "admin\/faqs\/create", "methods": ["POST"] }, "faq.edit": { "uri": "admin\/faqs\/edit\/{faq}", "methods": ["GET", "HEAD"], "wheres": { "faq": "[0-9]+" }, "parameters": ["faq"], "bindings": { "faq": "id" } }, "faq.edit.update": { "uri": "admin\/faqs\/edit\/{faq}", "methods": ["POST"], "wheres": { "faq": "[0-9]+" }, "parameters": ["faq"], "bindings": { "faq": "id" } }, "faq.destroy": { "uri": "admin\/faqs\/{faq}", "methods": ["DELETE"], "wheres": { "faq": "[0-9]+" }, "parameters": ["faq"], "bindings": { "faq": "id" } }, "faqs.settings": { "uri": "admin\/settings\/faqs", "methods": ["GET", "HEAD"] }, "faqs.settings.update": { "uri": "admin\/settings\/faqs", "methods": ["PUT"] }, "country.index": { "uri": "admin\/countries", "methods": ["GET", "POST", "HEAD"] }, "country.create": { "uri": "admin\/countries\/create", "methods": ["GET", "HEAD"] }, "country.create.store": { "uri": "admin\/countries\/create", "methods": ["POST"] }, "country.edit": { "uri": "admin\/countries\/edit\/{country}", "methods": ["GET", "HEAD"], "wheres": { "country": "[0-9]+" }, "parameters": ["country"], "bindings": { "country": "id" } }, "country.edit.update": { "uri": "admin\/countries\/edit\/{country}", "methods": ["POST"], "wheres": { "country": "[0-9]+" }, "parameters": ["country"], "bindings": { "country": "id" } }, "country.destroy": { "uri": "admin\/countries\/{country}", "methods": ["DELETE"], "wheres": { "country": "[0-9]+" }, "parameters": ["country"], "bindings": { "country": "id" } }, "country.list": { "uri": "admin\/countries\/list", "methods": ["GET", "HEAD"] }, "state.index": { "uri": "admin\/states", "methods": ["GET", "POST", "HEAD"] }, "state.create": { "uri": "admin\/states\/create", "methods": ["GET", "HEAD"] }, "state.create.store": { "uri": "admin\/states\/create", "methods": ["POST"] }, "state.edit": { "uri": "admin\/states\/edit\/{state}", "methods": ["GET", "HEAD"], "wheres": { "state": "[0-9]+" }, "parameters": ["state"], "bindings": { "state": "id" } }, "state.edit.update": { "uri": "admin\/states\/edit\/{state}", "methods": ["POST"], "wheres": { "state": "[0-9]+" }, "parameters": ["state"], "bindings": { "state": "id" } }, "state.destroy": { "uri": "admin\/states\/{state}", "methods": ["DELETE"], "wheres": { "state": "[0-9]+" }, "parameters": ["state"], "bindings": { "state": "id" } }, "state.list": { "uri": "admin\/states\/list", "methods": ["GET", "HEAD"] }, "city.index": { "uri": "admin\/cities", "methods": ["GET", "POST", "HEAD"] }, "city.create": { "uri": "admin\/cities\/create", "methods": ["GET", "HEAD"] }, "city.create.store": { "uri": "admin\/cities\/create", "methods": ["POST"] }, "city.edit": { "uri": "admin\/cities\/edit\/{city}", "methods": ["GET", "HEAD"], "wheres": { "city": "[0-9]+" }, "parameters": ["city"], "bindings": { "city": "id" } }, "city.edit.update": { "uri": "admin\/cities\/edit\/{city}", "methods": ["POST"], "wheres": { "city": "[0-9]+" }, "parameters": ["city"], "bindings": { "city": "id" } }, "city.destroy": { "uri": "admin\/cities\/{city}", "methods": ["DELETE"], "wheres": { "city": "[0-9]+" }, "parameters": ["city"], "bindings": { "city": "id" } }, "city.list": { "uri": "admin\/cities\/list", "methods": ["GET", "HEAD"] }, "location.upload.process": { "uri": "admin\/location\/upload\/process", "methods": ["POST"] }, "location.upload.validate": { "uri": "admin\/location\/upload\/validate", "methods": ["POST"] }, "location.import": { "uri": "admin\/location\/import", "methods": ["POST"] }, "location.bulk-import.index": { "uri": "admin\/locations\/bulk-import", "methods": ["GET", "HEAD"] }, "location.bulk-import.download-template": { "uri": "admin\/locations\/bulk-import\/download-template", "methods": ["POST"] }, "location.bulk-import.import-location-data": { "uri": "admin\/locations\/bulk-import\/import-location-data", "methods": ["POST"] }, "location.export.index": { "uri": "admin\/locations\/export", "methods": ["GET", "HEAD"] }, "location.export.process": { "uri": "admin\/locations\/export", "methods": ["POST"] }, "ajax.states-by-country": { "uri": "ajax\/states-by-country", "methods": ["GET", "HEAD"] }, "ajax.cities-by-state": { "uri": "ajax\/cities-by-state", "methods": ["GET", "HEAD"] }, "newsletter.index": { "uri": "admin\/newsletters", "methods": ["GET", "POST", "HEAD"] }, "newsletter.destroy": { "uri": "admin\/newsletters\/{newsletter}", "methods": ["DELETE"], "wheres": { "newsletter": "[0-9]+" }, "parameters": ["newsletter"], "bindings": { "newsletter": "id" } }, "newsletter.settings": { "uri": "admin\/settings\/newsletter", "methods": ["GET", "HEAD"] }, "newsletter.settings.update": { "uri": "admin\/settings\/newsletter", "methods": ["PUT"] }, "public.newsletter.subscribe": { "uri": "newsletter\/subscribe", "methods": ["POST"] }, "public.newsletter.unsubscribe": { "uri": "newsletter\/unsubscribe\/{user}", "methods": ["GET", "HEAD"], "parameters": ["user"] }, "payments.methods": { "uri": "admin\/payments\/methods", "methods": ["GET", "HEAD"] }, "payments.settings": { "uri": "admin\/payments\/methods\/settings", "methods": ["PUT"] }, "payments.methods.post": { "uri": "admin\/payments\/methods", "methods": ["POST"] }, "payments.methods.update.status": { "uri": "admin\/payments\/methods\/update-status", "methods": ["POST"] }, "payment.index": { "uri": "admin\/payments\/transactions", "methods": ["GET", "POST", "HEAD"] }, "payment.destroy": { "uri": "admin\/payments\/transactions\/{payment}", "methods": ["DELETE"], "wheres": { "payment": "[0-9]+" }, "parameters": ["payment"], "bindings": { "payment": "id" } }, "payment.show": { "uri": "admin\/payments\/transactions\/{payment}", "methods": ["GET", "HEAD"], "parameters": ["payment"], "bindings": { "payment": "id" } }, "payment.update": { "uri": "admin\/payments\/transactions\/{payment}", "methods": ["PUT"], "parameters": ["payment"], "bindings": { "payment": "id" } }, "payment.refund-detail": { "uri": "admin\/payments\/transactions\/refund-detail\/{id}\/{refundId}", "methods": ["GET", "HEAD"], "parameters": ["id", "refundId"] }, "payments.paypal.status": { "uri": "payment\/paypal\/status", "methods": ["GET", "HEAD"] }, "paystack.payment.callback": { "uri": "paystack\/payment\/callback", "methods": ["GET", "HEAD"] }, "payments.razorpay.webhook": { "uri": "payment\/razorpay\/webhook", "methods": ["POST"] }, "real-estate.settings.general": { "uri": "admin\/real-estate\/settings\/general", "methods": ["GET", "HEAD"] }, "real-estate.settings.general.update": { "uri": "admin\/real-estate\/settings\/general", "methods": ["PUT"] }, "real-estate.settings.currencies": { "uri": "admin\/real-estate\/settings\/currencies", "methods": ["GET", "HEAD"] }, "real-estate.settings.currencies.update": { "uri": "admin\/real-estate\/settings\/currencies", "methods": ["PUT"] }, "real-estate.settings.accounts": { "uri": "admin\/real-estate\/settings\/accounts", "methods": ["GET", "HEAD"] }, "real-estate.settings.accounts.update": { "uri": "admin\/real-estate\/settings\/accounts", "methods": ["PUT"] }, "real-estate.settings.invoices": { "uri": "admin\/real-estate\/settings\/invoices", "methods": ["GET", "HEAD"] }, "real-estate.settings.invoices.update": { "uri": "admin\/real-estate\/settings\/invoices", "methods": ["PUT"] }, "real-estate.settings.invoice-template": { "uri": "admin\/real-estate\/settings\/invoice-template", "methods": ["GET", "HEAD"] }, "real-estate.settings.invoice-template.update": { "uri": "admin\/real-estate\/settings\/invoice-template", "methods": ["PUT"] }, "real-estate.settings.invoice-template.reset": { "uri": "admin\/real-estate\/settings\/invoice-template\/reset", "methods": ["POST"] }, "real-estate.settings.invoice-template.preview": { "uri": "admin\/real-estate\/settings\/invoice-template\/preview", "methods": ["GET", "HEAD"] }, "property.index": { "uri": "admin\/real-estate\/properties", "methods": ["GET", "POST", "HEAD"] }, "property.create": { "uri": "admin\/real-estate\/properties\/create", "methods": ["GET", "HEAD"] }, "property.create.store": { "uri": "admin\/real-estate\/properties\/create", "methods": ["POST"] }, "property.edit": { "uri": "admin\/real-estate\/properties\/edit\/{property}", "methods": ["GET", "HEAD"], "wheres": { "property": "[0-9]+" }, "parameters": ["property"] }, "property.edit.update": { "uri": "admin\/real-estate\/properties\/edit\/{property}", "methods": ["POST"], "wheres": { "property": "[0-9]+" }, "parameters": ["property"] }, "property.destroy": { "uri": "admin\/real-estate\/properties\/{property}", "methods": ["DELETE"], "wheres": { "property": "[0-9]+" }, "parameters": ["property"], "bindings": { "property": "id" } }, "property.duplicate-property": { "uri": "admin\/real-estate\/properties\/duplicate-property\/{id}", "methods": ["POST"], "parameters": ["id"] }, "project.index": { "uri": "admin\/real-estate\/projects", "methods": ["GET", "POST", "HEAD"] }, "project.create": { "uri": "admin\/real-estate\/projects\/create", "methods": ["GET", "HEAD"] }, "project.create.store": { "uri": "admin\/real-estate\/projects\/create", "methods": ["POST"] }, "project.edit": { "uri": "admin\/real-estate\/projects\/edit\/{project}", "methods": ["GET", "HEAD"], "wheres": { "project": "[0-9]+" }, "parameters": ["project"] }, "project.edit.update": { "uri": "admin\/real-estate\/projects\/edit\/{project}", "methods": ["POST"], "wheres": { "project": "[0-9]+" }, "parameters": ["project"] }, "project.destroy": { "uri": "admin\/real-estate\/projects\/{project}", "methods": ["DELETE"], "wheres": { "project": "[0-9]+" }, "parameters": ["project"], "bindings": { "project": "id" } }, "property_feature.index": { "uri": "admin\/real-estate\/property-features", "methods": ["GET", "POST", "HEAD"] }, "property_feature.create": { "uri": "admin\/real-estate\/property-features\/create", "methods": ["GET", "HEAD"] }, "property_feature.create.store": { "uri": "admin\/real-estate\/property-features\/create", "methods": ["POST"] }, "property_feature.edit": { "uri": "admin\/real-estate\/property-features\/edit\/{property_feature}", "methods": ["GET", "HEAD"], "wheres": { "property_feature": "[0-9]+" }, "parameters": ["property_feature"] }, "property_feature.edit.update": { "uri": "admin\/real-estate\/property-features\/edit\/{property_feature}", "methods": ["POST"], "wheres": { "property_feature": "[0-9]+" }, "parameters": ["property_feature"] }, "property_feature.destroy": { "uri": "admin\/real-estate\/property-features\/{property_feature}", "methods": ["DELETE"], "wheres": { "property_feature": "[0-9]+" }, "parameters": ["property_feature"] }, "investor.index": { "uri": "admin\/real-estate\/investors", "methods": ["GET", "POST", "HEAD"] }, "investor.create": { "uri": "admin\/real-estate\/investors\/create", "methods": ["GET", "HEAD"] }, "investor.create.store": { "uri": "admin\/real-estate\/investors\/create", "methods": ["POST"] }, "investor.edit": { "uri": "admin\/real-estate\/investors\/edit\/{investor}", "methods": ["GET", "HEAD"], "wheres": { "investor": "[0-9]+" }, "parameters": ["investor"] }, "investor.edit.update": { "uri": "admin\/real-estate\/investors\/edit\/{investor}", "methods": ["POST"], "wheres": { "investor": "[0-9]+" }, "parameters": ["investor"] }, "investor.destroy": { "uri": "admin\/real-estate\/investors\/{investor}", "methods": ["DELETE"], "wheres": { "investor": "[0-9]+" }, "parameters": ["investor"] }, "consult.index": { "uri": "admin\/real-estate\/consults", "methods": ["GET", "POST", "HEAD"] }, "consult.edit": { "uri": "admin\/real-estate\/consults\/edit\/{consult}", "methods": ["GET", "HEAD"], "wheres": { "consult": "[0-9]+" }, "parameters": ["consult"] }, "consult.edit.update": { "uri": "admin\/real-estate\/consults\/edit\/{consult}", "methods": ["POST"], "wheres": { "consult": "[0-9]+" }, "parameters": ["consult"] }, "consult.destroy": { "uri": "admin\/real-estate\/consults\/{consult}", "methods": ["DELETE"], "wheres": { "consult": "[0-9]+" }, "parameters": ["consult"] }, "property_category.index": { "uri": "admin\/real-estate\/categories", "methods": ["GET", "POST", "HEAD"] }, "property_category.create": { "uri": "admin\/real-estate\/categories\/create", "methods": ["GET", "HEAD"] }, "property_category.create.store": { "uri": "admin\/real-estate\/categories\/create", "methods": ["POST"] }, "property_category.edit": { "uri": "admin\/real-estate\/categories\/edit\/{category}", "methods": ["GET", "HEAD"], "wheres": { "category": "[0-9]+" }, "parameters": ["category"], "bindings": { "category": "id" } }, "property_category.edit.update": { "uri": "admin\/real-estate\/categories\/edit\/{category}", "methods": ["POST"], "wheres": { "category": "[0-9]+" }, "parameters": ["category"], "bindings": { "category": "id" } }, "property_category.destroy": { "uri": "admin\/real-estate\/categories\/{category}", "methods": ["DELETE"], "wheres": { "category": "[0-9]+" }, "parameters": ["category"], "bindings": { "category": "id" } }, "property_category.update-tree": { "uri": "admin\/real-estate\/categories\/update-tree", "methods": ["PUT"] }, "facility.index": { "uri": "admin\/real-estate\/facilities", "methods": ["GET", "POST", "HEAD"] }, "facility.create": { "uri": "admin\/real-estate\/facilities\/create", "methods": ["GET", "HEAD"] }, "facility.create.store": { "uri": "admin\/real-estate\/facilities\/create", "methods": ["POST"] }, "facility.edit": { "uri": "admin\/real-estate\/facilities\/edit\/{facility}", "methods": ["GET", "HEAD"], "wheres": { "facility": "[0-9]+" }, "parameters": ["facility"] }, "facility.edit.update": { "uri": "admin\/real-estate\/facilities\/edit\/{facility}", "methods": ["POST"], "wheres": { "facility": "[0-9]+" }, "parameters": ["facility"] }, "facility.destroy": { "uri": "admin\/real-estate\/facilities\/{facility}", "methods": ["DELETE"], "wheres": { "facility": "[0-9]+" }, "parameters": ["facility"] }, "account.index": { "uri": "admin\/real-estate\/accounts", "methods": ["GET", "POST", "HEAD"] }, "account.create": { "uri": "admin\/real-estate\/accounts\/create", "methods": ["GET", "HEAD"] }, "account.create.store": { "uri": "admin\/real-estate\/accounts\/create", "methods": ["POST"] }, "account.edit": { "uri": "admin\/real-estate\/accounts\/edit\/{account}", "methods": ["GET", "HEAD"], "wheres": { "account": "[0-9]+" }, "parameters": ["account"], "bindings": { "account": "id" } }, "account.edit.update": { "uri": "admin\/real-estate\/accounts\/edit\/{account}", "methods": ["POST"], "wheres": { "account": "[0-9]+" }, "parameters": ["account"], "bindings": { "account": "id" } }, "account.destroy": { "uri": "admin\/real-estate\/accounts\/{account}", "methods": ["DELETE"], "wheres": { "account": "[0-9]+" }, "parameters": ["account"], "bindings": { "account": "id" } }, "account.list": { "uri": "admin\/real-estate\/accounts\/list", "methods": ["GET", "HEAD"] }, "account.credits.add": { "uri": "admin\/real-estate\/accounts\/credits\/{id}", "methods": ["POST"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "package.index": { "uri": "admin\/real-estate\/packages", "methods": ["GET", "POST", "HEAD"] }, "package.create": { "uri": "admin\/real-estate\/packages\/create", "methods": ["GET", "HEAD"] }, "package.create.store": { "uri": "admin\/real-estate\/packages\/create", "methods": ["POST"] }, "package.edit": { "uri": "admin\/real-estate\/packages\/edit\/{package}", "methods": ["GET", "HEAD"], "wheres": { "package": "[0-9]+" }, "parameters": ["package"] }, "package.edit.update": { "uri": "admin\/real-estate\/packages\/edit\/{package}", "methods": ["POST"], "wheres": { "package": "[0-9]+" }, "parameters": ["package"] }, "package.destroy": { "uri": "admin\/real-estate\/packages\/{package}", "methods": ["DELETE"], "wheres": { "package": "[0-9]+" }, "parameters": ["package"] }, "review.index": { "uri": "admin\/real-estate\/reviews", "methods": ["GET", "POST", "HEAD"] }, "review.destroy": { "uri": "admin\/real-estate\/reviews\/{review}", "methods": ["DELETE"], "wheres": { "review": "[0-9]+" }, "parameters": ["review"] }, "real-estate.custom-fields.index": { "uri": "admin\/real-estate\/custom-fields", "methods": ["GET", "POST", "HEAD"] }, "real-estate.custom-fields.create": { "uri": "admin\/real-estate\/custom-fields\/create", "methods": ["GET", "HEAD"] }, "real-estate.custom-fields.create.store": { "uri": "admin\/real-estate\/custom-fields\/create", "methods": ["POST"] }, "real-estate.custom-fields.edit": { "uri": "admin\/real-estate\/custom-fields\/edit\/{custom_field}", "methods": ["GET", "HEAD"], "wheres": { "custom_field": "[0-9]+" }, "parameters": ["custom_field"] }, "real-estate.custom-fields.edit.update": { "uri": "admin\/real-estate\/custom-fields\/edit\/{custom_field}", "methods": ["POST"], "wheres": { "custom_field": "[0-9]+" }, "parameters": ["custom_field"] }, "real-estate.custom-fields.destroy": { "uri": "admin\/real-estate\/custom-fields\/{custom_field}", "methods": ["DELETE"], "wheres": { "custom_field": "[0-9]+" }, "parameters": ["custom_field"] }, "real-estate.custom-fields.get-info": { "uri": "admin\/real-estate\/custom-fields\/info", "methods": ["GET", "HEAD"] }, "invoices.index": { "uri": "admin\/real-estate\/invoices", "methods": ["GET", "POST", "HEAD"] }, "invoices.create": { "uri": "admin\/real-estate\/invoices\/create", "methods": ["GET", "HEAD"] }, "invoices.create.store": { "uri": "admin\/real-estate\/invoices\/create", "methods": ["POST"] }, "invoices.destroy": { "uri": "admin\/real-estate\/invoices\/{invoice}", "methods": ["DELETE"], "wheres": { "invoice": "[0-9]+" }, "parameters": ["invoice"] }, "invoices.show": { "uri": "admin\/real-estate\/invoices\/{id}", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "invoices.generate": { "uri": "admin\/real-estate\/invoices\/{id}\/generate", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "properties.import.index": { "uri": "admin\/real-estate\/properties\/import", "methods": ["GET", "HEAD"] }, "properties.import": { "uri": "admin\/real-estate\/properties\/import", "methods": ["POST"] }, "properties.upload.process": { "uri": "admin\/real-estate\/properties\/upload\/process", "methods": ["POST"] }, "properties.upload.validate": { "uri": "admin\/real-estate\/properties\/upload\/validate", "methods": ["POST"] }, "properties.download-template": { "uri": "admin\/real-estate\/properties\/download-template", "methods": ["POST"] }, "projects.import.index": { "uri": "admin\/real-estate\/projects\/import", "methods": ["GET", "HEAD"] }, "projects.import": { "uri": "admin\/real-estate\/projects\/import", "methods": ["POST"] }, "projects.upload.process": { "uri": "admin\/real-estate\/projects\/upload\/process", "methods": ["POST"] }, "projects.upload.validate": { "uri": "admin\/real-estate\/projects\/upload\/validate", "methods": ["POST"] }, "projects.download-template": { "uri": "admin\/real-estate\/projects\/download-template", "methods": ["POST"] }, "export-properties.index": { "uri": "admin\/real-estate\/export\/properties", "methods": ["GET", "HEAD"] }, "export-properties.index.post": { "uri": "admin\/real-estate\/export\/properties", "methods": ["POST"] }, "export-projects.index": { "uri": "admin\/real-estate\/export\/projects", "methods": ["GET", "HEAD"] }, "export-projects.index.post": { "uri": "admin\/real-estate\/export\/projects", "methods": ["POST"] }, "coupons.index": { "uri": "admin\/real-estate\/coupons", "methods": ["GET", "POST", "HEAD"] }, "coupons.create": { "uri": "admin\/real-estate\/coupons\/create", "methods": ["GET", "HEAD"] }, "coupons.create.store": { "uri": "admin\/real-estate\/coupons\/create", "methods": ["POST"] }, "coupons.edit": { "uri": "admin\/real-estate\/coupons\/edit\/{coupon}", "methods": ["GET", "HEAD"], "wheres": { "coupon": "[0-9]+" }, "parameters": ["coupon"], "bindings": { "coupon": "id" } }, "coupons.edit.update": { "uri": "admin\/real-estate\/coupons\/edit\/{coupon}", "methods": ["POST"], "wheres": { "coupon": "[0-9]+" }, "parameters": ["coupon"], "bindings": { "coupon": "id" } }, "coupons.destroy": { "uri": "admin\/real-estate\/coupons\/{coupon}", "methods": ["DELETE"], "wheres": { "coupon": "[0-9]+" }, "parameters": ["coupon"], "bindings": { "coupon": "id" } }, "coupons.generate-coupon": { "uri": "admin\/real-estate\/coupons\/generate-coupon", "methods": ["POST"] }, "coupons.deletes": { "uri": "admin\/real-estate\/coupons\/deletes", "methods": ["DELETE"] }, "public.projects": { "uri": "projects", "methods": ["POST"] }, "public.properties": { "uri": "properties", "methods": ["POST"] }, "public.projects-by-city": { "uri": "projects\/city\/{slug}", "methods": ["POST", "GET", "HEAD"], "parameters": ["slug"] }, "public.properties-by-city": { "uri": "properties\/city\/{slug}", "methods": ["POST", "GET", "HEAD"], "parameters": ["slug"] }, "public.projects-by-state": { "uri": "projects\/state\/{slug}", "methods": ["POST", "GET", "HEAD"], "parameters": ["slug"] }, "public.properties-by-state": { "uri": "properties\/state\/{slug}", "methods": ["POST", "GET", "HEAD"], "parameters": ["slug"] }, "public.agents": { "uri": "agents", "methods": ["GET", "HEAD"] }, "public.send.consult": { "uri": "send-consult", "methods": ["POST"] }, "public.change-currency": { "uri": "currency\/switch\/{code?}", "methods": ["GET", "HEAD"], "parameters": ["code"] }, "public.account.login": { "uri": "login", "methods": ["GET", "HEAD"] }, "public.account.login.post": { "uri": "login", "methods": ["POST"] }, "public.account.register": { "uri": "register", "methods": ["GET", "HEAD"] }, "public.account.register.post": { "uri": "register", "methods": ["POST"] }, "public.account.verify": { "uri": "verify", "methods": ["GET", "HEAD"] }, "public.account.password.request": { "uri": "password\/request", "methods": ["GET", "HEAD"] }, "public.account.password.email": { "uri": "password\/email", "methods": ["POST"] }, "public.account.password.update": { "uri": "password\/reset", "methods": ["POST"] }, "public.account.password.reset": { "uri": "password\/reset\/{token}", "methods": ["GET", "HEAD"], "parameters": ["token"] }, "public.account.resend_confirmation": { "uri": "register\/confirm\/resend", "methods": ["GET", "HEAD"] }, "public.account.confirm": { "uri": "register\/confirm\/{user}", "methods": ["GET", "HEAD"], "parameters": ["user"] }, "feeds.properties": { "uri": "feed\/properties", "methods": ["GET", "HEAD"] }, "feeds.projects": { "uri": "feed\/projects", "methods": ["GET", "HEAD"] }, "public.account.logout": { "uri": "account\/logout", "methods": ["POST"] }, "public.account.dashboard": { "uri": "account\/dashboard", "methods": ["GET", "HEAD"] }, "public.account.settings": { "uri": "account\/settings", "methods": ["GET", "HEAD"] }, "public.account.post.settings": { "uri": "account\/settings", "methods": ["POST"] }, "public.account.security": { "uri": "account\/security", "methods": ["GET", "HEAD"] }, "public.account.post.security": { "uri": "account\/security", "methods": ["PUT"] }, "public.account.avatar": { "uri": "account\/avatar", "methods": ["POST"] }, "public.account.packages": { "uri": "account\/packages", "methods": ["GET", "HEAD"] }, "public.account.transactions": { "uri": "account\/transactions", "methods": ["GET", "HEAD"] }, "public.account.coupon.apply": { "uri": "account\/coupon\/apply", "methods": ["POST"] }, "public.account.coupon.remove": { "uri": "account\/coupon\/remove", "methods": ["POST"] }, "public.account.coupon.refresh": { "uri": "account\/coupon\/refresh\/{id}", "methods": ["GET", "HEAD"], "parameters": ["id"] }, "public.account.consults.index": { "uri": "account\/consults", "methods": ["GET", "POST", "HEAD"] }, "public.account.consults.show": { "uri": "account\/consults\/{id}", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "public.account.activity-logs": { "uri": "account\/ajax\/activity-logs", "methods": ["GET", "HEAD"] }, "public.account.ajax.transactions": { "uri": "account\/ajax\/transactions", "methods": ["GET", "HEAD"] }, "public.account.upload": { "uri": "account\/ajax\/upload", "methods": ["POST"] }, "public.account.upload-from-editor": { "uri": "account\/ajax\/upload-from-editor", "methods": ["POST"] }, "public.account.ajax.packages": { "uri": "account\/ajax\/packages", "methods": ["GET", "HEAD"] }, "public.account.ajax.package.subscribe": { "uri": "account\/ajax\/packages", "methods": ["PUT"] }, "public.account.properties.index": { "uri": "account\/properties", "methods": ["GET", "POST", "HEAD"] }, "public.account.properties.create": { "uri": "account\/properties\/create", "methods": ["GET", "HEAD"] }, "public.account.properties.create.store": { "uri": "account\/properties\/create", "methods": ["POST"] }, "public.account.properties.edit": { "uri": "account\/properties\/edit\/{property}", "methods": ["GET", "HEAD"], "wheres": { "property": "[0-9]+" }, "parameters": ["property"] }, "public.account.properties.edit.update": { "uri": "account\/properties\/edit\/{property}", "methods": ["POST"], "wheres": { "property": "[0-9]+" }, "parameters": ["property"] }, "public.account.properties.destroy": { "uri": "account\/properties\/{property}", "methods": ["DELETE"], "wheres": { "property": "[0-9]+" }, "parameters": ["property"] }, "public.account.properties.renew": { "uri": "account\/properties\/renew\/{id}", "methods": ["POST"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "public.account.package.subscribe": { "uri": "account\/packages\/{id}\/subscribe", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "public.account.package.subscribe.callback": { "uri": "account\/packages\/{id}\/subscribe\/callback", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "public.account.invoices.index": { "uri": "account\/invoices", "methods": ["GET", "POST", "HEAD"] }, "public.account.invoices.show": { "uri": "account\/invoices\/{id}", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "public.account.invoices.generate": { "uri": "account\/invoices\/{id}\/generate", "methods": ["GET", "HEAD"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "public.account.custom-fields.get-info": { "uri": "account\/custom-fields\/info", "methods": ["GET", "HEAD"] }, "public.ajax.review.store": { "uri": "ajax\/review\/{slug}", "methods": ["POST"], "parameters": ["slug"] }, "public.ajax.review.index": { "uri": "ajax\/review\/{slug}", "methods": ["GET", "HEAD"], "parameters": ["slug"] }, "payments.checkout": { "uri": "payments\/checkout", "methods": ["POST"] }, "public.account.language-advanced.save": { "uri": "account\/language-advanced\/save\/{id}", "methods": ["POST"], "wheres": { "id": "[0-9]+" }, "parameters": ["id"] }, "feeds.posts": { "uri": "feed\/posts", "methods": ["GET", "HEAD"] }, "social-login.settings": { "uri": "admin\/settings\/social-login", "methods": ["GET", "HEAD"] }, "social-login.settings.update": { "uri": "admin\/settings\/social-login", "methods": ["PUT"] }, "auth.social": { "uri": "auth\/{provider}", "methods": ["GET", "HEAD"], "parameters": ["provider"] }, "auth.social.callback": { "uri": "auth\/callback\/{provider}", "methods": ["GET", "HEAD"], "parameters": ["provider"] }, "facebook-data-deletion-request-callback": { "uri": "facebook-data-deletion-request-callback", "methods": ["POST"] }, "facebook-deletion-status": { "uri": "facebook-deletion-status\/{id}", "methods": ["GET", "HEAD"], "parameters": ["id"] }, "payments.stripe.webhook": { "uri": "payment\/stripe\/webhook", "methods": ["POST"] }, "payments.stripe.success": { "uri": "payment\/stripe\/success", "methods": ["GET", "HEAD"] }, "payments.stripe.error": { "uri": "payment\/stripe\/error", "methods": ["GET", "HEAD"] }, "testimonial.index": { "uri": "admin\/testimonials", "methods": ["GET", "POST", "HEAD"] }, "testimonial.create": { "uri": "admin\/testimonials\/create", "methods": ["GET", "HEAD"] }, "testimonial.create.store": { "uri": "admin\/testimonials\/create", "methods": ["POST"] }, "testimonial.edit": { "uri": "admin\/testimonials\/edit\/{testimonial}", "methods": ["GET", "HEAD"], "wheres": { "testimonial": "[0-9]+" }, "parameters": ["testimonial"], "bindings": { "testimonial": "id" } }, "testimonial.edit.update": { "uri": "admin\/testimonials\/edit\/{testimonial}", "methods": ["POST"], "wheres": { "testimonial": "[0-9]+" }, "parameters": ["testimonial"], "bindings": { "testimonial": "id" } }, "testimonial.destroy": { "uri": "admin\/testimonials\/{testimonial}", "methods": ["DELETE"], "wheres": { "testimonial": "[0-9]+" }, "parameters": ["testimonial"], "bindings": { "testimonial": "id" } }, "translations.locales": { "uri": "admin\/translations\/locales", "methods": ["GET", "HEAD"] }, "translations.locales.post": { "uri": "admin\/translations\/locales", "methods": ["POST"] }, "translations.locales.delete": { "uri": "admin\/translations\/locales\/{locale}", "methods": ["DELETE"], "parameters": ["locale"] }, "translations.locales.download": { "uri": "admin\/translations\/locales\/download\/{locale}", "methods": ["GET", "HEAD"], "parameters": ["locale"] }, "translations.index": { "uri": "admin\/translations", "methods": ["GET", "POST", "HEAD"] }, "translations.group.edit": { "uri": "admin\/translations\/edit", "methods": ["POST"] }, "translations.theme-translations": { "uri": "admin\/translations\/theme", "methods": ["GET", "POST", "HEAD"] }, "translations.theme-translations.post": { "uri": "admin\/translations\/theme\/post", "methods": ["POST"] }, "translations.theme-translations.re-import": { "uri": "admin\/translations\/theme\/re-import", "methods": ["POST"] }, "public.ajax.cities": { "uri": "ajax\/cities", "methods": ["GET", "HEAD"] }, "public.ajax.featured-properties-for-map": { "uri": "ajax\/featured-properties-for-map", "methods": ["GET", "HEAD"] }, "public.ajax.properties.map": { "uri": "ajax\/properties\/map", "methods": ["GET", "HEAD"] }, "public.ajax.projects.map": { "uri": "ajax\/projects\/map", "methods": ["GET", "HEAD"] }, "public.ajax.projects-filter": { "uri": "ajax\/projects-filter", "methods": ["GET", "HEAD"] }, "public.index": { "uri": "\/", "methods": ["GET", "HEAD"] }, "public.sitemap.index": { "uri": "{key}.{extension}", "methods": ["GET", "HEAD"], "wheres": { "key": "^(?:sitemap)|(?:pages)|(?:properties-((?:19|20|21|22)\\d{2})-(0?[1-9]|1[012]))|(?:projects-((?:19|20|21|22)\\d{2})-(0?[1-9]|1[012]))|(?:property-categories)|(?:agents)|(?:properties-city)|(?:projects-city)|(?:blog-categories)|(?:blog-tags)|(?:blog-posts-((?:19|20|21|22)\\d{2})-(0?[1-9]|1[012]))$", "extension": "xml|html|txt|ror-rss|ror-rdf" }, "parameters": ["key", "extension"] }, "public.single": { "uri": "{slug?}", "methods": ["GET", "HEAD"], "parameters": ["slug"] } } }; !function (t, r) { "object" == typeof exports && "undefined" != typeof module ? module.exports = r() : "function" == typeof define && define.amd ? define(r) : (t || self).route = r() }(this, function () { function t() { try { var r = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () { })) } catch (r) { } return (t = function () { return !!r })() } function r(t) { var r = function (t, r) { if ("object" != typeof t || !t) return t; var n = t[Symbol.toPrimitive]; if (void 0 !== n) { var e = n.call(t, "string"); if ("object" != typeof e) return e; throw new TypeError("@@toPrimitive must return a primitive value.") } return String(t) }(t); return "symbol" == typeof r ? r : String(r) } function n(t, n) { for (var e = 0; e < n.length; e++) { var o = n[e]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, r(o.key), o) } } function e(t, r, e) { return r && n(t.prototype, r), e && n(t, e), Object.defineProperty(t, "prototype", { writable: !1 }), t } function o() { return o = Object.assign ? Object.assign.bind() : function (t) { for (var r = 1; r < arguments.length; r++) { var n = arguments[r]; for (var e in n) Object.prototype.hasOwnProperty.call(n, e) && (t[e] = n[e]) } return t }, o.apply(this, arguments) } function i(t) { return i = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t) }, i(t) } function u(t, r) { return u = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, r) { return t.__proto__ = r, t }, u(t, r) } function f(r) { var n = "function" == typeof Map ? new Map : void 0; return f = function (r) { if (null === r || !function (t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]") } catch (r) { return "function" == typeof t } }(r)) return r; if ("function" != typeof r) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== n) { if (n.has(r)) return n.get(r); n.set(r, e) } function e() { return function (r, n, e) { if (t()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, n); var i = new (r.bind.apply(r, o)); return e && u(i, e.prototype), i }(r, arguments, i(this).constructor) } return e.prototype = Object.create(r.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), u(e, r) }, f(r) } var a = String.prototype.replace, c = /%20/g, l = "RFC3986", s = { default: l, formatters: { RFC1738: function (t) { return a.call(t, c, "+") }, RFC3986: function (t) { return String(t) } }, RFC1738: "RFC1738", RFC3986: l }, v = Object.prototype.hasOwnProperty, p = Array.isArray, y = function () { for (var t = [], r = 0; r < 256; ++r)t.push("%" + ((r < 16 ? "0" : "") + r.toString(16)).toUpperCase()); return t }(), d = function (t, r) { for (var n = r && r.plainObjects ? Object.create(null) : {}, e = 0; e < t.length; ++e)void 0 !== t[e] && (n[e] = t[e]); return n }, b = { arrayToObject: d, assign: function (t, r) { return Object.keys(r).reduce(function (t, n) { return t[n] = r[n], t }, t) }, combine: function (t, r) { return [].concat(t, r) }, compact: function (t) { for (var r = [{ obj: { o: t }, prop: "o" }], n = [], e = 0; e < r.length; ++e)for (var o = r[e], i = o.obj[o.prop], u = Object.keys(i), f = 0; f < u.length; ++f) { var a = u[f], c = i[a]; "object" == typeof c && null !== c && -1 === n.indexOf(c) && (r.push({ obj: i, prop: a }), n.push(c)) } return function (t) { for (; t.length > 1;) { var r = t.pop(), n = r.obj[r.prop]; if (p(n)) { for (var e = [], o = 0; o < n.length; ++o)void 0 !== n[o] && e.push(n[o]); r.obj[r.prop] = e } } }(r), t }, decode: function (t, r, n) { var e = t.replace(/\+/g, " "); if ("iso-8859-1" === n) return e.replace(/%[0-9a-f]{2}/gi, unescape); try { return decodeURIComponent(e) } catch (t) { return e } }, encode: function (t, r, n, e, o) { if (0 === t.length) return t; var i = t; if ("symbol" == typeof t ? i = Symbol.prototype.toString.call(t) : "string" != typeof t && (i = String(t)), "iso-8859-1" === n) return escape(i).replace(/%u[0-9a-f]{4}/gi, function (t) { return "%26%23" + parseInt(t.slice(2), 16) + "%3B" }); for (var u = "", f = 0; f < i.length; ++f) { var a = i.charCodeAt(f); 45 === a || 46 === a || 95 === a || 126 === a || a >= 48 && a <= 57 || a >= 65 && a <= 90 || a >= 97 && a <= 122 || o === s.RFC1738 && (40 === a || 41 === a) ? u += i.charAt(f) : a < 128 ? u += y[a] : a < 2048 ? u += y[192 | a >> 6] + y[128 | 63 & a] : a < 55296 || a >= 57344 ? u += y[224 | a >> 12] + y[128 | a >> 6 & 63] + y[128 | 63 & a] : (a = 65536 + ((1023 & a) << 10 | 1023 & i.charCodeAt(f += 1)), u += y[240 | a >> 18] + y[128 | a >> 12 & 63] + y[128 | a >> 6 & 63] + y[128 | 63 & a]) } return u }, isBuffer: function (t) { return !(!t || "object" != typeof t || !(t.constructor && t.constructor.isBuffer && t.constructor.isBuffer(t))) }, isRegExp: function (t) { return "[object RegExp]" === Object.prototype.toString.call(t) }, maybeMap: function (t, r) { if (p(t)) { for (var n = [], e = 0; e < t.length; e += 1)n.push(r(t[e])); return n } return r(t) }, merge: function t(r, n, e) { if (!n) return r; if ("object" != typeof n) { if (p(r)) r.push(n); else { if (!r || "object" != typeof r) return [r, n]; (e && (e.plainObjects || e.allowPrototypes) || !v.call(Object.prototype, n)) && (r[n] = !0) } return r } if (!r || "object" != typeof r) return [r].concat(n); var o = r; return p(r) && !p(n) && (o = d(r, e)), p(r) && p(n) ? (n.forEach(function (n, o) { if (v.call(r, o)) { var i = r[o]; i && "object" == typeof i && n && "object" == typeof n ? r[o] = t(i, n, e) : r.push(n) } else r[o] = n }), r) : Object.keys(n).reduce(function (r, o) { var i = n[o]; return r[o] = v.call(r, o) ? t(r[o], i, e) : i, r }, o) } }, h = Object.prototype.hasOwnProperty, g = { brackets: function (t) { return t + "[]" }, comma: "comma", indices: function (t, r) { return t + "[" + r + "]" }, repeat: function (t) { return t } }, m = Array.isArray, j = String.prototype.split, w = Array.prototype.push, O = function (t, r) { w.apply(t, m(r) ? r : [r]) }, E = Date.prototype.toISOString, S = s.default, R = { addQueryPrefix: !1, allowDots: !1, charset: "utf-8", charsetSentinel: !1, delimiter: "&", encode: !0, encoder: b.encode, encodeValuesOnly: !1, format: S, formatter: s.formatters[S], indices: !1, serializeDate: function (t) { return E.call(t) }, skipNulls: !1, strictNullHandling: !1 }, T = function t(r, n, e, o, i, u, f, a, c, l, s, v, p, y) { var d, h = r; if ("function" == typeof f ? h = f(n, h) : h instanceof Date ? h = l(h) : "comma" === e && m(h) && (h = b.maybeMap(h, function (t) { return t instanceof Date ? l(t) : t })), null === h) { if (o) return u && !p ? u(n, R.encoder, y, "key", s) : n; h = "" } if ("string" == typeof (d = h) || "number" == typeof d || "boolean" == typeof d || "symbol" == typeof d || "bigint" == typeof d || b.isBuffer(h)) { if (u) { var g = p ? n : u(n, R.encoder, y, "key", s); if ("comma" === e && p) { for (var w = j.call(String(h), ","), E = "", S = 0; S < w.length; ++S)E += (0 === S ? "" : ",") + v(u(w[S], R.encoder, y, "value", s)); return [v(g) + "=" + E] } return [v(g) + "=" + v(u(h, R.encoder, y, "value", s))] } return [v(n) + "=" + v(String(h))] } var T, k = []; if (void 0 === h) return k; if ("comma" === e && m(h)) T = [{ value: h.length > 0 ? h.join(",") || null : void 0 }]; else if (m(f)) T = f; else { var x = Object.keys(h); T = a ? x.sort(a) : x } for (var N = 0; N < T.length; ++N) { var C = T[N], A = "object" == typeof C && void 0 !== C.value ? C.value : h[C]; if (!i || null !== A) { var D = m(h) ? "function" == typeof e ? e(n, C) : n : n + (c ? "." + C : "[" + C + "]"); O(k, t(A, D, e, o, i, u, f, a, c, l, s, v, p, y)) } } return k }, k = Object.prototype.hasOwnProperty, x = Array.isArray, N = { allowDots: !1, allowPrototypes: !1, arrayLimit: 20, charset: "utf-8", charsetSentinel: !1, comma: !1, decoder: b.decode, delimiter: "&", depth: 5, ignoreQueryPrefix: !1, interpretNumericEntities: !1, parameterLimit: 1e3, parseArrays: !0, plainObjects: !1, strictNullHandling: !1 }, C = function (t) { return t.replace(/&#(\d+);/g, function (t, r) { return String.fromCharCode(parseInt(r, 10)) }) }, A = function (t, r) { return t && "string" == typeof t && r.comma && t.indexOf(",") > -1 ? t.split(",") : t }, D = function (t, r, n, e) { if (t) { var o = n.allowDots ? t.replace(/\.([^.[]+)/g, "[$1]") : t, i = /(\[[^[\]]*])/g, u = n.depth > 0 && /(\[[^[\]]*])/.exec(o), f = u ? o.slice(0, u.index) : o, a = []; if (f) { if (!n.plainObjects && k.call(Object.prototype, f) && !n.allowPrototypes) return; a.push(f) } for (var c = 0; n.depth > 0 && null !== (u = i.exec(o)) && c < n.depth;) { if (c += 1, !n.plainObjects && k.call(Object.prototype, u[1].slice(1, -1)) && !n.allowPrototypes) return; a.push(u[1]) } return u && a.push("[" + o.slice(u.index) + "]"), function (t, r, n, e) { for (var o = e ? r : A(r, n), i = t.length - 1; i >= 0; --i) { var u, f = t[i]; if ("[]" === f && n.parseArrays) u = [].concat(o); else { u = n.plainObjects ? Object.create(null) : {}; var a = "[" === f.charAt(0) && "]" === f.charAt(f.length - 1) ? f.slice(1, -1) : f, c = parseInt(a, 10); n.parseArrays || "" !== a ? !isNaN(c) && f !== a && String(c) === a && c >= 0 && n.parseArrays && c <= n.arrayLimit ? (u = [])[c] = o : "__proto__" !== a && (u[a] = o) : u = { 0: o } } o = u } return o }(a, r, n, e) } }, $ = function (t, r) { var n = function (t) { if (!t) return N; if (null != t.decoder && "function" != typeof t.decoder) throw new TypeError("Decoder has to be a function."); if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset) throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined"); return { allowDots: void 0 === t.allowDots ? N.allowDots : !!t.allowDots, allowPrototypes: "boolean" == typeof t.allowPrototypes ? t.allowPrototypes : N.allowPrototypes, arrayLimit: "number" == typeof t.arrayLimit ? t.arrayLimit : N.arrayLimit, charset: void 0 === t.charset ? N.charset : t.charset, charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : N.charsetSentinel, comma: "boolean" == typeof t.comma ? t.comma : N.comma, decoder: "function" == typeof t.decoder ? t.decoder : N.decoder, delimiter: "string" == typeof t.delimiter || b.isRegExp(t.delimiter) ? t.delimiter : N.delimiter, depth: "number" == typeof t.depth || !1 === t.depth ? +t.depth : N.depth, ignoreQueryPrefix: !0 === t.ignoreQueryPrefix, interpretNumericEntities: "boolean" == typeof t.interpretNumericEntities ? t.interpretNumericEntities : N.interpretNumericEntities, parameterLimit: "number" == typeof t.parameterLimit ? t.parameterLimit : N.parameterLimit, parseArrays: !1 !== t.parseArrays, plainObjects: "boolean" == typeof t.plainObjects ? t.plainObjects : N.plainObjects, strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : N.strictNullHandling } }(r); if ("" === t || null == t) return n.plainObjects ? Object.create(null) : {}; for (var e = "string" == typeof t ? function (t, r) { var n, e = {}, o = (r.ignoreQueryPrefix ? t.replace(/^\?/, "") : t).split(r.delimiter, Infinity === r.parameterLimit ? void 0 : r.parameterLimit), i = -1, u = r.charset; if (r.charsetSentinel) for (n = 0; n < o.length; ++n)0 === o[n].indexOf("utf8=") && ("utf8=%E2%9C%93" === o[n] ? u = "utf-8" : "utf8=%26%2310003%3B" === o[n] && (u = "iso-8859-1"), i = n, n = o.length); for (n = 0; n < o.length; ++n)if (n !== i) { var f, a, c = o[n], l = c.indexOf("]="), s = -1 === l ? c.indexOf("=") : l + 1; -1 === s ? (f = r.decoder(c, N.decoder, u, "key"), a = r.strictNullHandling ? null : "") : (f = r.decoder(c.slice(0, s), N.decoder, u, "key"), a = b.maybeMap(A(c.slice(s + 1), r), function (t) { return r.decoder(t, N.decoder, u, "value") })), a && r.interpretNumericEntities && "iso-8859-1" === u && (a = C(a)), c.indexOf("[]=") > -1 && (a = x(a) ? [a] : a), e[f] = k.call(e, f) ? b.combine(e[f], a) : a } return e }(t, n) : t, o = n.plainObjects ? Object.create(null) : {}, i = Object.keys(e), u = 0; u < i.length; ++u) { var f = i[u], a = D(f, e[f], n, "string" == typeof t); o = b.merge(o, a, n) } return b.compact(o) }, F =/*#__PURE__*/function () { function t(t, r, n) { var e, o; this.name = t, this.definition = r, this.bindings = null != (e = r.bindings) ? e : {}, this.wheres = null != (o = r.wheres) ? o : {}, this.config = n } var r = t.prototype; return r.matchesUrl = function (t) { var r = this; if (!this.definition.methods.includes("GET")) return !1; var n = this.template.replace(/(\/?){([^}?]*)(\??)}/g, function (t, n, e, o) { var i, u = "(?<" + e + ">" + ((null == (i = r.wheres[e]) ? void 0 : i.replace(/(^\^)|(\$$)/g, "")) || "[^/?]+") + ")"; return o ? "(" + n + u + ")?" : "" + n + u }).replace(/^\w+:\/\//, ""), e = t.replace(/^\w+:\/\//, "").split("?"), o = e[0], i = e[1], u = new RegExp("^" + n + "/?$").exec(decodeURI(o)); if (u) { for (var f in u.groups) u.groups[f] = "string" == typeof u.groups[f] ? decodeURIComponent(u.groups[f]) : u.groups[f]; return { params: u.groups, query: $(i) } } return !1 }, r.compile = function (t) { var r = this; return this.parameterSegments.length ? this.template.replace(/{([^}?]+)(\??)}/g, function (n, e, o) { var i, u; if (!o && [null, void 0].includes(t[e])) throw new Error("Ziggy error: '" + e + "' parameter is required for route '" + r.name + "'."); if (r.wheres[e] && !new RegExp("^" + (o ? "(" + r.wheres[e] + ")?" : r.wheres[e]) + "$").test(null != (u = t[e]) ? u : "")) throw new Error("Ziggy error: '" + e + "' parameter does not match required format '" + r.wheres[e] + "' for route '" + r.name + "'."); return encodeURI(null != (i = t[e]) ? i : "").replace(/%7C/g, "|").replace(/%25/g, "%").replace(/\$/g, "%24") }).replace(this.origin + "//", this.origin + "/").replace(/\/+$/, "") : this.template }, e(t, [{ key: "template", get: function () { var t = (this.origin + "/" + this.definition.uri).replace(/\/+$/, ""); return "" === t ? "/" : t } }, { key: "origin", get: function () { return this.config.absolute ? this.definition.domain ? "" + this.config.url.match(/^\w+:\/\//)[0] + this.definition.domain + (this.config.port ? ":" + this.config.port : "") : this.config.url : "" } }, { key: "parameterSegments", get: function () { var t, r; return null != (t = null == (r = this.template.match(/{[^}?]+\??}/g)) ? void 0 : r.map(function (t) { return { name: t.replace(/{|\??}/g, ""), required: !/\?}$/.test(t) } })) ? t : [] } }]), t }(), I =/*#__PURE__*/function (t) { var r, n; function i(r, n, e, i) { var u; if (void 0 === e && (e = !0), (u = t.call(this) || this).t = null != i ? i : "undefined" != typeof Ziggy ? Ziggy : null == globalThis ? void 0 : globalThis.Ziggy, u.t = o({}, u.t, { absolute: e }), r) { if (!u.t.routes[r]) throw new Error("Ziggy error: route '" + r + "' is not in the route list."); u.i = new F(r, u.t.routes[r], u.t), u.u = u.l(n) } return u } n = t, (r = i).prototype = Object.create(n.prototype), r.prototype.constructor = r, u(r, n); var f = i.prototype; return f.toString = function () { var t = this, r = Object.keys(this.u).filter(function (r) { return !t.i.parameterSegments.some(function (t) { return t.name === r }) }).filter(function (t) { return "_query" !== t }).reduce(function (r, n) { var e; return o({}, r, ((e = {})[n] = t.u[n], e)) }, {}); return this.i.compile(this.u) + function (t, r) { var n, e = t, o = function (t) { if (!t) return R; if (null != t.encoder && "function" != typeof t.encoder) throw new TypeError("Encoder has to be a function."); var r = t.charset || R.charset; if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset) throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined"); var n = s.default; if (void 0 !== t.format) { if (!h.call(s.formatters, t.format)) throw new TypeError("Unknown format option provided."); n = t.format } var e = s.formatters[n], o = R.filter; return ("function" == typeof t.filter || m(t.filter)) && (o = t.filter), { addQueryPrefix: "boolean" == typeof t.addQueryPrefix ? t.addQueryPrefix : R.addQueryPrefix, allowDots: void 0 === t.allowDots ? R.allowDots : !!t.allowDots, charset: r, charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : R.charsetSentinel, delimiter: void 0 === t.delimiter ? R.delimiter : t.delimiter, encode: "boolean" == typeof t.encode ? t.encode : R.encode, encoder: "function" == typeof t.encoder ? t.encoder : R.encoder, encodeValuesOnly: "boolean" == typeof t.encodeValuesOnly ? t.encodeValuesOnly : R.encodeValuesOnly, filter: o, format: n, formatter: e, serializeDate: "function" == typeof t.serializeDate ? t.serializeDate : R.serializeDate, skipNulls: "boolean" == typeof t.skipNulls ? t.skipNulls : R.skipNulls, sort: "function" == typeof t.sort ? t.sort : null, strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : R.strictNullHandling } }(r); "function" == typeof o.filter ? e = (0, o.filter)("", e) : m(o.filter) && (n = o.filter); var i = []; if ("object" != typeof e || null === e) return ""; var u = g[r && r.arrayFormat in g ? r.arrayFormat : r && "indices" in r ? r.indices ? "indices" : "repeat" : "indices"]; n || (n = Object.keys(e)), o.sort && n.sort(o.sort); for (var f = 0; f < n.length; ++f) { var a = n[f]; o.skipNulls && null === e[a] || O(i, T(e[a], a, u, o.strictNullHandling, o.skipNulls, o.encode ? o.encoder : null, o.filter, o.sort, o.allowDots, o.serializeDate, o.format, o.formatter, o.encodeValuesOnly, o.charset)) } var c = i.join(o.delimiter), l = !0 === o.addQueryPrefix ? "?" : ""; return o.charsetSentinel && (l += "iso-8859-1" === o.charset ? "utf8=%26%2310003%3B&" : "utf8=%E2%9C%93&"), c.length > 0 ? l + c : "" }(o({}, r, this.u._query), { addQueryPrefix: !0, arrayFormat: "indices", encodeValuesOnly: !0, skipNulls: !0, encoder: function (t, r) { return "boolean" == typeof t ? Number(t) : r(t) } }) }, f.v = function (t) { var r = this; t ? this.t.absolute && t.startsWith("/") && (t = this.p().host + t) : t = this.h(); var n = {}, e = Object.entries(this.t.routes).find(function (e) { return n = new F(e[0], e[1], r.t).matchesUrl(t) }) || [void 0, void 0]; return o({ name: e[0] }, n, { route: e[1] }) }, f.h = function () { var t = this.p(), r = t.pathname, n = t.search; return (this.t.absolute ? t.host + r : r.replace(this.t.url.replace(/^\w*:\/\/[^/]+/, ""), "").replace(/^\/+/, "/")) + n }, f.current = function (t, r) { var n = this.v(), e = n.name, i = n.params, u = n.query, f = n.route; if (!t) return e; var a = new RegExp("^" + t.replace(/\./g, "\\.").replace(/\*/g, ".*") + "$").test(e); if ([null, void 0].includes(r) || !a) return a; var c = new F(e, f, this.t); r = this.l(r, c); var l = o({}, i, u); return !(!Object.values(r).every(function (t) { return !t }) || Object.values(l).some(function (t) { return void 0 !== t })) || function t(r, n) { return Object.entries(r).every(function (r) { var e = r[0], o = r[1]; return Array.isArray(o) && Array.isArray(n[e]) ? o.every(function (t) { return n[e].includes(t) }) : "object" == typeof o && "object" == typeof n[e] && null !== o && null !== n[e] ? t(o, n[e]) : n[e] == o }) }(r, l) }, f.p = function () { var t, r, n, e, o, i, u = "undefined" != typeof window ? window.location : {}, f = u.host, a = u.pathname, c = u.search; return { host: null != (t = null == (r = this.t.location) ? void 0 : r.host) ? t : void 0 === f ? "" : f, pathname: null != (n = null == (e = this.t.location) ? void 0 : e.pathname) ? n : void 0 === a ? "" : a, search: null != (o = null == (i = this.t.location) ? void 0 : i.search) ? o : void 0 === c ? "" : c } }, f.has = function (t) { return Object.keys(this.t.routes).includes(t) }, f.l = function (t, r) { var n = this; void 0 === t && (t = {}), void 0 === r && (r = this.i), null != t || (t = {}), t = ["string", "number"].includes(typeof t) ? [t] : t; var e = r.parameterSegments.filter(function (t) { return !n.t.defaults[t.name] }); if (Array.isArray(t)) t = t.reduce(function (t, r, n) { var i, u; return o({}, t, e[n] ? ((i = {})[e[n].name] = r, i) : "object" == typeof r ? r : ((u = {})[r] = "", u)) }, {}); else if (1 === e.length && !t[e[0].name] && (t.hasOwnProperty(Object.values(r.bindings)[0]) || t.hasOwnProperty("id"))) { var i; (i = {})[e[0].name] = t, t = i } return o({}, this.m(r), this.j(t, r)) }, f.m = function (t) { var r = this; return t.parameterSegments.filter(function (t) { return r.t.defaults[t.name] }).reduce(function (t, n, e) { var i, u = n.name; return o({}, t, ((i = {})[u] = r.t.defaults[u], i)) }, {}) }, f.j = function (t, r) { var n = r.bindings, e = r.parameterSegments; return Object.entries(t).reduce(function (t, r) { var i, u, f = r[0], a = r[1]; if (!a || "object" != typeof a || Array.isArray(a) || !e.some(function (t) { return t.name === f })) return o({}, t, ((u = {})[f] = a, u)); if (!a.hasOwnProperty(n[f])) { if (!a.hasOwnProperty("id")) throw new Error("Ziggy error: object passed as '" + f + "' parameter is missing route model binding key '" + n[f] + "'."); n[f] = "id" } return o({}, t, ((i = {})[f] = a[n[f]], i)) }, {}) }, f.valueOf = function () { return this.toString() }, e(i, [{ key: "params", get: function () { var t = this.v(); return o({}, t.params, t.query) } }]), i }(/*#__PURE__*/f(String)); return function (t, r, n, e) { var o = new I(t, r, n, e); return t ? o.toString() : o } });
        </script>
        <div class="modal fade modal-blur" id="widgets-management-modal" data-bb-toggle="widgets-management-modal"
            tabindex="-1" role="dialog" aria-hidden="true" data-select2-dropdown-parent="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-has-form " role="document">
                <div class="modal-content">
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="iHR3DtO4TmovCSJq1sOJF4heeR8Bgs3qjUl5yNwn"
                            autocomplete="off">
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
                                                <input class="form-check-input" name="widgets[widget_total_1]"
                                                    type="checkbox" value="1" id="widgets[widget_total_1]"
                                                    data-bb-toggle="widgets-management-item" checked />

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
                                                <input class="form-check-input" name="widgets[widget_total_2]"
                                                    type="checkbox" value="1" id="widgets[widget_total_2]"
                                                    data-bb-toggle="widgets-management-item" checked />

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
                                                <input class="form-check-input" name="widgets[widget_total_3]"
                                                    type="checkbox" value="1" id="widgets[widget_total_3]"
                                                    data-bb-toggle="widgets-management-item" checked />

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
                                                <input class="form-check-input" name="widgets[widget_total_4]"
                                                    type="checkbox" value="1" id="widgets[widget_total_4]"
                                                    data-bb-toggle="widgets-management-item" checked />

                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_general]"
                                                class="w-full py-3 fw-bold d-block">
                                                Site Analytics
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_general]" type="hidden"
                                                    value="0" />
                                                <input class="form-check-input" name="widgets[widget_analytics_general]"
                                                    type="checkbox" value="1" id="widgets[widget_analytics_general]"
                                                    data-bb-toggle="widgets-management-item" checked />

                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_page]"
                                                class="w-full py-3 fw-bold d-block">
                                                Top Most Visit Pages
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_page]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_analytics_page]"
                                                    type="checkbox" value="1" id="widgets[widget_analytics_page]"
                                                    data-bb-toggle="widgets-management-item" checked />

                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_browser]"
                                                class="w-full py-3 fw-bold d-block">
                                                Top Browsers
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_browser]" type="hidden"
                                                    value="0" />
                                                <input class="form-check-input" name="widgets[widget_analytics_browser]"
                                                    type="checkbox" value="1" id="widgets[widget_analytics_browser]"
                                                    data-bb-toggle="widgets-management-item" checked />

                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_analytics_referrer]"
                                                class="w-full py-3 fw-bold d-block">
                                                Top Referrers
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_analytics_referrer]" type="hidden"
                                                    value="0" />
                                                <input class="form-check-input"
                                                    name="widgets[widget_analytics_referrer]" type="checkbox" value="1"
                                                    id="widgets[widget_analytics_referrer]"
                                                    data-bb-toggle="widgets-management-item" checked />

                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="widgets[widget_posts_recent]"
                                                class="w-full py-3 fw-bold d-block">
                                                Recent Posts
                                            </label>
                                            <label class="form-check form-switch form-check-single ">
                                                <input name="widgets[widget_posts_recent]" type="hidden" value="0" />
                                                <input class="form-check-input" name="widgets[widget_posts_recent]"
                                                    type="checkbox" value="1" id="widgets[widget_posts_recent]"
                                                    data-bb-toggle="widgets-management-item" checked />

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
                                                <input class="form-check-input" name="widgets[widget_audit_logs]"
                                                    type="checkbox" value="1" id="widgets[widget_audit_logs]"
                                                    data-bb-toggle="widgets-management-item" checked />

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



    <div class="offcanvas offcanvas-end" tabindex="-1" id="notification-sidebar"
        aria-labelledby="notification-sidebar-label" data-url="https://hously.archielite.com/admin/notifications"
        data-count-url="https://hously.archielite.com/admin/notifications/count-unread">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        <div class="notification-content"></div>
    </div>

    <script src="js/notification.js"></script>
@endsection