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
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">Real Estate</h1>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a
                                            href="/admin/feature">Features</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">New feature</h1>
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


                <form method="POST" action="https://hously.archielite.com/admin/real-estate/property-features/create"
                    accept-charset="UTF-8" id="botble-real-estate-forms-feature-form" class="js-base-form dirty-check">
                    <input name="_token" type="hidden" value="9m0DDGw5HxXyFAiZ2gQoeXBcA1gruB8Omtra8krd">

                    {{-- <div role="alert" class="alert alert-info">
                        <div class="d-flex">
                            <div>
                                <svg class="icon alert-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 9h.01" />
                                    <path d="M11 12h1v4h1" />
                                </svg>
                            </div>
                            <div class="w-100">


                                You are editing "<strong class="current_language_text">English</strong>" version

                            </div>
                        </div>



                    </div> --}}

                    <div class="row">
                        <div class="gap-3 col-md-9">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="form-body">




                                        <div class="mb-3 position-relative">

                                            <label for="name" class="form-label required">Name</label>


                                            <input class="form-control" data-counter="250" placeholder="Name"
                                                required="required" name="name" type="text" id="name">




                                        </div>





                                        <div class="mb-3 position-relative">

                                            <label for="icon" class="form-label">Icon</label>


                                            <select name="icon" data-bb-core-icon
                                                data-url="https://hously.archielite.com/admin/core-icons"
                                                data-placeholder="Select an option" class="form-control">
                                            </select>




                                        </div>




                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-3 gap-3 d-flex flex-column-reverse flex-md-column mb-md-0 mb-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Publish
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn btn-primary" type="submit" value="apply" name="submitter">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M14 4l0 4l-6 0l0 -4" />
                                            </svg>
                                            Save

                                        </button>

                                        <button class="btn" type="submit" name="submitter" value="save">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 18v3h16v-14l-8 -4l-8 4v3" />
                                                <path d="M4 14h9" />
                                                <path d="M10 11l3 3l-3 3" />
                                            </svg>
                                            Save &amp; Exit

                                        </button>


                                    </div>
                                </div>
                            </div>

                            <div data-bb-waypoint data-bb-target="#form-actions"></div>

                            <header class="top-0 w-100 position-fixed end-0 z-1000 vertical-wrapper" id="form-actions"
                                style="display: none;">
                                <div class="navbar">
                                    <div class="container-xl">
                                        <div class="row g-2 align-items-center w-100">
                                            <div class="col">
                                                <div class="page-pretitle">
                                                    <nav aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                        </ol>
                                                    </nav>

                                                </div>
                                            </div>
                                            <div class="col-auto ms-auto d-print-none">
                                                <div class="btn-list">
                                                    <button class="btn btn-primary" type="submit" value="apply"
                                                        name="submitter">
                                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                                        </svg>
                                                        Save

                                                    </button>

                                                    <button class="btn" type="submit" name="submitter"
                                                        value="save">
                                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M4 18v3h16v-14l-8 -4l-8 4v3" />
                                                            <path d="M4 14h9" />
                                                            <path d="M10 11l3 3l-3 3" />
                                                        </svg>
                                                        Save &amp; Exit

                                                    </button>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>




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
                        <div class="order-1 order-lg-2">
                            Page loaded in 1.66 seconds
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    </div>
@endsection
