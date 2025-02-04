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
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">New package</h1>
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
                <form method="POST" action="/admin/real-estate/packages/create" accept-charset="UTF-8"
                    id="botble-real-estate-forms-package-form" class="js-base-form dirty-check" novalidate="novalidate">
                    <input name="_token" type="hidden" value="XG616k0jkMtPIo7LcqTT6jpsYgLuU7UMpCe4mCVd">



                    <div class="row">
                        <div class="gap-3 col-md-9">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="form-body">




                                        <div class="mb-3 position-relative">

                                            <label for="name" class="form-label required">Name</label>


                                            <input class="form-control" data-counter="250" placeholder="Name"
                                                required="required" name="name" type="text" id="name"
                                                aria-required="true">




                                        </div>





                                        <div class="mb-3 position-relative">

                                            <label for="description" class="form-label">Description</label>


                                            <textarea class="form-control" data-counter="400" rows="4" placeholder="Short description" name="description"
                                                cols="50" id="description"></textarea>




                                        </div>




                                        <div class="row">








                                            <div class="form-group mb-3 col-md-6">

                                                <label for="price" class="form-label">Price</label>

                                                <input class="form-control input-mask-number" id="price-number"
                                                    placeholder="Price" data-thousands-separator=","
                                                    data-decimal-separator="." name="price" type="text"
                                                    im-insert="true">



                                            </div>




                                            <div class="form-group mb-3 col-md-6">

                                                <label for="currency_id" class="form-label">Currency</label>


                                                <select
                                                    class="form-control select-full form-select select2-hidden-accessible"
                                                    id="currency_id" name="currency_id"
                                                    data-select2-id="select2-data-currency_id" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option value="1" data-select2-id="select2-data-2-oed8">USD
                                                    </option>
                                                    <option value="2">EUR</option>
                                                    <option value="3">VND</option>
                                                </select><span class="select2 select2-container select2-container--default"
                                                    dir="ltr" data-select2-id="select2-data-1-7z5k"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-currency_id-container"
                                                            aria-controls="select2-currency_id-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-currency_id-container" role="textbox"
                                                                aria-readonly="true" title="USD">USD</span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>




                                            </div>




                                        </div>








                                        <div class="row">








                                            <div class="form-group mb-3 col-md-4">

                                                <label for="percent_save" class="form-label">Percent
                                                    save</label>

                                                <input class="form-control input-mask-number" id="percent-save-number"
                                                    placeholder="Percent save" name="percent_save" type="text"
                                                    im-insert="true">



                                            </div>




                                            <div class="form-group mb-3 col-md-4">

                                                <label for="number_of_listings" class="form-label">Number of
                                                    listings</label>

                                                <input class="form-control input-mask-number" id="price-number"
                                                    placeholder="Number of listings" name="number_of_listings"
                                                    type="text" im-insert="true">



                                            </div>




                                            <div class="form-group mb-3 col-md-4">

                                                <label for="account_limit" class="form-label">Limit purchase by
                                                    account</label>

                                                <input class="form-control input-mask-number" id="percent-save-number"
                                                    placeholder="An account can purchase x times" name="account_limit"
                                                    type="text" im-insert="true">



                                            </div>




                                        </div>








                                        <div class="mb-3 position-relative">



                                            <label class="form-check form-switch ">
                                                <input name="is_default" type="hidden" value="0">
                                                <input class="form-check-input" name="is_default" type="checkbox"
                                                    value="1" id="is_default">

                                                <span class="form-check-label">Is default?</span>
                                            </label>




                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="features" class="form-label">Features</label>


                                            <input name="features" type="hidden" value="[]">

                                            <div class="repeater-group"
                                                id="repeater_field_9f034b63948763d489f944319c2eb3de_66a50cea61175_group"
                                                data-next-index="0">
                                            </div>

                                            <div class="mb-3">
                                                <button class="btn" type="button" data-target="repeater-add"
                                                    data-id="repeater_field_9f034b63948763d489f944319c2eb3de_66a50cea61175">
                                                    Add new
                                                </button>
                                            </div>

                                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                            <script type="text/x-custom-template" id="repeater_field_9f034b63948763d489f944319c2eb3de_66a50cea61175_template">
<fieldset data-id="repeater_field_9f034b63948763d489f944319c2eb3de_66a50cea61175___key__" data-index="__key__" class="form-fieldset position-relative">
<div data-target="fields">__fields__</div>

<button
class="btn btn-icon  btn-sm position-absolute remove-item-button" type="button" data-target="repeater-remove" data-id="repeater_field_9f034b63948763d489f944319c2eb3de_66a50cea61175___key__"
>
            <svg class="icon icon-sm icon-left"
xmlns="http://www.w3.org/2000/svg"
width="24"
height="24"
viewBox="0 0 24 24"
fill="none"
stroke="currentColor"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
>
<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
<path d="M18 6l-12 12" />
<path d="M6 6l12 12" />
</svg>            

</button>
</fieldset>
</script>

                                            <script type="text/x-custom-template" id="repeater_field_9f034b63948763d489f944319c2eb3de_66a50cea61175_fields">
&lt;div class=&quot;repeater-item-group&quot;&gt;
&lt;div class=&quot;mb-3 position-relative&quot;&gt;
&lt;label class=&quot;form-label&quot;&gt;
Title


&lt;/label&gt;

&lt;input name=&quot;features[__key__][0][key]&quot; type=&quot;hidden&quot; value=&quot;text&quot;&gt;

&lt;input class=&quot;form-control&quot; data-counter=&quot;255&quot; placeholder=&quot;Ex: 60-Day Job Postings&quot; id=&quot;repeater_field_0699a0974a12103acbd3426a0d70f939_66a50cea607f6&quot; name=&quot;features[__key__][0][value]&quot; type=&quot;text&quot;&gt;
&lt;/div&gt;

&lt;/div&gt;
</script>




                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="order" class="form-label">Order</label>

                                            <input class="form-control" placeholder="Order by" name="order"
                                                type="number" value="0" id="order">



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
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2">
                                                </path>
                                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M14 4l0 4l-6 0l0 -4"></path>
                                            </svg>
                                            Save

                                        </button>

                                        <button class="btn" type="submit" name="submitter" value="save">
                                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 18v3h16v-14l-8 -4l-8 4v3"></path>
                                                <path d="M4 14h9"></path>
                                                <path d="M10 11l3 3l-3 3"></path>
                                            </svg>
                                            Save &amp; Exit

                                        </button>


                                    </div>
                                </div>
                            </div>

                            <div data-bb-waypoint="" data-bb-target="#form-actions"></div>

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
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2">
                                                            </path>
                                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                            <path d="M14 4l0 4l-6 0l0 -4"></path>
                                                        </svg>
                                                        Save

                                                    </button>

                                                    <button class="btn" type="submit" name="submitter"
                                                        value="save">
                                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 18v3h16v-14l-8 -4l-8 4v3"></path>
                                                            <path d="M4 14h9"></path>
                                                            <path d="M10 11l3 3l-3 3"></path>
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
                                        name="status" aria-required="true">
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
                        <div class="order-1 order-lg-2">
                            Page loaded in 1.12 seconds
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
