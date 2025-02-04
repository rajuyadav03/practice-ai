@extends('users.website.layout.app')
@section('content')


    <div class="ps-main__wrapper" id="vendor-dashboard">
        <header class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fs-1">Account settings</h3>

            <div class="d-flex align-items-center gap-4">
                <a href="#" target="_blank" class="text-uppercase">
                    Go to homepage
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path d="M13 18l6 -6" />
                        <path d="M13 6l6 6" />
                    </svg> </a>
            </div>
        </header>

        <div id="app">

            <div class="card">
                <div class="card-header">
                    <ul data-bs-toggle="tabs" class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="#profile-tab" class="nav-link active" data-bs-toggle="tab">

                                Account Information
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#avatar-tab" class="nav-link" data-bs-toggle="tab">

                                Profile picture
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#change-password-tab" class="nav-link" data-bs-toggle="tab">

                                Change Password
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="profile-tab">
                            <form method="POST" action="account/settings" accept-charset="UTF-8"
                                id="botble-real-estate-forms-fronts-profile-form" class="js-base-form dirty-check">
                                <input name="_token" type="hidden"
                                    value="ODurMtAQEFEYzA0hp60Kt9NHEuuVSbSDuCcwmABY">




                                <div class="mb-3 position-relative">

                                    <label for="first_name" class="form-label required">First Name</label>
                                    <input class="form-control" placeholder="First Name" data-counter="120"
                                        required="required" name="first_name" type="text" value="Loren"
                                        id="first_name">



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
                                                    agents/
                                                </span>

                                                <input class="form-control ps-0" type="text" name="slug"
                                                    id="slug" value="loren" required="required" />


                                                <span class="input-group-text slug-actions">
                                                    <a href="#" class="link-secondary" data-bs-toggle="tooltip"
                                                        aria-label="Generate URL"
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
                                        <input class="slug-current" name="slug" type="hidden" value="loren">
                                        <div class="slug-data" data-url="ajax/slug/create" data-view="agents/"
                                            data-id="92"></div>
                                        <input name="slug_id" type="hidden" value="92">
                                        <input name="is_slug_editable" type="hidden" value="1">
                                    </div>


                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="last_name" class="form-label required">Last Name</label>
                                    <input class="form-control" placeholder="Last Name" data-counter="120"
                                        required="required" name="last_name" type="text" value="Gutkowski"
                                        id="last_name">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="username" class="form-label required">Username</label>
                                    <input class="form-control" placeholder="Ex: john_smith" data-counter="120"
                                        required="required" name="username" type="text" value="ricejadyn"
                                        id="username">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="company" class="form-label">Company Name</label>
                                    <input class="form-control" placeholder="Company Name" data-counter="255"
                                        name="company" type="text" value="Facebook" id="company">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" data-counter="400" rows="3" placeholder="Short description" name="description"
                                        cols="50" id="description">I will tell you his history,&#039; As they walked off together, Alice heard the Rabbit asked. &#039;No, I didn&#039;t,&#039; said Alice: &#039;three inches is such a tiny golden key, and when she caught it, and on it except.</textarea>



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="phone" class="form-label">Phone</label>
                                    <input class="form-control" placeholder="Phone" data-counter="20" name="phone"
                                        type="text" value="+19085294114" id="phone">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label class="form-label" for="dob">
                                        Date of birth


                                    </label>


                                    <div class="input-group datepicker">
                                        <input class="form-control " placeholder="Y-m-d" data-input=""
                                            readonly="readonly" name="dob" type="text"
                                            value="1981-06-09 00:00:00">
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

                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>


                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" disabled name="email" type="text"
                                        value="agent@archielite.com" id="email">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="social_instagram" class="form-label">Social link Instagram</label>
                                    <input class="form-control" name="social_instagram" type="text"
                                        value="" id="social_instagram">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="social_linkedin" class="form-label">Social link Linkedin</label>
                                    <input class="form-control" name="social_linkedin" type="text" value=""
                                        id="social_linkedin">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="social_facebook" class="form-label">Social link Facebook</label>
                                    <input class="form-control" name="social_facebook" type="text" value=""
                                        id="social_facebook">



                                </div>



                                <div class="mb-3 row select-location-fields">
                                    <div class="col-md-4">

                                        <label class="form-label" for="country_id">
                                            Country


                                        </label>


                                        <select data-placeholder="Select an option"
                                            class="select-search-full form-select" id="country_id"
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

                                        <label class="form-label" for="state_id">
                                            State


                                        </label>


                                        <select data-placeholder="Select an option"
                                            class="select-search-full form-select" id="state_id"
                                            data-url="ajax/states-by-country" data-type="state" name="state_id">
                                            <option value="" selected="selected">Select state...</option>
                                            <option value="1">France</option>
                                            <option value="3">New York</option>
                                            <option value="6">Germany</option>
                                        </select>




                                    </div>
                                    <div class="col-md-4">

                                        <label class="form-label" for="city_id">
                                            City


                                        </label>


                                        <select data-placeholder="Select an option"
                                            class="select-search-full form-select" id="city_id"
                                            data-url="ajax/cities-by-state" data-type="city" name="city_id">
                                            <option value="" selected="selected">Select city...</option>
                                        </select>




                                    </div>
                                </div>

                                <div id="change-password" class="row" style="display: none">







                                </div>







                                <button class="btn btn-primary" type="submit">Save</button>





                            </form>
                        </div>
                        <div class="tab-pane" id="avatar-tab">
                            <div class="crop-image-container">
                                <div class="mb-3 position-relative">
                                    <label class="form-label">
                                        Profile picture


                                    </label>
                                    <div class="avatar-view rounded- overflow-hidden">
                                        <img class="image-preview crop-image-original avatar avatar-2xl"
                                            src="storage/accounts/8.jpg" alt="Profile picture" />

                                        <div class="backdrop"></div>
                                        <div class="action">
                                            <a href="javascript:void(0);" class="text-decoration-none text-white"
                                                data-bs-toggle="modal" data-bs-target="#avatar_file-modal">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path
                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg> </a>

                                        </div>
                                    </div>

                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#avatar_file-modal" class="d-block mt-1">
                                        Choose image
                                    </a>
                                </div>

                                <div class="modal fade modal-blur modal fade modal-blur crop-image-modal"
                                    id="avatar_file-modal" tabindex="-1" role="dialog" aria-hidden="true"
                                    data-select2-dropdown-parent="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Profile picture</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>


                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <form action="account/avatar">
                                                            <div class="mb-3 position-relative">
                                                                <label class="form-label" for="avatar_file">
                                                                    Profile picture


                                                                </label>



                                                                <input class="form-control" type="file"
                                                                    name="avatar_file" id="avatar_file"
                                                                    accept="image/*" />
                                                            </div>
                                                        </form>

                                                        <div class="cropper-image-wrap">
                                                            <img src="" class="cropper-image" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="img-preview preview-lg"></div>
                                                        <div class="img-preview preview-md"></div>
                                                        <div class="img-preview preview-sm"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn" type="button" data-bs-dismiss="modal">

                                                    Close

                                                </button>
                                                <button class="btn btn-primary  ms-auto" type="submit">

                                                    Save

                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="change-password-tab">
                            <form method="POST" action="account/security" accept-charset="UTF-8"
                                id="botble-real-estate-forms-fronts-change-password-form"
                                class="js-base-form dirty-check"><input name="_method" type="hidden"
                                    value="PUT"><input name="_token" type="hidden"
                                    value="ODurMtAQEFEYzA0hp60Kt9NHEuuVSbSDuCcwmABY">




                                <div class="mb-3 position-relative">

                                    <label for="old_password" class="form-label">Current password</label>
                                    <input class="form-control" name="old_password" type="password"
                                        id="old_password">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="password" class="form-label">New password</label>
                                    <input class="form-control" name="password" type="password" id="password">



                                </div>



                                <div class="mb-3 position-relative">

                                    <label for="password_confirmation" class="form-label">Confirmation
                                        password</label>
                                    <input class="form-control" name="password_confirmation" type="password"
                                        id="password_confirmation">



                                </div>



                                <button class="btn btn-primary" type="submit">Update password</button>





                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
