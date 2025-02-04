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
                                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Blog</h1>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/admin/post">Posts</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Create new post</h1>
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
            <form method="POST" action="https://hously.archielite.com/admin/blog/posts/create"
                accept-charset="UTF-8" id="botble-blog-forms-post-form" class="js-base-form dirty-check">
                       @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="card mb-3">
                            <div class="card-header">
                                <ul data-bs-toggle="tabs" class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a href="#tabs-detail" class="nav-link active" data-bs-toggle="tab">

                                            Detail
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#tab_history">Revision History </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tabs-detail">
                                        <div class="mb-3 position-relative">

                                            <label for="name" class="form-label required">Name</label>


                                            <input class="form-control" data-counter="250"
                                                placeholder="Name" required="required" name="name"
                                                type="text" id="name">




                                        </div>





                                        <input type="hidden" name="model" value="Botble\Blog\Models\Post">

                                        <div class="mb-3 ">
                                            <div class="slug-field-wrapper" data-field-name="name">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label required" for="slug">
                                                        Permalink
                                                    </label>

                                                    <div class="input-group input-group-flat">

                                                        <span class="input-group-text">
                                                            https://hously.archielite.com/news/
                                                        </span>

                                                        <input class="form-control ps-0" type="text"
                                                            name="slug" id="slug" required="required" />


                                                        <span class="input-group-text slug-actions">
                                                            <a href="#" class="link-secondary d-none"
                                                                data-bs-toggle="tooltip"
                                                                aria-label="Generate URL"
                                                                data-bs-original-title="Generate URL"
                                                                data-bb-toggle="generate-slug">
                                                                <svg class="icon"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M6 21l15 -15l-3 -3l-15 15l3 3" />
                                                                    <path d="M15 6l3 3" />
                                                                    <path
                                                                        d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                                                                    <path
                                                                        d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                                                                </svg> </a>
                                                        </span>

                                                    </div>
                                                </div>
                                                <input class="slug-current" name="slug" type="hidden"
                                                    value="">
                                                <div class="slug-data"
                                                    data-url="https://hously.archielite.com/ajax/slug/create"
                                                    data-view="https://hously.archielite.com/news/"
                                                    data-id="0"></div>
                                                <input name="slug_id" type="hidden" value="0">
                                                <input name="is_slug_editable" type="hidden" value="1">
                                            </div>


                                        </div>




                                        <div class="mb-3 position-relative">

                                            <label for="description" class="form-label">Description</label>


                                            <textarea class="form-control" data-counter="400" rows="4"
                                                placeholder="Short description" name="description" cols="50"
                                                id="description"></textarea>




                                        </div>




                                        <div class="mb-3 position-relative">



                                            <label class="form-check form-switch ">
                                                <input name="is_featured" type="hidden" value="0" />
                                                <input class="form-check-input" name="is_featured"
                                                    type="checkbox" value="1" id="is_featured" />

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

                                                <button class="btn   btn_gallery" type="button"
                                                    data-result="content" data-multiple="true"
                                                    data-action="media-insert-ckeditor">
                                                    <svg class="icon icon-left"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M15 8h.01" />
                                                        <path
                                                            d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                                                        <path
                                                            d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                                        <path
                                                            d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                                    </svg>
                                                    Add media

                                                </button>

                                                <button class="btn   add_shortcode_btn_trigger"
                                                    type="button" data-bb-toggle="shortcode-list-modal"
                                                    data-result="content">

                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                                        <path d="M12 12l8 -4.5" />
                                                        <path d="M12 12l0 9" />
                                                        <path d="M12 12l-8 -4.5" />
                                                    </svg>
                                                    UI Blocks

                                                </button>

                                            </div>



                                            <textarea
                                                class="form-control form-control editor-ckeditor ays-ignore"
                                                data-counter="100000" rows="4"
                                                placeholder="Write your content" with-short-code
                                                id="content" name="content" cols="50"></textarea>




                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_history">
                                        <div class="mb-3">
                                            <table class="table table-bordered table-striped" id="table">
                                                <thead>
                                                    <tr>
                                                        <th>Author</th>
                                                        <th>Column</th>
                                                        <th>Origin</th>
                                                        <th>After changes</th>
                                                        <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td colspan="5">No record</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="advanced-sortables" class="meta-box-sortables">
                            <div class="card meta-boxes mb-3" id="faq_schema_config_wrapper">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        FAQ schema configuration (<a
                                            href="https://developers.google.com/search/docs/data-types/faqpage"
                                            target="_blank" rel="noreferrer noopener">Learn more</a>)
                                    </h4>
                                </div>

                                <div class="card-body">
                                    <div class="faq-schema-items">
                                        <input name="faq_schema_config" type="hidden" value="[]">

                                        <div class="repeater-group"
                                            id="repeater_field_87fbb392676c2e40c750bdd1139f90ef_66a39128c4702_group"
                                            data-next-index="0">
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn" type="button" data-target="repeater-add"
                                                data-id="repeater_field_87fbb392676c2e40c750bdd1139f90ef_66a39128c4702">

                                                Add new

                                            </button>
                                        </div>

                                        <script data-cfasync="false"
                                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                        <script type="text/x-custom-template"
                                            id="repeater_field_87fbb392676c2e40c750bdd1139f90ef_66a39128c4702_template">
