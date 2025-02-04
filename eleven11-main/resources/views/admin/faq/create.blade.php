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
                                        <a href="/admin/faq">FAQs</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">New FAQ</h1>
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


                <form method="POST" action="#" accept-charset="UTF-8"
                    id="botble-faq-forms-faq-form" class="js-base-form dirty-check">
                    <input name="_token" type="hidden" value="AklV05H1ZXtUmMPw1Sc7uIMheuMKVtPeL05WH6Of">
                    <div class="row">
                        <div class="gap-3 col-md-9">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="mb-3 position-relative">
                                            <label for="category_id" class="form-label required">Category</label>
                                            <select class="form-control form-select" required="required" id="category_id"
                                                name="category_id">
                                                <option value="" selected="selected">Select a category</option>
                                                <option value="1">General</option>
                                                <option value="2">Buying</option>
                                                <option value="3">Payment</option>
                                                <option value="4">Support</option>
                                            </select>

                                        </div>


                                        <div class="mb-3 position-relative">

                                            <label for="question" class="form-label required">Question</label>


                                            <textarea class="form-control" data-counter="1000" rows="4" required="required" name="question" cols="50"
                                                id="question"></textarea>




                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="answer" class="form-label required">Answer</label>


                                            <div class="mb-2 btn-list">
                                                <button class="btn   show-hide-editor-btn" type="button"
                                                    data-result="answer">

                                                    Show/Hide Editor

                                                </button>

                                                <button class="btn   btn_gallery" type="button" data-result="answer"
                                                    data-multiple="true" data-action="media-insert-ckeditor">
                                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M15 8h.01" />
                                                        <path
                                                            d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                                                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                                    </svg>
                                                    Add media

                                                </button>


                                            </div>



                                            <textarea class="form-control form-control editor-ckeditor ays-ignore" data-counter="100000" rows="4"
                                                required="required" id="answer" name="answer" cols="50"></textarea>




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



                            <div class="card meta-boxes">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <label for="status" class="form-label required">Status</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <select class="form-control form-select" required="required" id="status"
                                        name="status">
                                        <option value="published">Published</option>
                                        <option value="draft">Draft</option>
                                        <option value="pending">Pending</option>
                                    </select>






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
