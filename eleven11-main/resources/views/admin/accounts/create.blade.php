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
                                        <a href="/admin/accounts">Accounts</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">New account</h1>
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


                <form method="POST" action="#"
                    accept-charset="UTF-8" id="botble-real-estate-forms-account-form" class="js-base-form dirty-check">
                 @csrf


                    <div class="row">
                        <div class="gap-3 col-md-9">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="mb-3 position-relative">

                                            <label for="first_name" class="form-label required">First
                                                Name</label>

                                            <input class="form-control" placeholder="First Name" data-counter="120"
                                                required="required" name="first_name" type="text" id="first_name">



                                        </div>





                                        <input type="hidden" name="model" value="Botble\RealEstate\Models\Account">

                                        <div class="mb-3 ">
                                            <div class="slug-field-wrapper" data-field-name="first_name">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label required" for="slug">
                                                        Permalink


                                                    </label>

                                                    <div class="input-group input-group-flat">

                                                        <span class="input-group-text">
                                                            https://eleven11.com/agents/
                                                        </span>

                                                        <input class="form-control ps-0" type="text" name="slug"
                                                            id="slug" required="required" />


                                                        <span class="input-group-text slug-actions">
                                                            <a href="#" class="link-secondary d-none"
                                                                data-bs-toggle="tooltip" aria-label="Generate URL"
                                                                data-bs-original-title="Generate URL"
                                                                data-bb-toggle="generate-slug">
                                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                    <path d="M6 21l15 -15l-3 -3l-15 15l3 3" />
                                                                    <path d="M15 6l3 3" />
                                                                    <path
                                                                        d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                                                                    <path
                                                                        d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                                                                </svg> </a>
                                                        </span>

                                                    </div>
                                                </div>
                                                <input class="slug-current" name="slug" type="hidden" value="">
                                                <div class="slug-data"
                                                    data-url="https://hously.archielite.com/ajax/slug/create"
                                                    data-view="https://hously.archielite.com/agents/" data-id="0"></div>
                                                <input name="slug_id" type="hidden" value="0">
                                                <input name="is_slug_editable" type="hidden" value="1">
                                            </div>


                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="last_name" class="form-label required">Last Name</label>

                                            <input class="form-control" placeholder="Last Name" data-counter="120"
                                                required="required" name="last_name" type="text" id="last_name">



                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="username" class="form-label required">Username</label>

                                            <input class="form-control" placeholder="Ex: john_smith" data-counter="120"
                                                required="required" name="username" type="text" id="username">



                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="company" class="form-label">Company Name</label>

                                            <input class="form-control" placeholder="Company Name" data-counter="255"
                                                name="company" type="text" id="company">



                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="description" class="form-label">Description</label>


                                            <textarea class="form-control" data-counter="400" rows="4" placeholder="Short description" name="description"
                                                cols="50" id="description"></textarea>




                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="phone" class="form-label">Phone</label>

                                            <input class="form-control" placeholder="Phone" data-counter="20"
                                                name="phone" type="text" id="phone">



                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="dob" class="form-label">Date of birth</label>


                                            <div class="input-group datepicker">
                                                <input class="form-control " placeholder="Y-m-d" data-input=""
                                                    readonly="readonly" name="dob" type="text" value="2024-07-26"
                                                    id="dob">
                                                <button class="btn btn-icon" type="button" data-toggle="data-toggle">
                                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
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
                                                    </svg>

                                                </button>
                                                <button class="btn btn-icon   text-danger" type="button"
                                                    data-clear="data-clear">
                                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>

                                                </button>
                                            </div>




                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="email" class="form-label required">Email</label>

                                            <input class="form-control" placeholder="Ex: example@gmail.com"
                                                data-counter="60" required="required" name="email" type="text"
                                                id="email">



                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="social_instagram" class="form-label">Social link
                                                Instagram</label>

                                            <input class="form-control" name="social_instagram" type="text"
                                                id="social_instagram">



                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="social_linkedin" class="form-label">Social link
                                                Linkedin</label>

                                            <input class="form-control" name="social_linkedin" type="text"
                                                id="social_linkedin">



                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="social_facebook" class="form-label">Social link
                                                Facebook</label>

                                            <input class="form-control" name="social_facebook" type="text"
                                                id="social_facebook">



                                        </div>




                                        <div class="mb-3 row select-location-fields">
                                            <div class="col-md-4">

                                                <label for="country_id" class="form-label">Country</label>


                                                <select class="select-search-full form-select" id="country_id"
                                                    data-type="country" name="country_id">
                                                    <option value="">Select country...</option>
                                                    <option value="1" selected="selected">France</option>
                                                    <option value="2">England</option>
                                                    <option value="3">USA</option>
                                                    <option value="4">Holland</option>
                                                    <option value="5">Denmark</option>
                                                    <option value="6">Germany</option>
                                                </select>




                                            </div>
                                            <div class="col-md-4">

                                                <label for="state_id" class="form-label">State</label>


                                                <select class="select-search-full form-select" id="state_id"
                                                    data-url="https://hously.archielite.com/ajax/states-by-country"
                                                    data-type="state" name="state_id">
                                                    <option value="" selected="selected">Select state...
                                                    </option>
                                                    <option value="1">France</option>
                                                    <option value="3">New York</option>
                                                    <option value="6">Germany</option>
                                                </select>




                                            </div>
                                            <div class="col-md-4">

                                                <label for="city_id" class="form-label">City</label>


                                                <select class="select-search-full form-select" id="city_id"
                                                    data-url="https://hously.archielite.com/ajax/cities-by-state"
                                                    data-type="city" name="city_id">
                                                    <option value="" selected="selected">Select city...</option>
                                                </select>




                                            </div>
                                        </div>


                                        <div id="change-password" class="row">








                                            <div class="mb-3 position-relative col-md-6">

                                                <label for="password" class="form-label required">Password</label>

                                                <input class="form-control" data-counter="60" required="required"
                                                    name="password" type="password" id="password">



                                            </div>




                                            <div class="mb-3 position-relative col-md-6">

                                                <label for="password_confirmation" class="form-label required">Password
                                                    confirmation</label>

                                                <input class="form-control" data-counter="60" required="required"
                                                    name="password_confirmation" type="password"
                                                    id="password_confirmation">



                                            </div>




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
                                        <label for="avatar_image" class="form-label">Avatar image</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <div class="image-box image-box-avatar_image" action="select-image">
                                        <input class="image-data" name="avatar_image" type="hidden" value=""
                                            class="" />


                                        <div style="width: 8rem" class="preview-image-wrapper mb-1">
                                            <div class="preview-image-inner">
                                                <a data-bb-toggle="image-picker-choose" data-target="popup"
                                                    class="image-box-actions" data-result="avatar_image"
                                                    data-action="select-image" data-allow-thumb="1" href="#">
                                                    <img class="preview-image default-image"
                                                        data-default="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png"
                                                        src="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png"
                                                        alt="Preview image" />
                                                    <span class="image-picker-backdrop"></span>
                                                </a>
                                                <button
                                                    class="btn btn-pill btn-icon  btn-sm image-picker-remove-button p-0"
                                                    style="display: none; --bb-btn-font-size: 0.5rem;" type="button"
                                                    data-bb-toggle="image-picker-remove" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Remove image">
                                                    <svg class="icon icon-sm icon-left" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M18 6l-12 12" />
                                                        <path d="M6 6l12 12" />
                                                    </svg>

                                                </button>
                                            </div>
                                        </div>

                                        <a data-bb-toggle="image-picker-choose" data-target="popup"
                                            data-result="avatar_image" data-action="select-image" data-allow-thumb="1"
                                            href="#">
                                            Choose image
                                        </a>

                                        <div data-bb-toggle="upload-from-url">
                                            <span class="text-muted">or</span>
                                            <a href="javascript:void(0)" class="mt-1" data-bs-toggle="modal"
                                                data-bs-target="#image-picker-add-from-url"
                                                data-bb-target=".image-box-avatar_image">
                                                Add from URL
                                            </a>
                                        </div>
                                    </div>






                                </div>
                            </div>
                            <div class="card meta-boxes">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <label for="is_featured" class="form-label">Is featured?</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <label class="form-check form-switch ">
                                        <input name="is_featured" type="hidden" value="0" />
                                        <input class="form-check-input" name="is_featured" type="checkbox"
                                            value="1" id="is_featured" />

                                    </label>






                                </div>
                            </div>
                            <div class="card meta-boxes">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <label for="is_public_profile" class="form-label">Is public
                                            profile?</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <label class="form-check form-switch ">
                                        <input name="is_public_profile" type="hidden" value="0" />
                                        <input class="form-check-input" name="is_public_profile" type="checkbox"
                                            value="1" id="is_public_profile" />

                                    </label>






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
