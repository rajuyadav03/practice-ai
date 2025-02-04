<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Eleven11</title>
    <meta name="csrf-token" content="J02BBjUVvPLfxExfCxgu1c08bJlZt4Q8FO2liJgO">
    <link href="" rel="icon shortcut">
    <meta property="og:image" content="">
    <meta name="description" content="Copyright 2024 © Eleven11. Version 1.10.3">
    <meta property="og:description" content="Copyright 2024 © Eleven11. Version 1.10.3">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/eleven/core.css?v=1.10.3')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/eleven/language.css?v=1.10.3')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/admin/login.css')}}">
    <script src="{{asset('js/eleven/jquery.min.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/app.js?v=1.10.3')}}"></script>
</head>
<body class="page-sidebar-closed-hide-logo page-content-white page-container-bg-solid " style="" data-bs-theme="dark">
    <div id="app">
        <div class="row g-0 flex-fill vh-100">
            <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
                <div class="container container-tight my-5 px-lg-5">
                    <div class="text-center mb-4">
                        <a href="" class="navbar-brand">
                            Eleven11
                        </a>
                    </div>
                    <form method="POST" action="{{ route('verify.admin') }}" accept-charset="UTF-8" id="botble-a-c-l-forms-auth-login-form" class="js-base-form dirty-check">
                        @csrf
                        <div class="form-body">
                            <h2 class="h3 text-center mb-3">Sign In Below</h2>
                            <input type="hidden" name="Platform_id" value="2">
                            <div class="mb-3 position-relative">
                                <label class="form-label form-label required" for="username">
                                    Email/Username
                                </label>
                                <input class="form-control is-valid" tabindex="1" placeholder="Enter your email address" required="required" name="email" type="text" value="admin" id="username" aria-required="true" aria-invalid="false" aria-describedby="username-error">
                                <div id="username-error" class="invalid-feedback" style="display: block;"></div>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label required" for="password">
                                    Password
                                    <span class="form-label-description">
                                        <a href="" title="Forgot Password" tabindex="5">Lost your password?</a>
                                    </span>
                                </label>
                            <input class="form-control" type="password" name="password" id="password" required="required" placeholder="Enter your password" tabindex="2" aria-required="true">
                            </div>
                            <label class="form-check">
                                <input type="checkbox" id="remember" name="remember" class="form-check-input" tabindex="3" value="1" checked="">
                                <span class="form-check-label">
                                    Remember me?
                                </span>
                            </label>
                            <div class="form-footer">
                                <x-button>
                                    SignIn
                                </x-button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="position-relative col-12 col-lg-6 col-xl-8 d-none d-lg-block">
                <div class="bg-cover bg-white h-100 min-vh-100" style="background-image: url(/img/2.jpg)"></div>
                <div class="end-0 bottom-0 position-absolute">
                    <div class="text-white me-5 mb-4">
                        <h1 class="mb-1">Your App</h1>
                        <p>Copyright 2024 © Your App. Version <span class="fw-medium">1.10.3</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var BotbleVariables = BotbleVariables || {};

        BotbleVariables.languages = {
            notices_msg: JSON.parse('{\u0022create_success_message\u0022:\u0022Created successfully\u0022,\u0022update_success_message\u0022:\u0022Updated successfully\u0022,\u0022delete_success_message\u0022:\u0022Deleted successfully\u0022,\u0022success_header\u0022:\u0022Success!\u0022,\u0022error_header\u0022:\u0022Error!\u0022,\u0022no_select\u0022:\u0022Please select at least one record to perform this action!\u0022,\u0022processing_request\u0022:\u0022We are processing your request.\u0022,\u0022error\u0022:\u0022Error!\u0022,\u0022success\u0022:\u0022Success!\u0022,\u0022info\u0022:\u0022Info!\u0022,\u0022enum\u0022:{\u0022validate_message\u0022:\u0022The :attribute value you have entered is invalid.\u0022}}'),
        };
    </script>

    <script src="{{asset('js/eleven/core-ui.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/flatpickr.min.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/core.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/jquery.mCustomScrollbar.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/fslightbox.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/js-validation.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/jquery.are-you-sure.js?v=1.10.3')}}"></script>
    <script src="{{asset('js/eleven/language-global.js?v=1.10.3')}}"></script>

    <div id="stack-footer">

        <script>
            jQuery(document).ready(function() {
                'use strict';
                $("#botble-a-c-l-forms-auth-login-form").each(function() {
                    $(this).validate({
                        errorElement: 'div',
                        errorClass: 'invalid-feedback',

                        errorPlacement: function(error, element) {
                            if (element.closest('[data-bb-toggle="tree-checkboxes"]').length) {
                                error.insertAfter(element.closest('[data-bb-toggle="tree-checkboxes"]'));
                            } else if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                                error.insertAfter(element.parent());
                            } else if ($(element).data('select2')) {
                                error.insertAfter(element.next('span'));
                            } else {
                                error.insertAfter(element);
                            }
                        },

                        highlight: function(element) {
                            $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid');
                        },


                        unhighlight: function(element) {
                            $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
                        },

                        success: function(element) {
                            $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
                        },

                        focusInvalid: false,

                        rules: JSON.parse('{\u0022username\u0022:{\u0022laravelValidation\u0022:[[\u0022Required\u0022,[],\u0022The username field is required.\u0022,true],[\u0022String\u0022,[],\u0022The username must be a string.\u0022,false],[\u0022Min\u0022,[\u00224\u0022],\u0022The username must be at least 4 characters.\u0022,false],[\u0022Max\u0022,[\u002230\u0022],\u0022The username must not be greater than 30 characters.\u0022,false]]},\u0022password\u0022:{\u0022laravelValidation\u0022:[[\u0022Required\u0022,[],\u0022The password field is required.\u0022,true],[\u0022String\u0022,[],\u0022The password must be a string.\u0022,false],[\u0022Min\u0022,[\u00226\u0022],\u0022The password must be at least 6 characters.\u0022,false],[\u0022Max\u0022,[\u002260\u0022],\u0022The password must not be greater than 60 characters.\u0022,false]]}}')
                    });
                });
            });
        </script>
    </div>
</body>

</html>