<fieldset data-id="repeater_field_87fbb392676c2e40c750bdd1139f90ef_66a39128c4702___key__" data-index="__key__" class="form-fieldset position-relative">
<div data-target="fields">__fields__</div>

<button
class="btn btn-icon  btn-sm position-absolute remove-item-button" type="button" data-target="repeater-remove" data-id="repeater_field_87fbb392676c2e40c750bdd1139f90ef_66a39128c4702___key__"
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

                                        <script type="text/x-custom-template"
                                            id="repeater_field_87fbb392676c2e40c750bdd1139f90ef_66a39128c4702_fields">
&lt;div class=&quot;repeater-item-group&quot;&gt;
&lt;div class=&quot;mb-3 position-relative&quot;&gt;
&lt;label class=&quot;form-label&quot;&gt;
Question


&lt;/label&gt;

&lt;input name=&quot;faq_schema_config[__key__][0][key]&quot; type=&quot;hidden&quot; value=&quot;question&quot;&gt;

&lt;textarea class=&quot;form-control&quot; data-counter=&quot;1000&quot; rows=&quot;1&quot; id=&quot;repeater_field_4195a6534ca91e021fd4817756a369d8_66a39128c3738&quot; name=&quot;faq_schema_config[__key__][0][value]&quot; cols=&quot;50&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3 position-relative&quot;&gt;
&lt;label class=&quot;form-label&quot;&gt;
Answer


&lt;/label&gt;

&lt;input name=&quot;faq_schema_config[__key__][1][key]&quot; type=&quot;hidden&quot; value=&quot;answer&quot;&gt;

&lt;textarea class=&quot;form-control&quot; data-counter=&quot;1000&quot; rows=&quot;1&quot; id=&quot;repeater_field_9cb601304784557f03269fb31d3ffee1_66a39128c3fe7&quot; name=&quot;faq_schema_config[__key__][1][value]&quot; cols=&quot;50&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;

