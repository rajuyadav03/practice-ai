@extends('admin.layout.app')
@section('content')
<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <x-bread-crum :items="[
                    ['url' => route('admin.dashboard'), 'title' => 'Dashboard'],
                    ['url' => '', 'title' => 'Real Estate'],
                    ['url' => '', 'title' => 'Properties']]" />
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list"></div>
            </div>
        </div>
    </div>

    <div class="page-body page-content">
        <div class="container-xl">
            <form method="POST" action="https://hously.archielite.com/admin/real-estate/properties/create" accept-charset="UTF-8" id="botble-real-estate-forms-property-form" class="js-base-form dirty-check" novalidate="novalidate"><input name="_token" type="hidden" value="ES3b6AoJhafiQXQZugXG4lzzc4k5cGYI3nxW9LRC">
                <div class="row">
                    <div class="gap-3 col-md-9">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="mb-3 position-relative"><label for="name" class="form-label required">Name</label><input class="form-control" data-counter="250" placeholder="Name" required="" name="name" type="text" id="name" aria-required="true"></div><input type="hidden" name="model" value="Botble\RealEstate\Models\Property">
                                    <div class="mb-3 position-relative"><label for="type" class="form-label required">Type</label><select class="form-control form-select" id="type" required="" name="type" aria-required="true">
                                            <option value="sale">Sale</option>
                                            <option value="rent">Rent</option>
                                        </select></div>
                                    <div class="mb-3 position-relative"><label for="description" class="form-label">Description</label><textarea class="form-control" data-counter="400" rows="4" placeholder="Short description" name="description" cols="50" id="description"></textarea></div>
                                    <div class="mb-3 position-relative"><label class="form-check form-switch"><input name="is_featured" type="hidden" value="0"><input class="form-check-input" name="is_featured" type="checkbox" id="is_featured" value="1"><span class="form-check-label">Is featured?</span></label></div>
                                    <div class="mb-3 position-relative"><label for="images[]" class="form-label">Images</label>
                                        <div class="gallery-images-wrapper list-images form-fieldset">
                                            <div class="images-wrapper mb-2">
                                                <div data-bb-toggle="gallery-add" class="text-center cursor-pointer default-placeholder-gallery-image" data-name="images[]">
                                                    <div class="mb-3"><svg class="icon icon-md text-secondary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M15 8h.01"></path>
                                                            <path d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5"></path>
                                                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4"></path>
                                                            <path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54"></path>
                                                            <path d="M16 19h6"></path>
                                                            <path d="M19 16v6"></path>
                                                        </svg></div>
                                                    <p class="mb-0 text-body"> Click here to add more images. </p>
                                                </div><input name="images[]" type="hidden">
                                                <div class="row w-100 list-gallery-media-images hidden ui-sortable" data-name="images[]" data-allow-thumb="1" style=""></div>
                                            </div>
                                            <div class="footer-action" style="display: none;"><a data-bb-toggle="gallery-add" href="#" class="me-2 cursor-pointer">Add Images</a><button class="text-danger cursor-pointer btn-link" data-bb-toggle="gallery-reset"> Reset </button></div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row select-location-fields">
                                        <div class="col-md-4"><label for="country_id" class="form-label">Country</label><select class="select-search-full form-select select2-hidden-accessible" id="country_id" data-type="country" name="country_id" data-select2-id="select2-data-country_id" tabindex="-1" aria-hidden="true">
                                                <option value="">Select country...</option>
                                                <option selected="" value="1" data-select2-id="select2-data-2-wopl">France</option>
                                                <option value="2">England</option>
                                                <option value="3">USA</option>
                                                <option value="4">Holland</option>
                                                <option value="5">Denmark</option>
                                                <option value="6">Germany</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-rl1h" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country_id-container" aria-controls="select2-country_id-container"><span class="select2-selection__rendered" id="select2-country_id-container" role="textbox" aria-readonly="true" title="France">France</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        <div class="col-md-4"><label for="state_id" class="form-label">State</label><select class="select-search-full form-select select2-hidden-accessible" id="state_id" data-url="https://hously.archielite.com/ajax/states-by-country" data-type="state" name="state_id" data-select2-id="select2-data-state_id" tabindex="-1" aria-hidden="true">
                                                <option selected="" value="" data-select2-id="select2-data-4-zggw">Select state...</option>
                                                <option value="1">France</option>
                                                <option value="3">New York</option>
                                                <option value="6">Germany</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-lfuy" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state_id-container" aria-controls="select2-state_id-container"><span class="select2-selection__rendered" id="select2-state_id-container" role="textbox" aria-readonly="true" title="Select state...">Select state...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        <div class="col-md-4"><label for="city_id" class="form-label">City</label><select class="select-search-full form-select select2-hidden-accessible" id="city_id" data-url="https://hously.archielite.com/ajax/cities-by-state" data-type="city" name="city_id" data-select2-id="select2-data-city_id" tabindex="-1" aria-hidden="true">
                                                <option selected="" value="" data-select2-id="select2-data-6-78k1">Select city...</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-r8gc" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city_id-container" aria-controls="select2-city_id-container"><span class="select2-selection__rendered" id="select2-city_id-container" role="textbox" aria-readonly="true" title="Select city...">Select city...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                    </div>
                                    <div class="mb-3 position-relative"><label for="location" class="form-label">Property location</label><input class="form-control" data-counter="191" placeholder="plugins/real-estate::property.form.location" name="location" type="text" id="location"></div>
                                    <div class="row">
                                        <div class="form-group mb-3 col-md-6"><label for="latitude" class="form-label">Latitude</label><input class="form-control" placeholder="Ex: 1.462260" data-counter="25" name="latitude" type="text" id="latitude"><a class="form-hint" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow"> Go here to get Latitude from address. </a></div>
                                        <div class="form-group mb-3 col-md-6"><label for="longitude" class="form-label">Longitude</label><input class="form-control" placeholder="Ex: 103.812530" data-counter="25" name="longitude" type="text" id="longitude"><a class="form-hint" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow"> Go here to get Longitude from address. </a></div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-3 col-md-3"><label for="number_bedroom" class="form-label">Number bedrooms</label><input class="form-control" placeholder="Number bedrooms" name="number_bedroom" type="number" id="number_bedroom"></div>
                                        <div class="form-group mb-3 col-md-3"><label for="number_bathroom" class="form-label">Number bathrooms</label><input class="form-control" placeholder="Number bathrooms" name="number_bathroom" type="number" id="number_bathroom"></div>
                                        <div class="form-group mb-3 col-md-3"><label for="number_floor" class="form-label">Number floors</label><input class="form-control" placeholder="Number floors" name="number_floor" type="number" id="number_floor"></div>
                                        <div class="form-group mb-3 col-md-3"><label for="square" class="form-label">Square (m²)</label><input class="form-control" placeholder="Square (m²)" name="square" type="number" id="square"></div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-3 col-md-6"><label for="price" class="form-label">Price</label><input class="form-control input-mask-number" id="price-number" placeholder="Price" data-thousands-separator="," data-decimal-separator="." name="price" type="text" im-insert="true"></div>
                                        <div class="form-group mb-3 col-md-6"><label for="currency_id" class="form-label">Currency</label><select class="select-full form-select select2-hidden-accessible" id="currency_id" name="currency_id" data-select2-id="select2-data-currency_id" tabindex="-1" aria-hidden="true">
                                                <option value="1" data-select2-id="select2-data-15-dor8">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">VND</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-14-oyla" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-currency_id-container" aria-controls="select2-currency_id-container"><span class="select2-selection__rendered" id="select2-currency_id-container" role="textbox" aria-readonly="true" title="USD">USD</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        <div class="form-group mb-3 period-form-group col-md-4 hidden"><label for="period" class="form-label required">Period</label><select class="select-search-full form-select select2-hidden-accessible" id="period" required="" name="period" data-select2-id="select2-data-period" tabindex="-1" aria-hidden="true" aria-required="true">
                                                <option value="day" data-select2-id="select2-data-8-tobg">Daily</option>
                                                <option value="week">Weekly</option>
                                                <option value="month">Monthly</option>
                                                <option value="year">Yearly</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-7-iuzz" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-period-container" aria-controls="select2-period-container"><span class="select2-selection__rendered" id="select2-period-container" role="textbox" aria-readonly="true" title="Daily">Daily</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                    </div>
                                    <div class="mb-3 position-relative"><label class="form-check form-switch"><input name="never_expired" type="hidden" value="0"><input class="form-check-input" name="never_expired" type="checkbox" id="never_expired" checked="" value="1"><span class="form-check-label">Never expired?</span></label></div>
                                    <div class="form-group mb-3 auto-renew-form-group hidden"><label class="form-check form-switch"><input name="auto_renew" type="hidden" value="0"><input class="form-check-input" name="auto_renew" type="checkbox" id="auto_renew" value="1"><span class="form-check-label">Renew automatically (you will be charged again in 45 days)?</span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="card-title"> Distance key between facilities </h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="row g-2 mb-2">
                                        <div class="col-4"><select name="facilities[01][id]" class="select-search-full select2-hidden-accessible" data-placeholder="Select facility" data-select2-id="select2-data-9-7mei" tabindex="-1" aria-hidden="true">
                                                <option value="0" data-select2-id="select2-data-11-6fh0">Select facility</option>
                                                <option value="1">Hospital</option>
                                                <option value="2">Super Market</option>
                                                <option value="3">School</option>
                                                <option value="4">Entertainment</option>
                                                <option value="5">Pharmacy</option>
                                                <option value="6">Airport</option>
                                                <option value="7">Railways</option>
                                                <option value="8">Bus Stop</option>
                                                <option value="9">Beach</option>
                                                <option value="10">Mall</option>
                                                <option value="11">Bank</option>
                                                <option value="12">Fitness</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-10-93pb" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-facilities01id-46-container" aria-controls="select2-facilities01id-46-container"><span class="select2-selection__rendered" id="select2-facilities01id-46-container" role="textbox" aria-readonly="true" title="Select facility">Select facility</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        <div class="col position-relative"><input type="text" name="facilities[01][distance]" class="form-control" placeholder="Distance (E.g: 200m, 1km...)" data-counter="50"></div>
                                        <div class="col-auto"><button class="btn btn-icon" type="button"><svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7l16 0"></path>
                                                    <path d="M10 11l0 6"></path>
                                                    <path d="M14 11l0 6"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg></button></div>
                                    </div>
                                </div><a href="javascript:void(0)" role="button">Add new</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="card-title"> Custom Fields </h4>
                            </div>
                            <div class="card-body">
                                <div class="custom-fields-wrap">
                                    <div id="custom-field-list"></div><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#add-custom-field-modal" role="button"> Add a new custom field </a>
                                    <div class="modal fade modal-blur" id="add-custom-field-modal" tabindex="-1" role="dialog" aria-hidden="true" data-select2-dropdown-parent="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add new custom field</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3 position-relative"><label class="form-label" for="custom-field-id"> Select field </label><select class="form-select mb-n3" id="custom-field-id">
                                                            <option value="">Add a new custom field</option>
                                                        </select></div>
                                                </div>
                                                <div class="modal-footer"><button class="btn" type="button" data-bs-dismiss="modal"> Cancel </button><button class="btn btn-primary" type="button" id="add-new"> Add new </button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h4 class="card-title"> Features </h4>
                            </div>
                            <div class="card-body"><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="1"><span class="form-check-label"> Wifi </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="2"><span class="form-check-label"> Parking </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="3"><span class="form-check-label"> Swimming pool </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="4"><span class="form-check-label"> Balcony </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="5"><span class="form-check-label"> Garden </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="6"><span class="form-check-label"> Security </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="7"><span class="form-check-label"> Fitness center </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="8"><span class="form-check-label"> Air Conditioning </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="9"><span class="form-check-label"> Central Heating </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="10"><span class="form-check-label"> Laundry Room </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="11"><span class="form-check-label"> Pets Allow </span></label><label class="form-check form-check-inline mb-3"><input type="checkbox" name="features[]" class="form-check-input" value="12"><span class="form-check-label"> Spa &amp; Massage </span></label></div>
                        </div>
                        <div id="advanced-sortables" class="meta-box-sortables">
                            <div class="card meta-boxes mb-3" id="seo_wrap">
                                <div class="card-header">
                                    <h4 class="card-title"> Search Engine Optimize </h4>
                                    <div class="card-actions"><a href="#" class="btn-trigger-show-seo-detail"> Edit SEO meta </a></div>
                                </div>
                                <div class="card-body">
                                    <div class="seo-preview">
                                        <p class="default-seo-description"> Setup meta title &amp; description to make your site easy to discovered on search engines such as Google </p>
                                        <div class="existed-seo-meta hidden">
                                            <h4 class="page-title-seo text-truncate"></h4>
                                            <div class="page-url-seo">
                                                <p>-</p>
                                            </div>
                                            <div><span style="color: rgb(112, 117, 122);">Jul 11, 2024 - </span><span class="page-description-seo"></span></div>
                                        </div>
                                    </div>
                                    <div class="hidden seo-edit-section">
                                        <hr class="my-4">
                                        <div class="mb-3 position-relative"><label for="seo_meta[seo_title]" class="form-label">SEO Title</label><input class="form-control" data-counter="70" placeholder="SEO Title" data-allow-over-limit="" v-pre="1" name="seo_meta[seo_title]" type="text" id="seo_meta[seo_title]"></div>
                                        <div class="mb-3 position-relative"><label for="seo_meta[seo_description]" class="form-label">SEO description</label><textarea class="form-control" data-counter="160" rows="3" placeholder="SEO description" data-allow-over-limit="" v-pre="1" name="seo_meta[seo_description]" cols="50" id="seo_meta[seo_description]"></textarea></div>
                                        <div class="mb-3 position-relative"><label for="seo_meta_image" class="form-label">SEO image</label>
                                            <div class="image-box image-box-seo_meta_image" action="select-image" data-counter="250" v-pre="1"><input class="image-data" name="seo_meta_image" type="hidden" data-counter="250" v-pre="1" value="">
                                                <div class="preview-image-wrapper mb-1" style="width: 8rem;">
                                                    <div class="preview-image-inner"><a data-bb-toggle="image-picker-choose" data-target="popup" class="image-box-actions" data-result="seo_meta_image" data-action="select-image" data-allow-thumb="1" href="#"><img class="preview-image default-image" data-default="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png" src="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png" alt="Preview image"><span class="image-picker-backdrop"></span></a><button class="btn btn-pill btn-icon btn-sm image-picker-remove-button p-0" type="button" data-bb-toggle="image-picker-remove" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Remove image" data-bs-original-title="Remove image" style="display: none; --bb-btn-font-size: 0.5rem;"><svg class="icon icon-sm icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                <path d="M18 6l-12 12"></path>
                                                                <path d="M6 6l12 12"></path>
                                                            </svg></button></div>
                                                </div><a data-bb-toggle="image-picker-choose" data-target="popup" data-result="seo_meta_image" data-action="select-image" data-allow-thumb="1" href="#"> Choose image </a>
                                                <div data-bb-toggle="upload-from-url"><span class="text-muted">or</span><a href="javascript:void(0)" class="mt-1" data-bs-toggle="modal" data-bs-target="#image-picker-add-from-url" data-bb-target=".image-box-seo_meta_image"> Add from URL </a></div>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative"><label for="seo_meta[index]" class="form-label">Index</label>
                                            <div class="position-relative form-check-group mb-3"><label class="form-check form-check-inline"><input class="form-check-input" id="seo_meta[index]" v-pre="1" type="radio" name="seo_meta[index]" checked="" value="index"><span class="form-check-label">Index</span></label><label class="form-check form-check-inline"><input class="form-check-input" id="seo_meta[index]" v-pre="1" type="radio" name="seo_meta[index]" value="noindex"><span class="form-check-label">No index</span></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 gap-3 d-flex flex-column-reverse flex-md-column mb-md-0 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Publish </h4>
                            </div>
                            <div class="card-body">
                                <div class="btn-list"><button class="btn btn-primary" type="submit" name="submitter" value="apply"><svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M14 4l0 4l-6 0l0 -4"></path>
                                        </svg> Save </button><button class="btn" type="submit" name="submitter" value="save"><svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 18v3h16v-14l-8 -4l-8 4v3"></path>
                                            <path d="M4 14h9"></path>
                                            <path d="M10 11l3 3l-3 3"></path>
                                        </svg> Save &amp; Exit </button></div>
                            </div>
                        </div>
                        <div data-bb-waypoint="" data-bb-target="#form-actions"></div>
                        <header class="top-0 w-100 position-fixed end-0 z-1000 vertical-wrapper" id="form-actions" style="display: none;">
                            <div class="navbar">
                                <div class="container-xl">
                                    <div class="row g-2 align-items-center w-100">
                                        <div class="col">
                                            <div class="page-pretitle">
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb"></ol>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="col-auto ms-auto d-print-none">
                                            <div class="btn-list"><button class="btn btn-primary" type="submit" name="submitter" value="apply"><svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M14 4l0 4l-6 0l0 -4"></path>
                                                    </svg> Save </button><button class="btn" type="submit" name="submitter" value="save"><svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 18v3h16v-14l-8 -4l-8 4v3"></path>
                                                        <path d="M4 14h9"></path>
                                                        <path d="M10 11l3 3l-3 3"></path>
                                                    </svg> Save &amp; Exit </button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title"><label for="status" class="form-label required">Status</label></h4>
                            </div>
                            <div class="card-body"><select class="form-control form-select" required="" id="status" name="status" aria-required="true">
                                    <option value="not_available">Not available</option>
                                    <option value="pre_sale">Preparing selling</option>
                                    <option selected="" value="selling">Selling</option>
                                    <option value="sold">Sold</option>
                                    <option value="renting">Renting</option>
                                    <option value="rented">Rented</option>
                                    <option value="building">Building</option>
                                </select></div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title"><label for="moderation_status" class="form-label required">Moderation status</label></h4>
                            </div>
                            <div class="card-body"><select class="select-full form-select select2-hidden-accessible" required="" id="moderation_status" name="moderation_status" data-select2-id="select2-data-moderation_status" tabindex="-1" aria-hidden="true" aria-required="true">
                                    <option value="pending">Pending</option>
                                    <option selected="" value="approved" data-select2-id="select2-data-17-wora">Approved</option>
                                    <option value="rejected">Rejected</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-16-yhyg" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-moderation_status-container" aria-controls="select2-moderation_status-container"><span class="select2-selection__rendered" id="select2-moderation_status-container" role="textbox" aria-readonly="true" title="Approved">Approved</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title"><label for="categories[]" class="form-label">Categories</label></h4>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="multi-choices-widget list-item-checkbox ms-n3" data-bb-toggle="tree-checkboxes">
                                        <ul class="list-unstyled ms-3">
                                            <li value="1"><label class="form-check"><input type="checkbox" name="categories[]" class="form-check-input" value="1"><span class="form-check-label"> Apartment </span></label></li>
                                            <li value="2"><label class="form-check"><input type="checkbox" name="categories[]" class="form-check-input" value="2"><span class="form-check-label"> Villa </span></label></li>
                                            <li value="3"><label class="form-check"><input type="checkbox" name="categories[]" class="form-check-input" value="3"><span class="form-check-label"> Condo </span></label></li>
                                            <li value="4"><label class="form-check"><input type="checkbox" name="categories[]" class="form-check-input" value="4"><span class="form-check-label"> House </span></label></li>
                                            <li value="5"><label class="form-check"><input type="checkbox" name="categories[]" class="form-check-input" value="5"><span class="form-check-label"> Land </span></label></li>
                                            <li value="6"><label class="form-check"><input type="checkbox" name="categories[]" class="form-check-input" value="6"><span class="form-check-label"> Commercial property </span></label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title"><label for="unique_id" class="form-label">Unique ID</label></h4>
                            </div>
                            <div class="card-body"><input class="form-control" placeholder="Unique ID" name="unique_id" type="text" id="unique_id"></div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title"><label for="project_id" class="form-label">Project</label></h4>
                            </div>
                            <div class="card-body"><select class="select-search-full form-select select2-hidden-accessible" id="project_id" name="project_id" data-select2-id="select2-data-project_id" tabindex="-1" aria-hidden="true">
                                    <option value="0" data-select2-id="select2-data-13-mg2i">Select a project...</option>
                                    <option value="18">Brigade Oasis</option>
                                    <option value="17">Upturn Atmiya Centria</option>
                                    <option value="16">PS Panache</option>
                                    <option value="15">Godrej Prime</option>
                                    <option value="14">Godrej Exquisite</option>
                                    <option value="13">Rustomjee Evershine Global City</option>
                                    <option value="12">Adarsh Greens</option>
                                    <option value="11">Home in Merrick Way</option>
                                    <option value="10">Office Space at Northwest 107th</option>
                                    <option value="1">Walnut Park Apartments</option>
                                    <option value="9">Villa on Hollywood Boulevard</option>
                                    <option value="8">Traditional Food Restaurant</option>
                                    <option value="7">Villa on Grand Avenue</option>
                                    <option value="6">The Metropole Thu Thiem</option>
                                    <option value="5">Vinhomes Grand Park</option>
                                    <option value="4">The Nassim</option>
                                    <option value="3">Diamond Island</option>
                                    <option value="2">Sunshine Wonder Villas</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-12-cpih" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-project_id-container" aria-controls="select2-project_id-container"><span class="select2-selection__rendered" id="select2-project_id-container" role="textbox" aria-readonly="true" title="Select a project...">Select a project...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title"><label for="author_id" class="form-label">Account</label></h4>
                            </div>
                            <div class="card-body"><select class="form-control select-autocomplete form-select select2-hidden-accessible" id="author_id" data-url="https://hously.archielite.com/admin/real-estate/accounts/list" name="author_id" data-select2-id="select2-data-author_id" tabindex="-1" aria-hidden="true">
                                    <option selected="" value="" data-select2-id="select2-data-19-f2bz">Select an account...</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-18-b07t" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-author_id-container" aria-controls="select2-author_id-container"><span class="select2-selection__rendered" id="select2-author_id-container" role="textbox" aria-readonly="true" title="Select an account...">Select an account...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
@endsection