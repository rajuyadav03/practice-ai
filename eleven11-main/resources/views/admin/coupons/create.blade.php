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
                                    <li class="breadcrumb-item">
                                        <a href="/admin/coupons">Coupons</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">New Coupons</h1>
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


                <form method="POST" action="https://hously.archielite.com/admin/real-estate/coupons/create"
                    accept-charset="UTF-8" class="coupon-form"><input name="_token" type="hidden"
                        value="AklV05H1ZXtUmMPw1Sc7uIMheuMKVtPeL05WH6Of">
                    <input type="hidden" name="_token" value="AklV05H1ZXtUmMPw1Sc7uIMheuMKVtPeL05WH6Of"
                        autocomplete="off">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3 position-relative">
                                        <label class="form-label" for="code">
                                            Coupon code


                                        </label>

                                        <div class="input-group">


                                            <input class="form-control" type="text" name="code" id="code"
                                                placeholder="Enter coupon code" />


                                            <button class="btn" type="button"
                                                data-url="https://hously.archielite.com/admin/real-estate/coupons/generate-coupon"
                                                data-bb-toggle="coupon-generate-code">

                                                Generate code

                                            </button>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="type">
                                                    Type


                                                </label>



                                                <select class="form-select" name="type" id="type">
                                                    <option value="percentage">Percentage</option>
                                                    <option value="fixed">Fixed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="value">
                                                    Value


                                                </label>

                                                <div class="input-group input-group-flat">


                                                    <input class="form-control" type="number" name="value" id="value"
                                                        placeholder="Enter coupon value" />


                                                    <span class="input-group-text icon-type">%</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 position-relative">
                                        <label class="form-check">
                                            <input type="checkbox" name="is_unlimited" class="form-check-input"
                                                value="" checked>

                                            <span class="form-check-label">
                                                Unlimited coupon?
                                            </span>

                                        </label>
                                    </div>

                                    <div class="mb-3 position-relative d-none">
                                        <input class="form-control" type="number" name="quantity" id="quantity"
                                            placeholder="Enter number of coupon" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="gap-1 d-flex">
                                        <div class="mb-3 position-relative date-time-group">
                                            <label class="form-label">
                                                Expires date


                                            </label>
                                            <div class="input-icon datepicker">
                                                <input type="text" placeholder="Y-m-d" data-date-format="Y-m-d"
                                                    name="expires_date" class="form-control" data-input
                                                    value="2024-07-26" />
                                                <span class="input-icon-addon" type="button" title="toggle" data-toggle>
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                                        <path d="M16 3v4" />
                                                        <path d="M8 3v4" />
                                                        <path d="M4 11h16" />
                                                        <path d="M11 15h1" />
                                                        <path d="M12 15v3" />
                                                    </svg> </span>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative date-time-group">
                                            <label class="form-label">
                                                Expires time


                                            </label>
                                            <div class="input-icon">
                                                <input type="text" placeholder="hh:mm" name="expires_time"
                                                    class="form-control time-picker timepicker timepicker-24"
                                                    value="13:46" />
                                                <span class="input-icon-addon" type="button" title="toggle" data-toggle>
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                        <path d="M12 7v5l3 3" />
                                                    </svg> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="form-check">
                                        <input type="checkbox" name="never_expired" class="form-check-input"
                                            value="1" checked>

                                        <span class="form-check-label">
                                            Never expired?
                                        </span>

                                    </label>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary" type="submit">

                                        Save

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


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
