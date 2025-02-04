<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="storage/general/favicon.png" rel="shortcut icon">

    <meta name="csrf-token" content="ODurMtAQEFEYzA0hp60Kt9NHEuuVSbSDuCcwmABY">

    <title>Hously</title>
    <meta name="description"
        content="A great platform to buy, sell and rent your properties without any agent or commissions.">
    <meta property="og:site_name" content="Hously">
    <meta property="og:type" content="website">

    <style>
        [v-cloak],
        [x-cloak] {
            display: none;
        }
    </style>

    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

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

    <link media="all" type="text/css" rel="stylesheet" href="css/fontawesome.min.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/select2/css/select2.min.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/css/libraries/select2.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/toastr/toastr.min.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/flatpickr/flatpickr.min.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/spectrum/spectrum.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/css/core.css?v=1.9.5">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/language/css/language.css?v=1.9.5">
    <script src="vendor/core/core/base/libraries/jquery.min.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/js/app.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/libraries/vue.global.min.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/js/vue-app.js?v=1.9.5"></script>



    <link href="vendor/core/plugins/real-estate/css/dashboard/style.css" rel="stylesheet">





</head>

<body>
    <header class="header--mobile">
        <div class="header__left">
            <button class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="header__center">
            <a class="ps-logo" href="/">
                <img src="storage/general/logo-light.png" alt="Hously">
            </a>
        </div>
        <div class="header__right">
            <a href="/account/logout" title="Logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M9 12h12l-3 -3" />
                    <path d="M18 15l3 -3" />
                </svg> </a>

            <form id="logout-form" style="display: none;" action="account/logout"
                method="POST">
                <input type="hidden" name="_token" value="ODurMtAQEFEYzA0hp60Kt9NHEuuVSbSDuCcwmABY" autocomplete="off">
            </form>
        </div>
    </header>
    <aside class="ps-drawer--mobile">
        <div class="ps-drawer__header py-3">
            <h4 class="fs-3 mb-0">Menu</h4>
            <button class="ps-drawer__close">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg> </button>
        </div>
        <div class="ps-drawer__content">
            <ul class="menu">
                <li>
                    <a href="account/dashboard" class="active">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg> Dashboard
                    </a>
                </li>
                <li>
                    <a href="account/properties" class="">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M22 17v-3h-20" />
                            <path d="M2 8v9" />
                            <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
                        </svg> Properties
                    </a>
                </li>
                <li>
                    <a href="account/packages" class="">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                            <path d="M3 10l18 0" />
                            <path d="M7 15l.01 0" />
                            <path d="M11 15l2 0" />
                        </svg> Buy credits
                    </a>
                </li>
                <li>
                    <a href="account/consults" class="">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M20.136 11.136l-8.136 -8.136l-9 9h2v7a2 2 0 0 0 2 2h7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.467 0 .896 .16 1.236 .428" />
                            <path d="M19 22v.01" />
                            <path d="M19 19a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                        </svg> Consults
                    </a>
                </li>
                <li>
                    <a href="account/invoices" class="">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                        </svg> Invoices
                    </a>
                </li>
                <li>
                    <a href="account/settings" class="">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg> Settings
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="ps-site-overlay"></div>

    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">
                        <div class="ps-block__left">
                            <img src="storage/accounts/8.jpg" alt="Loren Gutkowski"
                                class="avatar avatar-lg" />
                        </div>
                        @auth
                        <div class="ps-block__right">
                            <p>{{ auth()->user()->name }}</p>
                            <small>Joined on Feb 19, 2024</small>
                        </div>
                        @endauth
                        <div class="ps-block__action">
                            <a href="" title="Logout"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                    <path d="M9 12h12l-3 -3" />
                                    <path d="M18 15l3 -3" />
                                </svg> </a>
                        </div>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li>
                                <a href="account/dashboard" class="active">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="account/properties" class="">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M22 17v-3h-20" />
                                        <path d="M2 8v9" />
                                        <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
                                    </svg> Properties
                                </a>
                            </li>

                            <li>
                                <a href="account/settings" class="">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    </svg> Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright">
                            <a href="https://hously.archielite.com" title="Hously">
                                <img src="storage/general/logo-dark.png" alt="Hously"
                                    height="40">
                            </a>

                            <p>© 2024 Eleven11.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-main__wrapper" id="vendor-dashboard">
            <header class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fs-1">@auth {{ auth()->user()->name }} @endauth</h3>

                <div class="d-flex align-items-center gap-4">
                    <div class="dropdown ">
                        <a class="d-flex align-items-center gap-2 dropdown-toggle text-muted text-decoration-none"
                            href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="vendor/core/core/base/img/flags/us.svg"
                                title="English" class="flag" style="height: 16px" loading="lazy" alt="English flag">
                            English
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex gap-2 align-items-center"
                                href="vi/account/dashboard">

                                <img src="vendor/core/core/base/img/flags/vn.svg"
                                    title="Tiếng Việt" class="flag" style="height: 16px" loading="lazy"
                                    alt="Tiếng Việt flag">
                                Tiếng Việt

                            </a>

                            <a class="dropdown-item d-flex gap-2 align-items-center"
                                href="ar/account/dashboard">

                                <img src="vendor/core/core/base/img/flags/sa.svg"
                                    title="Arabic" class="flag" style="height: 16px" loading="lazy" alt="Arabic flag">
                                Arabic

                            </a>
                        </div>
                    </div>



                    <a href="https://hously.archielite.com" target="_blank" class="text-uppercase">
                        Go to homepage
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg> </a>
                </div>
            </header>

            <div id="app">
                <div class="mb-3 row row-cards">
                    <div class="col-12 col-md-6 col-lg-4 dashboard-widget-item">
                        <a
                            class="overflow-hidden text-white rounded d-block position-relative text-decoration-none bg-primary">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="px-4 py-3 details d-flex flex-column justify-content-between">
                                    <div class="desc fw-medium">Approved properties</div>
                                    <div class="number fw-bolder">
                                        2
                                    </div>
                                </div>
                                <div class="pb-5 visual ps-1 position-absolute end-0">
                                    <svg class="icon me-n2" style="opacity: 0.1;" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                    <svg class="icon me-n2" style="opacity: 0.1;" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                    <svg class="icon me-n2" style="opacity: 0.1;" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path
                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card"><div class="card-header"><h4 class="card-title"> Activity Logs </h4></div><div class="empty"><div class="empty-icon"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7"></path><path d="M10 10l.01 0"></path><path d="M14 10l.01 0"></path><path d="M10 14a3.5 3.5 0 0 0 4 0"></path></svg></div><p class="empty-title"> No Activities! </p><p class="empty-subtitle text-muted"> You have no activity logs yet </p></div><!----><!----></div>

            </div>
        </div>
    </main>

    <footer>
        <p class="inline-block">Currencies:
            <a href="currency/switch/USD" class="active"><span>USD</span></a>
            -
            <a href="currency/switch/EUR"><span>EUR</span></a>
            -
            <a href="currency/switch/VND"><span>VND</span></a>
        </p>
    </footer>

    <script src="vendor/core/plugins/real-estate/js/app.js"></script>
    <script src="vendor/core/core/base/js/core-ui.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/libraries/excanvas.min.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/libraries/ie8.fix.min.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/modernizr/modernizr.min.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/select2/js/select2.min.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/flatpickr/flatpickr.min.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/jquery-cookie/jquery.cookie.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/js/core.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/libraries/toastr/toastr.min.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/jquery-waypoints/jquery.waypoints.min.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/libraries/spectrum/spectrum.js?v=1.9.5"></script>
    <script
        src="vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js?v=1.9.5"></script>
    <script src="vendor/core/core/base/libraries/fslightbox.js?v=1.9.5"></script>
    <script src="vendor/core/plugins/language/js/language-global.js?v=1.9.5"></script>
    <script src="vendor/core/plugins/real-estate/js/components.js?v=1.9.5"></script>



</body>

</html>