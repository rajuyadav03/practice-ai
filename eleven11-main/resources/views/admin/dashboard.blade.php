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
                                <li class="breadcrumb-item active" aria-current="page">
                                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Dashboard</h1>
                                </li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <button class="btn btn-outline-primary  manage-widget" type="button" data-bs-toggle="modal" data-bs-target="#widgets-management-modal">
                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
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
                    <v-check-for-updates check-update-url="admin/system/check-update" v-slot="{ hasNewVersion, message }" v-cloak>
                        <div role="alert" class="alert alert-warning" v-if="hasNewVersion">
                            <div class="d-flex">
                                <div>
                                    <svg class="icon alert-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        <path d="M12 8v4" />
                                        <path d="M12 16h.01" />
                                    </svg>
                                </div>
                                <div class="w-100">


                                    please go to <a href="#" class="text-warning fw-bold">System Updater</a> to upgrade to the
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
                                <svg class="icon alert-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 8v4" />
                                    <path d="M12 16h.01" />
                                </svg>
                            </div>
                            <div class="w-100">


                                Hi guest, if you see demo site is destroyed, please help me <a href="admin/system/backups">go here</a>
                                and restore demo site to the latest revision! Thank you so much!

                            </div>
                        </div>



                    </div>

                </div>

                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                            <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none" href="admin/real-estate/properties?filter_table_id=botble-real-estate-tables-property-table&amp;class=Botble%5CRealEstate%5CTables%5CPropertyTable&amp;filter_columns%5B0%5D=status&amp;filter_operators%5B0%5D=%3D&amp;filter_values%5B0%5D=active" style="background-color: #8e44ad">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                        <div class="desc fw-medium">Active properties</div>
                                        <div class="number fw-bolder">
                                            <span data-counter="counterup" data-value="21">0</span>
                                        </div>
                                    </div>
                                    <div class="visual ps-1 position-absolute end-0">
                                        <svg class="icon me-n2" style="opacity: .1; --bb-icon-size: 80px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                            <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                            <path d="M12 12l0 .01" />
                                            <path d="M3 13a20 20 0 0 0 18 0" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                            <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none" href="admin/real-estate/properties?filter_table_id=botble-real-estate-tables-property-table&amp;class=Botble%5CRealEstate%5CTables%5CPropertyTable&amp;filter_columns%5B0%5D=moderation_status&amp;filter_operators%5B0%5D=%3D&amp;filter_values%5B0%5D=pending" style="background-color: #32c5d2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                        <div class="desc fw-medium">Pending properties</div>
                                        <div class="number fw-bolder">
                                            <span data-counter="counterup" data-value="0">0</span>
                                        </div>
                                    </div>
                                    <div class="visual ps-1 position-absolute end-0">
                                        <svg class="icon me-n2" style="opacity: .1; --bb-icon-size: 80px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                            <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                            <path d="M12 12l0 .01" />
                                            <path d="M3 13a20 20 0 0 0 18 0" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                            <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none" href="admin/real-estate/properties?filter_table_id=botble-real-estate-tables-property-table&amp;class=Botble%5CRealEstate%5CTables%5CPropertyTable&amp;filter_columns%5B0%5D=status&amp;filter_operators%5B0%5D=%3D&amp;filter_values%5B0%5D=expired" style="background-color: #e7505a">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                        <div class="desc fw-medium">Expired properties</div>
                                        <div class="number fw-bolder">
                                            <span data-counter="counterup" data-value="0">0</span>
                                        </div>
                                    </div>
                                    <div class="visual ps-1 position-absolute end-0">
                                        <svg class="icon me-n2" style="opacity: .1; --bb-icon-size: 80px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                            <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                            <path d="M12 12l0 .01" />
                                            <path d="M3 13a20 20 0 0 0 18 0" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                            <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none" href="admin/real-estate/accounts" style="background-color: #3598dc">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                        <div class="desc fw-medium">Agents</div>
                                        <div class="number fw-bolder">
                                            <span data-counter="counterup" data-value="21">0</span>
                                        </div>
                                    </div>
                                    <div class="visual ps-1 position-absolute end-0">
                                        <i class="fas fa-users me-n2 me-n2" style="opacity: .1; --bb-icon-size: 80px;"></i>
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
                <div id="list_widgets" class="row row-cards" data-bb-toggle="widgets-list" data-url="admin/widgets/order">
                    <div class="widget-item col-12 d-flex " id="widget_analytics_general" data-url="admin/analytics/general">
                        <div class="card card-sm flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Site Analytics
                                </h4>

                                <div class="card-actions btn-actions">
                                    <div class="dropdown d-flex align-items-center me-2 predefined_range">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Today
                                        </a>

                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-key="today" data-label="Today">

                                                Today

                                            </button>
                                            <button class="dropdown-item" data-key="yesterday" data-label="Yesterday">

                                                Yesterday

                                            </button>
                                            <button class="dropdown-item" data-key="this_week" data-label="This Week">

                                                This Week

                                            </button>
                                            <button class="dropdown-item" data-key="last_7_days" data-label="Last 7 Days">

                                                Last 7 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_month" data-label="This Month">

                                                This Month

                                            </button>
                                            <button class="dropdown-item" data-key="last_30_days" data-label="Last 30 Days">

                                                Last 30 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_year" data-label="This Year">

                                                This Year

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-between h-100 widget-content  " style="min-height: 10rem;"></div>
                        </div>
                    </div>

                    <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_analytics_page" data-url="admin/analytics/page">
                        <div class="card card-sm flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Top Most Visit Pages
                                </h4>

                                <div class="card-actions btn-actions">
                                    <div class="dropdown d-flex align-items-center me-2 predefined_range">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Today
                                        </a>

                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-key="today" data-label="Today">

                                                Today

                                            </button>
                                            <button class="dropdown-item" data-key="yesterday" data-label="Yesterday">

                                                Yesterday

                                            </button>
                                            <button class="dropdown-item" data-key="this_week" data-label="This Week">

                                                This Week

                                            </button>
                                            <button class="dropdown-item" data-key="last_7_days" data-label="Last 7 Days">

                                                Last 7 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_month" data-label="This Month">

                                                This Month

                                            </button>
                                            <button class="dropdown-item" data-key="last_30_days" data-label="Last 30 Days">

                                                Last 30 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_year" data-label="This Year">

                                                This Year

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-between h-100 widget-content  " style="min-height: 10rem;"></div>
                        </div>
                    </div>

                    <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_analytics_browser" data-url="admin/analytics/browser">
                        <div class="card card-sm flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Top Browsers
                                </h4>

                                <div class="card-actions btn-actions">
                                    <div class="dropdown d-flex align-items-center me-2 predefined_range">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Today
                                        </a>

                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-key="today" data-label="Today">

                                                Today

                                            </button>
                                            <button class="dropdown-item" data-key="yesterday" data-label="Yesterday">

                                                Yesterday

                                            </button>
                                            <button class="dropdown-item" data-key="this_week" data-label="This Week">

                                                This Week

                                            </button>
                                            <button class="dropdown-item" data-key="last_7_days" data-label="Last 7 Days">

                                                Last 7 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_month" data-label="This Month">

                                                This Month

                                            </button>
                                            <button class="dropdown-item" data-key="last_30_days" data-label="Last 30 Days">

                                                Last 30 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_year" data-label="This Year">

                                                This Year

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-between h-100 widget-content  " style="min-height: 10rem;"></div>
                        </div>
                    </div>

                    <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_analytics_referrer" data-url="admin/analytics/referrer">
                        <div class="card card-sm flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Top Referrers
                                </h4>

                                <div class="card-actions btn-actions">
                                    <div class="dropdown d-flex align-items-center me-2 predefined_range">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Today
                                        </a>

                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-key="today" data-label="Today">

                                                Today

                                            </button>
                                            <button class="dropdown-item" data-key="yesterday" data-label="Yesterday">

                                                Yesterday

                                            </button>
                                            <button class="dropdown-item" data-key="this_week" data-label="This Week">

                                                This Week

                                            </button>
                                            <button class="dropdown-item" data-key="last_7_days" data-label="Last 7 Days">

                                                Last 7 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_month" data-label="This Month">

                                                This Month

                                            </button>
                                            <button class="dropdown-item" data-key="last_30_days" data-label="Last 30 Days">

                                                Last 30 Days

                                            </button>
                                            <button class="dropdown-item" data-key="this_year" data-label="This Year">

                                                This Year

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-between h-100 widget-content  " style="min-height: 10rem;"></div>
                        </div>
                    </div>

                    <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_posts_recent" data-url="admin/blog/posts/widgets/recent-posts">
                        <div class="card card-sm flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Recent Posts
                                </h4>

                                <div class="card-actions btn-actions"></div>
                            </div>
                            <div class="d-flex flex-column justify-content-between h-100 widget-content  " style="min-height: 10rem;"></div>
                        </div>
                    </div>

                    <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_audit_logs" data-url="admin/audit-logs/widgets/activities">
                        <div class="card card-sm flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Activities Logs
                                </h4>

                                <div class="card-actions btn-actions"></div>
                            </div>
                            <div class="d-flex flex-column justify-content-between h-100 widget-content  " style="min-height: 10rem;"></div>
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
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection