@extends('users.website.layout.app')
@section('content')
<div class="ps-main__wrapper" id="vendor-dashboard">
    <header class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fs-1">{{Auth::user()->username}}</h3>
    </header>
    <div id="app">
        <div class="mb-3 row row-cards">
            <div class="col-12 col-md-6 col-lg-4 dashboard-widget-item">
                <a class="overflow-hidden text-white rounded d-block position-relative text-decoration-none bg-primary">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="px-4 py-3 details d-flex flex-column justify-content-between">
                            <div class="desc fw-medium">Approved properties</div>
                            <div class="number fw-bolder">
                                2
                            </div>
                        </div>
                        <div class="pb-5 visual ps-1 position-absolute end-0">
                            <svg class="icon me-n2" style="opacity: 0.1;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 dashboard-widget-item">
                <a class="overflow-hidden text-white rounded d-block position-relative text-decoration-none bg-danger">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="px-4 py-3 details d-flex flex-column justify-content-between">
                            <div class="desc fw-medium">Pending approve properties</div>
                            <div class="number fw-bolder">
                                0
                            </div>
                        </div>
                        <div class="pb-5 visual ps-1 position-absolute end-0">
                            <svg class="icon me-n2" style="opacity: 0.1;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 12l-3 2" />
                                <path d="M12 7v5" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 dashboard-widget-item">
                <a class="overflow-hidden text-white rounded d-block position-relative text-decoration-none bg-secondary">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="px-4 py-3 details d-flex flex-column justify-content-between">
                            <div class="desc fw-medium">Rejected properties</div>
                            <div class="number fw-bolder">
                                0
                            </div>
                        </div>
                        <div class="pb-5 visual ps-1 position-absolute end-0">
                            <svg class="icon me-n2" style="opacity: 0.1;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Activity Logs </h4>
            </div>
            <div class="empty">
                <div class="empty-icon"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7">
                        </path>
                        <path d="M10 10l.01 0"></path>
                        <path d="M14 10l.01 0"></path>
                        <path d="M10 14a3.5 3.5 0 0 0 4 0"></path>
                    </svg></div>
                <p class="empty-title"> No Activities! </p>
                <p class="empty-subtitle text-muted"> You have no activity logs yet </p>
            </div>
        </div>
    </div>
</div>
@endsection