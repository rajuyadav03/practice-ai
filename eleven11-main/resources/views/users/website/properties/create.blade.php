@extends('users.website.layout.app')
@section('content')
<div class="ps-main__wrapper" id="vendor-dashboard">
    <h1>Write a property
    </h1>
        <div id="app">
            <form method="POST" action="/account/properties/create" accept-charset="UTF-8"
                id="botble-real-estate-forms-account-property-form" class="js-base-form dirty-check" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="gap-3 col-md-9">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="mb-3 position-relative">
                                        <label for="name" class="form-label required">Name</label>
                                        <input class="form-control" data-counter="250" placeholder="Name" v-pre="1"
                                            required="required" name="name" type="text" id="name">
                                    </div>
                                    <input type="hidden" name="model" value="Botble\RealEstate\Models\Property">
                                    <div class="mb-3 ">
                                        <div class="slug-field-wrapper" data-field-name="name">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label required" for="slug">
                                                    Permalink
                                                </label>
                                                <div class="input-group input-group-flat">
                                                    <span class="input-group-text">
                                                        https://Eleven11.com/properties/
                                                    </span>
                                                    <input class="form-control ps-0" type="text" name="slug"
                                                        id="slug" required="required" />
                                                    <span class="input-group-text slug-actions">
                                                        <a href="#" class="link-secondary d-none" data-bs-toggle="tooltip"
                                                            aria-label="Generate URL" data-bs-original-title="Generate URL"
                                                            data-bb-toggle="generate-slug">
                                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round">
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
                                            <div class="slug-data" data-url="https://hously.archielite.com/ajax/slug/create"
                                                data-view="https://hously.archielite.com/properties/" data-id="0">
                                            </div>
                                            <input name="slug_id" type="hidden" value="0">
                                            <input name="is_slug_editable" type="hidden" value="1">
                                        </div>
                                    </div>
                                    <div class="mb-3 position-relative">
                                        <label for="type" class="form-label required">Type</label>
                                        <select class="form-control form-select" id="type" v-pre="1"
                                            required="required" name="type">
                                            <option value="sale">Sale</option>
                                            <option value="rent">Rent</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 position-relative">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" data-counter="400" rows="4" placeholder="Short description" v-pre="1"
                                            name="description" cols="50" id="description"></textarea>
                                    </div>
                                    <div class="mb-3 position-relative">
                                        <label for="content" class="form-label required">Content</label>
                                        <textarea class=" form-control editor-ckeditor" data-counter="100000" rows="4"
                                            placeholder="Write your content" v-pre="1" required="required" name="content" cols="50"
                                            id="content"></textarea>
                                    </div>
                                    <div class="mb-3 position-relative">
                                        <label for="images" class="form-label">Images (maximum 20 images)</label>
                                        <div class="dropzone needsclick dz-sortable" id="multiple-upload">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload.<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="preview-template" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-image"><img data-dz-thumbnail /></div>
                                            <div class="dz-details">
                                                <div class="dz-size"><span data-dz-size></span></div>
                                                <div class="dz-filename"><span data-dz-name></span></div>
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span>
                                            </div>
                                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                            <div class="dz-success-mark">
                                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                    <title>Check</title>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd" sketch:type="MSPage">
                                                        <path id="Oval-2"
                                                            d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                                            stroke-opacity="0.198794158" stroke="#747474"
                                                            fill-opacity="0.816519475" fill="#FFFFFF"
                                                            sketch:type="MSShapeGroup"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dz-error-mark">
                                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                    <title>error</title>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd" sketch:type="MSPage">
                                                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474"
                                                            stroke-opacity="0.198794158" fill="#FFFFFF"
                                                            fill-opacity="0.816519475">
                                                            <path id="Oval-2"
                                                                d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                                                sketch:type="MSShapeGroup"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row select-location-fields">
                                        <div class="col-md-4">
                                            <label for="country_id" class="form-label">Country</label>
                                            <select class="select-search-full form-select" v-pre="1" id="country_id"
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
                                            <select class="select-search-full form-select" v-pre="1" id="state_id"
                                                data-url="https://hously.archielite.com/ajax/states-by-country"
                                                data-type="state" name="state_id">
                                                <option value="" selected="selected">Select state...</option>
                                                <option value="1">France</option>
                                                <option value="3">New York</option>
                                                <option value="6">Germany</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="city_id" class="form-label">City</label>
                                            <select class="select-search-full form-select" v-pre="1" id="city_id"
                                                data-url="https://hously.archielite.com/ajax/cities-by-state" data-type="city"
                                                name="city_id">
                                                <option value="" selected="selected">Select city...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 position-relative">
                                        <label for="location" class="form-label">Property location</label>
                                        <input class="form-control" data-counter="191"
                                            placeholder="plugins/real-estate::property.form.location" v-pre="1"
                                            name="location" type="text" id="location">
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-3 col-md-6">

                                            <label for="latitude" class="form-label">Latitude</label>

                                            <input class="form-control" placeholder="Ex: 1.462260" data-counter="25"
                                                v-pre="1" name="latitude" type="text" id="latitude">
                                            <a class="form-hint"
                                                href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                target="_blank" rel="nofollow">
                                                Go here to get Latitude from address. </a>
                                        </div>
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="longitude" class="form-label">Longitude</label>
                                            <input class="form-control" placeholder="Ex: 103.812530" data-counter="25"
                                                v-pre="1" name="longitude" type="text" id="longitude">
                                            <a class="form-hint"
                                                href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                target="_blank" rel="nofollow">
                                                Go here to get Longitude from address. </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-3 col-md-3">
                                            <label for="number_bedroom" class="form-label">Number bedrooms</label>
                                            <input class="form-control" placeholder="Number bedrooms" v-pre="1"
                                                name="number_bedroom" type="number" id="number_bedroom">
                                        </div>
                                        <div class="form-group mb-3 col-md-3">
                                            <label for="number_bathroom" class="form-label">Number bathrooms</label>
                                            <input class="form-control" placeholder="Number bathrooms" v-pre="1"
                                                name="number_bathroom" type="number" id="number_bathroom">
                                        </div>
                                        <div class="form-group mb-3 col-md-3">
                                            <label for="number_floor" class="form-label">Number floors</label>
                                            <input class="form-control" placeholder="Number floors" v-pre="1"
                                                name="number_floor" type="number" id="number_floor">
                                        </div>
                                        <div class="form-group mb-3 col-md-3">
                                        <label for="square" class="form-label">Square (m&sup2;)</label>
                                            <input class="form-control" placeholder="Square (m²)" v-pre="1"
                                                name="square" type="number" id="square">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="price" class="form-label">Price</label>
                                            <input class="form-control input-mask-number" id="price-number"
                                                placeholder="Price" data-thousands-separator="," data-decimal-separator="."
                                                v-pre="1" name="price" type="text">
                                        </div>
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="currency_id" class="form-label">Currency</label>
                                            <select class="select-full form-select" v-pre="1" id="currency_id"
                                                name="currency_id">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">VND</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3 period-form-group col-md-4 hidden">
                                            <label for="period" class="form-label required">Period</label>
                                            <select class="select-search-full form-select" id="period" v-pre="1"
                                                required="required" name="period">
                                                <option value="day">Daily</option>
                                                <option value="week">Weekly</option>
                                                <option value="month">Monthly</option>
                                                <option value="year">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 position-relative">
                                        <label class="form-check form-switch ">
                                            <input name="auto_renew" type="hidden" value="0" />
                                            <input class="form-check-input" name="auto_renew" type="checkbox" value="1"
                                                id="auto_renew" v-pre="1" />
                                            <span class="form-check-label">Renew automatically (you will be charged
                                                again in 45 days)?</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Distance key between facilities
                                </h4>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Custom Fields
                                </h4>
                            </div>

                            <div class="card-body">
                                <div class="custom-fields-wrap">
                                    <div id="custom-field-list"></div>

                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#add-custom-field-modal" role="button">
                                        Add a new custom field
                                    </a>

                                    <div class="modal fade modal-blur" id="add-custom-field-modal" tabindex="-1"
                                        role="dialog" aria-hidden="true" data-select2-dropdown-parent="true">
                                        <div class="modal-dialog modal-dialog-centered " role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add new custom field</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>


                                                <div class="modal-body">
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label" for="custom-field-id">
                                                            Select field


                                                        </label>



                                                        <select class="form-select mb-n3" id="custom-field-id">
                                                            <option value="">Add a new custom field</option>
                                                            <option value="1">Address
                                                                (Text)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn" type="button" data-bs-dismiss="modal">

                                                        Cancel

                                                    </button>
                                                    <button class="btn btn-primary" type="button" id="add-new">

                                                        Add new

                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Features
                                </h4>
                            </div>

                            <div class="card-body">
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="1">

                                    <span class="form-check-label">
                                        Wifi
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="2">

                                    <span class="form-check-label">
                                        Parking
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="3">

                                    <span class="form-check-label">
                                        Swimming pool
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="4">

                                    <span class="form-check-label">
                                        Balcony
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="5">

                                    <span class="form-check-label">
                                        Garden
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="6">

                                    <span class="form-check-label">
                                        Security
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="7">

                                    <span class="form-check-label">
                                        Fitness center
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="8">

                                    <span class="form-check-label">
                                        Air Conditioning
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="9">

                                    <span class="form-check-label">
                                        Central Heating
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="10">

                                    <span class="form-check-label">
                                        Laundry Room
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="11">

                                    <span class="form-check-label">
                                        Pets Allow
                                    </span>

                                </label>
                                <label class="form-check form-check-inline mb-3">
                                    <input type="checkbox" name="features[]" class="form-check-input" value="12">

                                    <span class="form-check-label">
                                        Spa & Massage
                                    </span>

                                </label>
                            </div>
                        </div>
                        <div id="advanced-sortables" class="meta-box-sortables">
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
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
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

                        <header class="top-0 w-100 position-fixed end-0 z-1000" id="form-actions" style="display: none;">
                            <div class="navbar">
                                <div class="container-xl">
                                    <div class="row g-2 align-items-center w-100">
                                        <div class="col-auto ms-auto d-print-none">
                                            <div class="btn-list">
                                                <button class="btn btn-primary" type="submit" value="apply"
                                                    name="submitter">
                                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                        <path d="M14 4l0 4l-6 0l0 -4" />
                                                    </svg>
                                                    Save

                                                </button>

                                                <button class="btn" type="submit" name="submitter" value="save">
                                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
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
                                <select class="form-control form-select" v-pre="1" required="required" id="status"
                                    name="status">
                                    <option value="not_available">Not available</option>
                                    <option value="pre_sale">Preparing selling</option>
                                    <option value="selling" selected="selected">Selling</option>
                                    <option value="sold">Sold</option>
                                    <option value="renting">Renting</option>
                                    <option value="rented">Rented</option>
                                    <option value="building">Building</option>
                                </select>






                            </div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <label for="categories[]" class="form-label">Categories</label>
                                </h4>
                            </div>


                            <div class=" card-body">
                                <div class="">
                                    <div class="multi-choices-widget list-item-checkbox ms-n3"
                                        data-bb-toggle="tree-checkboxes">
                                        <ul class="list-unstyled ms-3">
                                            <li value="1">
                                                <label class="form-check">
                                                    <input type="checkbox" name="categories[]" class="form-check-input"
                                                        value="1">

                                                    <span class="form-check-label">
                                                        Apartment
                                                    </span>

                                                </label>


                                            </li>
                                            <li value="2">
                                                <label class="form-check">
                                                    <input type="checkbox" name="categories[]" class="form-check-input"
                                                        value="2">

                                                    <span class="form-check-label">
                                                        Villa
                                                    </span>

                                                </label>


                                            </li>
                                            <li value="3">
                                                <label class="form-check">
                                                    <input type="checkbox" name="categories[]" class="form-check-input"
                                                        value="3">

                                                    <span class="form-check-label">
                                                        Condo
                                                    </span>

                                                </label>


                                            </li>
                                            <li value="4">
                                                <label class="form-check">
                                                    <input type="checkbox" name="categories[]" class="form-check-input"
                                                        value="4">

                                                    <span class="form-check-label">
                                                        House
                                                    </span>

                                                </label>


                                            </li>
                                            <li value="5">
                                                <label class="form-check">
                                                    <input type="checkbox" name="categories[]" class="form-check-input"
                                                        value="5">

                                                    <span class="form-check-label">
                                                        Land
                                                    </span>

                                                </label>


                                            </li>
                                            <li value="6">
                                                <label class="form-check">
                                                    <input type="checkbox" name="categories[]" class="form-check-input"
                                                        value="6">

                                                    <span class="form-check-label">
                                                        Commercial property
                                                    </span>

                                                </label>


                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <label for="unique_id" class="form-label">Unique ID</label>
                                </h4>
                            </div>


                            <div class=" card-body">
                                <input class="form-control" placeholder="Unique ID" v-pre="1" name="unique_id"
                                    type="text" id="unique_id">





                            </div>
                        </div>

                    </div>
                </div>

            </form>

        </div>
</div>
@endsection
