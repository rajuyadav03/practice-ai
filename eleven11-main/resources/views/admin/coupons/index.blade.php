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
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">Coupons</h1>
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


                <div class="card">
                    <div class="page page-center" style="min-height: calc(100vh - 25rem)">
                        <div class="container container-tight py-4">
                            <div class="empty">
                                <div class="empty-img">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M17 10l-2 -6" />
                                        <path d="M7 10l2 -6" />
                                        <path
                                            d="M12.5 20h-5.256a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304l-.394 2.248" />
                                        <path d="M13.856 13.254a2 2 0 1 0 -1.856 2.746" />
                                        <path d="M16 21l5 -5" />
                                        <path d="M21 21v.01" />
                                        <path d="M16 16v.01" />
                                    </svg>
                                </div>
                                <p class="empty-title">Manage coupons code</p>
                                <p class="empty-subtitle text-secondary">
                                    Create and manage coupons code for your customers.
                                </p>
                                <div class="empty-action">
                                    <a class="btn btn-primary" type="button"
                                        href="/admin/coupons/create">

                                        Create coupon

                                    </a>
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
                            Copyright 2024 © Archi Elite. Version <span class="fw-medium">1.10.5</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
