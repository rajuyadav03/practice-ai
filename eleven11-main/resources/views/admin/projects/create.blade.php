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
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">Real Estate</h1>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="admin/real-estate/projects">Projects</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">New project</h1>
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


                <form method="POST" action=""
                    accept-charset="UTF-8" id="botble-real-estate-forms-project-form" class="js-base-form dirty-check">
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
                                        <input type="hidden" name="model" value="Botble\RealEstate\Models\Project">
                                        <div class="mb-3 ">
                                            <div class="slug-field-wrapper" data-field-name="name">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label required" for="slug">
                                                        Permalink


                                                    </label>

                                                    <div class="input-group input-group-flat">

                                                        <span class="input-group-text">
                                                            https://Eleven11.com/projects/
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
                                                    data-url="ajax/slug/create"
                                                    data-view="projects/" data-id="0">
                                                </div>
                                                <input name="slug_id" type="hidden" value="0">
                                                <input name="is_slug_editable" type="hidden" value="1">
                                            </div>


                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="description" class="form-label">Description</label>


                                            <textarea class="form-control" data-counter="400" rows="4" placeholder="Short description" v-pre="1"
                                                name="description" cols="50" id="description"></textarea>




                                        </div>




                                        <div class="mb-3 position-relative">



                                            <label class="form-check form-switch ">
                                                <input name="is_featured" type="hidden" value="0" />
                                                <input class="form-check-input" name="is_featured" type="checkbox"
                                                    value="1" id="is_featured" v-pre="1" />

                                                <span class="form-check-label">Is featured?</span>
                                            </label>




                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="content" class="form-label">Content</label>


                                            <div class="mb-2 btn-list">
                                                <button class="btn   show-hide-editor-btn" type="button"
                                                    data-result="content">

                                                    Show/Hide Editor

                                                </button>

                                                <button class="btn   btn_gallery" type="button" data-result="content"
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

                                                <button class="btn   add_shortcode_btn_trigger" type="button"
                                                    data-bb-toggle="shortcode-list-modal" data-result="content">

                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                                        <path d="M12 12l8 -4.5" />
                                                        <path d="M12 12l0 9" />
                                                        <path d="M12 12l-8 -4.5" />
                                                    </svg>
                                                    UI Blocks

                                                </button>

                                            </div>



                                            <textarea class="form-control form-control editor-ckeditor ays-ignore" data-counter="100000" rows="4"
                                                placeholder="Write your content" with-short-code v-pre="1" id="content" name="content" cols="50"></textarea>




                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="images[]" class="form-label">Images</label>


                                            <div class="gallery-images-wrapper list-images form-fieldset">
                                                <div class="images-wrapper mb-2">
                                                    <div data-bb-toggle="gallery-add"
                                                        class="text-center cursor-pointer default-placeholder-gallery-image"
                                                        data-name="images[]">
                                                        <div class="mb-3">
                                                            <svg class="icon icon-md text-secondary"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M15 8h.01" />
                                                                <path
                                                                    d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" />
                                                                <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />
                                                                <path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" />
                                                                <path d="M16 19h6" />
                                                                <path d="M19 16v6" />
                                                            </svg>
                                                        </div>
                                                        <p class="mb-0 text-body">
                                                            Click here
                                                            to add more images.
                                                        </p>
                                                    </div>
                                                    <input name="images[]" type="hidden">
                                                    <div class="row w-100 list-gallery-media-images  hidden "
                                                        data-name="images[]" data-allow-thumb="1">
                                                    </div>
                                                </div>
                                                <div style="display: none;" class="footer-action">
                                                    <a data-bb-toggle="gallery-add" href="#"
                                                        class="me-2 cursor-pointer">Add Images</a>
                                                    <button class="text-danger cursor-pointer btn-link"
                                                        data-bb-toggle="gallery-reset">
                                                        Reset
                                                    </button>
                                                </div>
                                            </div>




                                        </div>




                                        <div class="mb-3 row select-location-fields">
                                            <div class="col-md-4">

                                                <label for="country_id" class="form-label">Country</label>


                                                <select class="select-search-full form-select" v-pre="1"
                                                    id="country_id" data-type="country" name="country_id">
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


                                                <select class="select-search-full form-select" v-pre="1"
                                                    id="state_id"
                                                    data-url="ajax/states-by-country"
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


                                                <select class="select-search-full form-select" v-pre="1"
                                                    id="city_id"
                                                    data-url="ajax/cities-by-state"
                                                    data-type="city" name="city_id">
                                                    <option value="" selected="selected">Select city...</option>
                                                </select>




                                            </div>
                                        </div>


                                        <div class="mb-3 position-relative">

                                            <label for="location" class="form-label">Location</label>


                                            <input class="form-control" data-counter="191" placeholder="Location"
                                                v-pre="1" name="location" type="text" id="location">




                                        </div>




                                        <div class="row">








                                            <div class="form-group mb-3 col-md-6">

                                                <label for="latitude" class="form-label">Latitude</label>

                                                <input class="form-control" placeholder="Ex: 1.462260" data-counter="25"
                                                    v-pre="1" name="latitude" type="text" id="latitude">
                                                <small class="form-hint"
                                                    href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank" rel="nofollow">
                                                    Go here to get Latitude from address. </small>



                                            </div>




                                            <div class="form-group mb-3 col-md-6">

                                                <label for="longitude" class="form-label">Longitude</label>

                                                <input class="form-control" placeholder="Ex: 103.812530"
                                                    data-counter="25" v-pre="1" name="longitude" type="text"
                                                    id="longitude">
                                                <small class="form-hint"
                                                    href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank" rel="nofollow">
                                                    Go here to get Longitude from address. </small>



                                            </div>




                                        </div>








                                        <div class="row">








                                            <div class="form-group mb-3 col-md-4">

                                                <label for="number_block" class="form-label">Number
                                                    blocks</label>

                                                <input class="form-control" placeholder="Number blocks" v-pre="1"
                                                    name="number_block" type="number" id="number_block">



                                            </div>




                                            <div class="form-group mb-3 col-md-4">

                                                <label for="number_floor" class="form-label">Number
                                                    floors</label>

                                                <input class="form-control" placeholder="Number floors" v-pre="1"
                                                    name="number_floor" type="number" id="number_floor">



                                            </div>




                                            <div class="form-group mb-3 col-md-4">

                                                <label for="number_flat" class="form-label">Number flats</label>

                                                <input class="form-control" placeholder="Number flats" v-pre="1"
                                                    name="number_flat" type="number" id="number_flat">



                                            </div>




                                        </div>








                                        <div class="row">








                                            <div class="form-group mb-3 col-md-4">

                                                <label for="price_from" class="form-label">Lowest price</label>

                                                <input class="form-control input-mask-number" placeholder="Lowest price"
                                                    data-thousands-separator="," data-decimal-separator="."
                                                    v-pre="1" name="price_from" type="text" id="price_from">



                                            </div>




                                            <div class="form-group mb-3 col-md-4">

                                                <label for="price_to" class="form-label">Max price</label>

                                                <input class="form-control input-mask-number" placeholder="Max price"
                                                    data-thousands-separator="," data-decimal-separator="."
                                                    v-pre="1" name="price_to" type="text" id="price_to">



                                            </div>




                                            <div class="form-group mb-3 col-md-4">

                                                <label for="currency_id" class="form-label">Currency</label>


                                                <select class="form-control select-full form-select" v-pre="1"
                                                    id="currency_id" name="currency_id">
                                                    <option value="1">USD</option>
                                                    <option value="2">EUR</option>
                                                    <option value="3">VND</option>
                                                </select>




                                            </div>




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

                                <div class="card-body">
                    
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
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="1">

                                        <span class="form-check-label">
                                            Wifi
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="2">

                                        <span class="form-check-label">
                                            Parking
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="3">

                                        <span class="form-check-label">
                                            Swimming pool
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="4">

                                        <span class="form-check-label">
                                            Balcony
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="5">

                                        <span class="form-check-label">
                                            Garden
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="6">

                                        <span class="form-check-label">
                                            Security
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="7">

                                        <span class="form-check-label">
                                            Fitness center
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="8">

                                        <span class="form-check-label">
                                            Air Conditioning
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="9">

                                        <span class="form-check-label">
                                            Central Heating
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="10">

                                        <span class="form-check-label">
                                            Laundry Room
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="11">

                                        <span class="form-check-label">
                                            Pets Allow
                                        </span>

                                    </label>
                                    <label class="form-check form-check-inline mb-3">
                                        <input type="checkbox" name="features[]" class="form-check-input"
                                            value="12">

                                        <span class="form-check-label">
                                            Spa &amp; Massage
                                        </span>

                                    </label>
                                </div>
                            </div>



                            <div id="advanced-sortables" class="meta-box-sortables">
                                <div class="card meta-boxes mb-3" id="seo_wrap">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Search Engine Optimize
                                        </h4>

                                        <div class="card-actions"><a href="#" class="btn-trigger-show-seo-detail">
                                                Edit SEO meta
                                            </a></div>
                                    </div>

                                    <div class="card-body">
                                        <div class="seo-preview" v-pre>
                                            <p class="default-seo-description">
                                                Setup meta title &amp; description to make your site easy to
                                                discovered on search engines such as Google
                                            </p>

                                            <div class="existed-seo-meta hidden">

                                                <h4 class="page-title-seo text-truncate">

                                                </h4>

                                                <div class="page-url-seo">
                                                    <p>-</p>
                                                </div>

                                                <div>
                                                    <span style="color: #70757a;">Jul 25, 2024
                                                        - </span>
                                                    <span class="page-description-seo">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hidden seo-edit-section" v-pre>
                                            <hr class="my-4">
                                            </hr>

                                            <div class="mb-3 position-relative">

                                                <label for="seo_meta[seo_title]" class="form-label">SEO
                                                    Title</label>


                                                <input class="form-control" data-counter="70" placeholder="SEO Title"
                                                    data-allow-over-limit v-pre="1" name="seo_meta[seo_title]"
                                                    type="text" id="seo_meta[seo_title]">




                                            </div>



                                            <div class="mb-3 position-relative">

                                                <label for="seo_meta[seo_description]" class="form-label">SEO
                                                    description</label>


                                                <textarea class="form-control" data-counter="160" rows="3" placeholder="SEO description" data-allow-over-limit
                                                    v-pre="1" name="seo_meta[seo_description]" cols="50" id="seo_meta[seo_description]"></textarea>




                                            </div>



                                            <div class="mb-3 position-relative">

                                                <label for="seo_meta_image" class="form-label">SEO image</label>


                                                <div class="image-box image-box-seo_meta_image" action="select-image"
                                                    data-counter="250" v-pre="1">
                                                    <input class="image-data" name="seo_meta_image" type="hidden"
                                                        value="" class="" data-counter="250"
                                                        v-pre="1" />


                                                    <div style="width: 8rem" class="preview-image-wrapper mb-1">
                                                        <div class="preview-image-inner">
                                                            <a data-bb-toggle="image-picker-choose" data-target="popup"
                                                                class="image-box-actions" data-result="seo_meta_image"
                                                                data-action="select-image" data-allow-thumb="1"
                                                                href="#">
                                                                <img class="preview-image default-image"
                                                                    data-default="vendor/core/core/base/images/placeholder.png"
                                                                    src="vendor/core/core/base/images/placeholder.png"
                                                                    alt="Preview image" />
                                                                <span class="image-picker-backdrop"></span>
                                                            </a>
                                                            <button
                                                                class="btn btn-pill btn-icon  btn-sm image-picker-remove-button p-0"
                                                                style="display: none; --bb-btn-font-size: 0.5rem;"
                                                                type="button" data-bb-toggle="image-picker-remove"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Remove image">
                                                                <svg class="icon icon-sm icon-left"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M18 6l-12 12" />
                                                                    <path d="M6 6l12 12" />
                                                                </svg>

                                                            </button>
                                                        </div>
                                                    </div>

                                                    <a data-bb-toggle="image-picker-choose" data-target="popup"
                                                        data-result="seo_meta_image" data-action="select-image"
                                                        data-allow-thumb="1" href="#">
                                                        Choose image
                                                    </a>

                                                    <div data-bb-toggle="upload-from-url">
                                                        <span class="text-muted">or</span>
                                                        <a href="javascript:void(0)" class="mt-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#image-picker-add-from-url"
                                                            data-bb-target=".image-box-seo_meta_image">
                                                            Add from URL
                                                        </a>
                                                    </div>
                                                </div>




                                            </div>



                                            <div class="mb-3 position-relative">

                                                <label for="seo_meta[index]" class="form-label">Index</label>


                                                <div class="position-relative form-check-group mb-3">
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" id="seo_meta[index]"
                                                            v-pre="1" type="radio" name="seo_meta[index]"
                                                            value="index" checked>

                                                        <span class="form-check-label">Index</span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" id="seo_meta[index]"
                                                            v-pre="1" type="radio" name="seo_meta[index]"
                                                            value="noindex">

                                                        <span class="form-check-label">No index</span>
                                                    </label>
                                                </div>




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
                                        <label for="status" class="form-label required">Status</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <select class="form-control form-select" v-pre="1" required="required"
                                        id="status" name="status">
                                        <option value="not_available">Not available</option>
                                        <option value="pre_sale">Preparing selling</option>
                                        <option value="selling">Selling</option>
                                        <option value="sold">Sold</option>
                                        <option value="building">Building</option>
                                    </select>






                                </div>
                            </div>
                            <div class="card meta-boxes">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <label for="categories[]" class="form-label required">Categories</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <div class="">
                                        <div class="multi-choices-widget list-item-checkbox ms-n3"
                                            data-bb-toggle="tree-checkboxes">
                                            <ul class="list-unstyled ms-3">
                                                <li value="1">
                                                    <label class="form-check">
                                                        <input type="checkbox" name="categories[]"
                                                            class="form-check-input" value="1">

                                                        <span class="form-check-label">
                                                            Apartment
                                                        </span>

                                                    </label>


                                                </li>
                                                <li value="2">
                                                    <label class="form-check">
                                                        <input type="checkbox" name="categories[]"
                                                            class="form-check-input" value="2">

                                                        <span class="form-check-label">
                                                            Villa
                                                        </span>

                                                    </label>


                                                </li>
                                                <li value="3">
                                                    <label class="form-check">
                                                        <input type="checkbox" name="categories[]"
                                                            class="form-check-input" value="3">

                                                        <span class="form-check-label">
                                                            Condo
                                                        </span>

                                                    </label>


                                                </li>
                                                <li value="4">
                                                    <label class="form-check">
                                                        <input type="checkbox" name="categories[]"
                                                            class="form-check-input" value="4">

                                                        <span class="form-check-label">
                                                            House
                                                        </span>

                                                    </label>


                                                </li>
                                                <li value="5">
                                                    <label class="form-check">
                                                        <input type="checkbox" name="categories[]"
                                                            class="form-check-input" value="5">

                                                        <span class="form-check-label">
                                                            Land
                                                        </span>

                                                    </label>


                                                </li>
                                                <li value="6">
                                                    <label class="form-check">
                                                        <input type="checkbox" name="categories[]"
                                                            class="form-check-input" value="6">

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
                                        <label for="investor_id" class="form-label">Investor</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <select class="form-control select-search-full form-select" v-pre="1"
                                        id="investor_id" name="investor_id">
                                        <option value="0">Select an investor...</option>
                                        <option value="1">National Pension Service</option>
                                        <option value="2">Generali</option>
                                        <option value="3">Temasek</option>
                                        <option value="4">China Investment Corporation</option>
                                        <option value="5">Government Pension Fund Global</option>
                                        <option value="6">PSP Investments</option>
                                        <option value="7">MEAG Munich ERGO</option>
                                        <option value="8">HOOPP</option>
                                        <option value="9">BT Group</option>
                                        <option value="10">New York City ERS</option>
                                        <option value="11">New Jersey Division of Investment</option>
                                        <option value="12">State Super</option>
                                        <option value="13">Shinkong</option>
                                        <option value="14">Rest Super</option>
                                    </select>






                                </div>
                            </div>
                            <div class="card meta-boxes">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <label for="unique_id" class="form-label">Unique ID</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <input class="form-control" data-counter="120" placeholder="Unique ID"
                                        v-pre="1" name="unique_id" type="text" id="unique_id">






                                </div>
                            </div>
                            <div class="card meta-boxes">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <label for="date_finish" class="form-label">Finish date</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <div class="input-group datepicker">
                                        <input class="form-control " v-pre="1" placeholder="Y-m-d" data-input=""
                                            readonly="readonly" name="date_finish" type="text" id="date_finish">
                                        <button class="btn btn-icon" type="button" data-toggle="data-toggle">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M18 6l-12 12" />
                                                <path d="M6 6l12 12" />
                                            </svg>

                                        </button>
                                    </div>






                                </div>
                            </div>
                            <div class="card meta-boxes">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <label for="date_sell" class="form-label">Open sell date</label>
                                    </h4>
                                </div>


                                <div class=" card-body">
                                    <div class="input-group datepicker">
                                        <input class="form-control " v-pre="1" placeholder="Y-m-d" data-input=""
                                            readonly="readonly" name="date_sell" type="text" id="date_sell">
                                        <button class="btn btn-icon" type="button" data-toggle="data-toggle">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M18 6l-12 12" />
                                                <path d="M6 6l12 12" />
                                            </svg>

                                        </button>
                                    </div>






                                </div>
                            </div>

                        </div>
                    </div>

                </form>



            </div>
        </div>
    </div>

    </div>
@endsection
