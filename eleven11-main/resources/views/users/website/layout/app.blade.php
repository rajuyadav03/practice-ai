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
    <title>Eleven11</title>
    <meta name="description" content="A great platform to buy, sell and rent your properties without any agent or commissions.">
    <link media="all" type="text/css" rel="stylesheet"
    href="{{asset('css\eleven\dropzone.css')}}">
    <meta property="og:site_name" content="Eleven11">
    <meta property="og:type" content="website">
    <style>
        [v-cloak],
        [x-cloak] {
            display: none;
        }
    </style>
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/fontawesome.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet"
    href="https://hously.archielite.com/vendor/core/core/base/libraries/cropper/cropper.min.css?v=1.10.5">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/select2/css/select2.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/css/libraries/select2.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/toastr/toastr.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{{asset('vendor/core/core/base/libraries/flatpickr/flatpickr.min.css?v=1.9.5')}}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/spectrum/spectrum.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/css/core.css?v=1.9.5')}}">
    <link media="all" type="text/css" rel="stylesheet"
    href="https://hously.archielite.com/vendor/core/core/base/libraries/cropper/cropper.min.css?v=1.10.5">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/plugins/language/css/language.css?v=1.9.5')}}">
    <script src="{{asset('vendor/core/core/base/libraries/jquery.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/js/app.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/vue.global.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/js/vue-app.js?v=1.9.5')}}"></script>
    <link href="{{asset('vendor/core/plugins/real-estate/css/dashboard/style.css')}}" rel="stylesheet">
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
                <img src="storage/general/logo-light.png" alt="Eleven11">
            </a>
        </div>
        <div class="header__right">
            <a href="/account/logout" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M9 12h12l-3 -3" />
                    <path d="M18 15l3 -3" />
                </svg> </a>

            <form id="logout-form" style="display: none;" action="account/logout" method="POST">
                <input type="hidden" name="_token" value="ODurMtAQEFEYzA0hp60Kt9NHEuuVSbSDuCcwmABY" autocomplete="off">
            </form>
        </div>
    </header>
    <aside class="ps-drawer--mobile">
        <div class="ps-drawer__header py-3">
            <h4 class="fs-3 mb-0">Menu</h4>
            <button class="ps-drawer__close">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg> </button>
        </div>
        <div class="ps-drawer__content">
            <ul class="menu">
                <li>
                    <a href="account/dashboard" class="active">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg> Dashboard
                    </a>
                </li>
                <li>
                    <a href="account/properties" class="">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                        </svg> Invoices
                    </a>
                </li>
                <li>
                    <a href="account/settings" class="">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg> Settings
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="ps-site-overlay"></div>

    <main class="ps-main">
        
        @include('users.website.layout.sidebar')

        @yield('content')

    </main>

    {{-- <footer>
        <p class="inline-block">Currencies:
            <a href="currency/switch/USD" class="active"><span>USD</span></a>
            -
            <a href="currency/switch/EUR"><span>EUR</span></a>
            -
            <a href="currency/switch/VND"><span>VND</span></a>
        </p>
    </footer> --}}

    <script src="{{asset('vendor/core/plugins/real-estate/js/app.js')}}"></script>
    <script src="{{asset('vendor/core/core/base/js/core-ui.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/excanvas.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/ie8.fix.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/modernizr/modernizr.min.js?v=1.9.5')}}"></script>
    
    <script src="{{asset('js/eleven/dropzone.js')}}"></script>

    <script src="{{asset('vendor/core/core/base/libraries/select2/js/select2.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/flatpickr/flatpickr.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/jquery-cookie/jquery.cookie.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/js/core.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/toastr/toastr.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/jquery-waypoints/jquery.waypoints.min.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/spectrum/spectrum.js?v=1.9.5')}}"></script>
    <script src="{{asset('vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js?v=1.9.5')}}"></script>
    
    <script src="{{asset('js/eleven/fslightbox.js')}}"></script>
    
    <script
    src="{{asset('js/eleven/cropper.min.js')}}"></script>
    
    <script src="{{asset('js/eleven/crop-image.js')}}"></script>

    
    <link media="all" type="text/css" rel="stylesheet"
    href="{{asset('css/eleven/crop-image.css')}}">

    <script src="{{asset('vendor/core/plugins/language/js/language-global.js?v=1.9.5')}}"></script>
    <script src="{{asset('js/eleven/ckeditor.js')}}"></script>
    <script src="{{asset('js/eleven/editor.js')}}"></script>

    <script src="{{asset('vendor/core/plugins/real-estate/js/components.js?v=1.9.5')}}"></script>

    <style>
        .dropzone {
            border-radius: 5px;
            border: 1px dashed rgb(0, 135, 247);
        }

        .dropzone .dz-preview:not(.dz-processing) .dz-progress {
            display: none;
        }

        .dropzone .dz-message {
            margin: 50px 0;
        }

        .dropzone.dz-clickable * {
            cursor: move;
        }
    </style>

    <script>
        'use strict';
        Dropzone.autoDiscover = false;

        $(document).ready(function () {
            var dropzone = new Dropzone('#multiple-upload', {
                previewTemplate: document.querySelector('#preview-template').innerHTML,
                parallelUploads: 1,
                thumbnailHeight: 120,
                thumbnailWidth: 120,
                addRemoveLinks: true,
                filesizeBase: 1000,
                uploadMultiple: true,
                chunking: false,
                forceChunking: true, // forces chunking when file.size < chunkSize
                parallelChunkUploads: false, // allows chunks to be uploaded in parallel (this is independent of the parallelUploads option)
                chunkSize: 1048576, // chunk size 1,000,000 bytes (~1MB)
                retryChunks: true, // retry chunks on failure
                retryChunksLimit: 3, // retry maximum of 3 times (default is 3)
                timeout: 0, // MB,
                maxFilesize: 2, // MB
                maxFiles: 20, // max files upload,
                paramName: 'file',
                acceptedFiles: 'image/*',
                url: 'https://hously.archielite.com/account/ajax/upload',
                sending: function (file, xhr, formData) {
                    formData.append('_token', 'e3RHuiwy2h13XdgtL3uEue8194ovfhpdb4bLUGXq');
                },
                thumbnail: function (file, dataUrl) {
                    if (file.previewElement) {
                        file.previewElement.classList.remove('dz-file-preview');
                        var images = file.previewElement.querySelectorAll('[data-dz-thumbnail]');
                        for (var i = 0; i < images.length; i++) {
                            var thumbnailElement = images[i];
                            thumbnailElement.alt = file.name;
                            thumbnailElement.src = dataUrl;
                        }
                        setTimeout(function () {
                            file.previewElement.classList.add('dz-image-preview');
                        }, 1);

                        if (file.url) {
                            $(file.previewElement).append(
                                '<input type="hidden" name="images[]" value="' + file
                                    .url + '" />');
                        }
                    }
                },
                success: function (file, response) {
                    if (response.error) {
                        Botble.showError(response.message);
                    } else {
                        if (false) {
                            response = JSON.parse(file.xhr.response);
                        }
                    }

                    $(file.previewElement).append(
                        '<input type="hidden" name="images[]" value="' + response.data
                            .url + '" />');

                    $('.dz-sortable').sortable();
                },
                removedfile: function (file) {
                    if (!confirm('Do you want to delete this image?')) {
                        return false;
                    }
                    dropzone.options.maxFiles = dropzone.options.maxFiles + 1;
                    $('.dz-message.needsclick').hide();
                    if (dropzone.options.maxFiles ===
                        20) {
                        $('.dz-message.needsclick').show();
                    }

                    return file.previewElement != null ? file.previewElement.parentNode.removeChild(file
                        .previewElement) : void 0;
                }
            });

        });
    </script>


</body>

</html>