&lt;/div&gt;
</script>

                                    </div>

                                    <div class="d-inline">
                                        <span>or</span>
                                        <a href="javascript:void(0)" data-bb-toggle="select-from-existing">
                                            Select from existing FAQs
                                        </a>
                                    </div>

                                    <div class="existing-faq-schema-items mt-2" style="display: none;">
                                        <div class="position-relative" data-bb-toggle="dropdown-checkboxes"
                                            data-name="selected_existing_faqs[]"
                                            data-selected-text="selected"
                                            data-placeholder="Select an option">
                                            <span class="form-select text-truncate">Select an option</span>


                                            <input type="text" class="form-select" placeholder="Search..."
                                                style="display: none">

                                            <div class="dropdown-menu dropdown-menu-end w-100">
                                                <div data-bb-toggle="tree-checkboxes">
                                                    <ul class="list-unstyled p-3 pb-0">
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-1"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="1">

                                                                <span class="form-check-label">
                                                                    Where does it come from?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-2"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="2">

                                                                <span class="form-check-label">
                                                                    How JobBox Work?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-3"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="3">

                                                                <span class="form-check-label">
                                                                    What is your shipping policy?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-4"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="4">

                                                                <span class="form-check-label">
                                                                    Where To Place A FAQ Page
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-5"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="5">

                                                                <span class="form-check-label">
                                                                    Why do we use it?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-6"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="6">

                                                                <span class="form-check-label">
                                                                    Where can I get some?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-7"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="7">

                                                                <span class="form-check-label">
                                                                    Where does it come from?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-8"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="8">

                                                                <span class="form-check-label">
                                                                    How JobBox Work?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-9"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="9">

                                                                <span class="form-check-label">
                                                                    What is your shipping policy?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-10"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="10">

                                                                <span class="form-check-label">
                                                                    Where To Place A FAQ Page
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-11"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="11">

                                                                <span class="form-check-label">
                                                                    Why do we use it?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-12"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="12">

                                                                <span class="form-check-label">
                                                                    Where can I get some?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-13"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="13">

                                                                <span class="form-check-label">
                                                                    Where does it come from?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-14"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="14">

                                                                <span class="form-check-label">
                                                                    How JobBox Work?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-15"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="15">

                                                                <span class="form-check-label">
                                                                    What is your shipping policy?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-16"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="16">

                                                                <span class="form-check-label">
                                                                    Where To Place A FAQ Page
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-17"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="17">

                                                                <span class="form-check-label">
                                                                    Why do we use it?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-18"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="18">

                                                                <span class="form-check-label">
                                                                    Where can I get some?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-19"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="19">

                                                                <span class="form-check-label">
                                                                    Where does it come from?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-20"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="20">

                                                                <span class="form-check-label">
                                                                    How JobBox Work?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-21"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="21">

                                                                <span class="form-check-label">
                                                                    What is your shipping policy?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-22"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="22">

                                                                <span class="form-check-label">
                                                                    Where To Place A FAQ Page
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-23"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="23">

                                                                <span class="form-check-label">
                                                                    Why do we use it?
                                                                </span>

                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="form-check">
                                                                <input type="checkbox"
                                                                    id="selected-existing-faqs-item-24"
                                                                    name="selected_existing_faqs[]"
                                                                    class="form-check-input" value="24">

                                                                <span class="form-check-label">
                                                                    Where can I get some?
                                                                </span>

                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card meta-boxes mb-3" id="seo_wrap">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Search Engine Optimize
                                    </h4>

                                    <div class="card-actions"><a href="#"
                                            class="btn-trigger-show-seo-detail">
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
                                                <span style="color: #70757a;">Jul 26, 2024
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


                                            <input class="form-control" data-counter="70"
                                                placeholder="SEO Title" data-allow-over-limit
                                                name="seo_meta[seo_title]" type="text"
                                                id="seo_meta[seo_title]">




                                        </div>



                                        <div class="mb-3 position-relative">

                                            <label for="seo_meta[seo_description]" class="form-label">SEO
                                                description</label>


                                            <textarea class="form-control" data-counter="160" rows="3"
                                                placeholder="SEO description" data-allow-over-limit
                                                name="seo_meta[seo_description]" cols="50"
                                                id="seo_meta[seo_description]"></textarea>




                                        </div>



                                        <div class="mb-3 position-relative">

                                            <label for="seo_meta_image" class="form-label">SEO image</label>


                                            <div class="image-box image-box-seo_meta_image"
                                                action="select-image" data-counter="250">
                                                <input class="image-data" name="seo_meta_image"
                                                    type="hidden" value="" class="" data-counter="250" />


                                                <div style="width: 8rem" class="preview-image-wrapper mb-1">
                                                    <div class="preview-image-inner">
                                                        <a data-bb-toggle="image-picker-choose"
                                                            data-target="popup" class="image-box-actions"
                                                            data-result="seo_meta_image"
                                                            data-action="select-image" data-allow-thumb="1"
                                                            href="#">
                                                            <img class="preview-image default-image"
                                                                data-default="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png"
                                                                src="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png"
                                                                alt="Preview image" />
                                                            <span class="image-picker-backdrop"></span>
                                                        </a>
                                                        <button
                                                            class="btn btn-pill btn-icon  btn-sm image-picker-remove-button p-0"
                                                            style="display: none; --bb-btn-font-size: 0.5rem;"
                                                            type="button"
                                                            data-bb-toggle="image-picker-remove"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Remove image">
                                                            <svg class="icon icon-sm icon-left"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round">
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
                                                        type="radio" name="seo_meta[index]" value="index"
                                                        checked>

                                                    <span class="form-check-label">Index</span>
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" id="seo_meta[index]"
                                                        type="radio" name="seo_meta[index]" value="noindex">

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

                        <div data-bb-waypoint data-bb-target="#form-actions"></div>

                        <header class="top-0 w-100 position-fixed end-0 z-1000 vertical-wrapper"
                            id="form-actions" style="display: none;">
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
                                                    <svg class="icon icon-left"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                                        <path
                                                            d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                        <path d="M14 4l0 4l-6 0l0 -4" />
                                                    </svg>
                                                    Save

                                                </button>

                                                <button class="btn" type="submit" name="submitter"
                                                    value="save">
                                                    <svg class="icon icon-left"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2"
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

                            <div class="card-body">
                                <select class="form-control form-select" required="required" id="status"
                                    name="status">
                                    <option value="published">Published</option>
                                    <option value="draft">Draft</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <label for="categories[]" class="form-label">Categories</label>
                                </h4>
                            </div>

                            <div class="card-body">
                                <div data-bb-toggle="tree-checkboxes">
                                    <ul class="list-unstyled ">

                                        <li>
                                            <label class="form-check">
                                                <input type="checkbox" name="categories[]"
                                                    class="form-check-input" value="1">

                                                <span class="form-check-label">
                                                    Design
                                                </span>

                                            </label>

                                        </li>

                                        <li>
                                            <label class="form-check">
                                                <input type="checkbox" name="categories[]"
                                                    class="form-check-input" value="2">

                                                <span class="form-check-label">
                                                    Lifestyle
                                                </span>

                                            </label>

                                        </li>

                                        <li>
                                            <label class="form-check">
                                                <input type="checkbox" name="categories[]"
                                                    class="form-check-input" value="3">

                                                <span class="form-check-label">
                                                    Travel Tips
                                                </span>

                                            </label>

                                        </li>

                                        <li>
                                            <label class="form-check">
                                                <input type="checkbox" name="categories[]"
                                                    class="form-check-input" value="4">

                                                <span class="form-check-label">
                                                    Healthy
                                                </span>

                                            </label>

                                        </li>

                                        <li>
                                            <label class="form-check">
                                                <input type="checkbox" name="categories[]"
                                                    class="form-check-input" value="5">

                                                <span class="form-check-label">
                                                    Travel Tips
                                                </span>

                                            </label>

                                        </li>

                                        <li>
                                            <label class="form-check">
                                                <input type="checkbox" name="categories[]"
                                                    class="form-check-input" value="6">

                                                <span class="form-check-label">
                                                    Hotel
                                                </span>

                                            </label>

                                        </li>

                                        <li>
                                            <label class="form-check">
                                                <input type="checkbox" name="categories[]"
                                                    class="form-check-input" value="7">

                                                <span class="form-check-label">
                                                    Nature
                                                </span>

                                            </label>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <label for="image" class="form-label">Image</label>
                                </h4>
                            </div>

                            <div class="card-body">
                                <div class="image-box image-box-image" action="select-image">
                                    <input class="image-data" name="image" type="hidden" value=""
                                        class="" />


                                    <div style="width: 8rem" class="preview-image-wrapper mb-1">
                                        <div class="preview-image-inner">
                                            <a data-bb-toggle="image-picker-choose" data-target="popup"
                                                class="image-box-actions" data-result="image"
                                                data-action="select-image" data-allow-thumb="1" href="#">
                                                <img class="preview-image default-image"
                                                    data-default="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png"
                                                    src="https://hously.archielite.com/vendor/core/core/base/images/placeholder.png"
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
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M18 6l-12 12" />
                                                    <path d="M6 6l12 12" />
                                                </svg>

                                            </button>
                                        </div>
                                    </div>

                                    <a data-bb-toggle="image-picker-choose" data-target="popup"
                                        data-result="image" data-action="select-image" data-allow-thumb="1"
                                        href="#">
                                        Choose image
                                    </a>

                                    <div data-bb-toggle="upload-from-url">
                                        <span class="text-muted">or</span>
                                        <a href="javascript:void(0)" class="mt-1" data-bs-toggle="modal"
                                            data-bs-target="#image-picker-add-from-url"
                                            data-bb-target=".image-box-image">
                                            Add from URL
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card meta-boxes">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <label for="tag" class="form-label">Tags</label>
                                </h4>
                            </div>

                            <div class="card-body">
                                <input class="form-control tags list-tagify" placeholder="Write some tags"
                                    data-url="https://hously.archielite.com/admin/blog/tags/all" name="tag"
                                    type="text" id="tag">
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
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

    </div>
@endsection
