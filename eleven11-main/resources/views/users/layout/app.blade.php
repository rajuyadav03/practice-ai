<!DOCTYPE html>
<html lang="en" class="scroll-smooth system" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport">
    <meta name="csrf-token" content="flKfDEKhhkHBaXzRXq1M1meiATeawxnkl9ZKOLWK">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css" integrity="sha512-/k658G6UsCvbkGRB3vPXpsPHgWeduJwiWGPCGS14IQw3xpr63AEMdA8nMYG2gmYkXitQxDTn6iiK/2fD4T87qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --primary-color: 22 163 74;
            --secondary-color: #15803D;
            --primary-font: 'League Spartan', sans-serif;
            --primary-color-rgb: rgba(22, 163, 74, 0.8);
        }
    </style>

    <script>
        window.defaultThemeMode = "system";
    </script>

    <title>Registration</title>
    <meta name="description" content="A great platform to buy, sell and rent your properties without any agent or commissions.">
    <meta property="og:site_name" content="Hously">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Login">
    <meta name="twitter:title" content="Login">

    <link rel="shortcut icon" type="image/x-icon" href="storage/general/favicon.png">

    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/language/css/language-public.css?v=2.2.0">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/cookie-consent/css/cookie-consent.css?v=1.0.2">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/real-estate/css/front-auth.css">
    <link media="all" type="text/css" rel="stylesheet" href="themes/hously/plugins/tobii/css/tobii.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="themes/hously/plugins/choices.js/css/choices.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="themes/hously/css/icons.css">
    <link media="all" type="text/css" rel="stylesheet" href="themes/hously/css/style.css?v=1.9.5">

    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="vi/feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="ar/feed/posts">
</head>

<body class="dark:bg-slate-900">
    <div id="alert-container"></div>
    @include('users.layout.nav')
    <section class="relative flex items-center overflow-hidden md:h-screen py-36 zoom-image">
        <div class="absolute inset-0 bg-center bg-cover bg-no-repeat image-wrap z-1" style="background-image: url('/img/01.jpg')"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"><canvas class="w-full h-full particles-js-canvas-el" width="2010" height="1612"></canvas></div>
        <div class="container z-3">
            @yield('content')
        </div>
    </section>
    @include('users.layout.footer')

    <button type="button" onclick="topFunction()" id="back-to-top" class="fixed z-10 items-center justify-center hidden text-lg text-center text-white rounded-full bg-primary back-to-top bottom-5 end-5 h-9 w-9" aria-label="Go to top">
        <i class="mdi mdi-arrow-up"></i>
    </button>

    <div class="fixed top-0 start-0 hidden w-full h-full bg-opacity-50 sidebar-backdrop z-9999 bg-dark"></div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script data-pagespeed-no-defer="1" src="themes/hously/plugins/jquery/jquery.min.js"></script>
    <script src="themes/hously/plugins/tobii/js/tobii.min.js"></script>
    <script src="themes/hously/plugins/choices.js/js/choices.min.js"></script>
    <script src="themes/hously/plugins/feather-icons/feather.min.js"></script>
    <script src="themes/hously/plugins/particles.js/particles.js"></script>
    <script src="themes/hously/js/app.js?v=1.9.5"></script>
    <script src="themes/hously/js/script.js?v=1.9.5"></script>
    <script src="vendor/core/core/js-validation/js/js-validation.js"></script>
    <script>
        // jQuery(document).ready(function() {
        //     'use strict';
        //     $("#botble-newsletter-forms-fronts-newsletter-form").each(function() {
        //         $(this).validate({
        //             errorElement: 'div',
        //             errorClass: 'invalid-feedback',

        //             errorPlacement: function(error, element) {
        //                 if (element.closest('[data-bb-toggle="tree-checkboxes"]').length) {
        //                     error.insertAfter(element.closest('[data-bb-toggle="tree-checkboxes"]'));
        //                 } else if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
        //                     error.insertAfter(element.parent());
        //                 } else if ($(element).data('select2')) {
        //                     error.insertAfter(element.next('span'));
        //                 } else {
        //                     error.insertAfter(element);
        //                 }
        //             },

        //             highlight: function(element) {
        //                 $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid');
        //             },


        //             unhighlight: function(element) {
        //                 $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
        //             },

        //             success: function(element) {
        //                 $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
        //             },

        //             focusInvalid: false,

        //             rules: JSON.parse('{\u0022email\u0022:{\u0022laravelValidation\u0022:[[\u0022Required\u0022,[],\u0022The email field is required.\u0022,true],[\u0022Email\u0022,[],\u0022The email must be a valid email address.\u0022,false]],\u0022laravelValidationRemote\u0022:[[\u0022Unique\u0022,[\u0022email\u0022,\u0022eyJpdiI6ImhzM05CdWlVNE5JaVdTRkJ4UFFheFE9PSIsInZhbHVlIjoibHptdFgwaGFLeG00bU9CbHdhclhQcmhPREV1Vm5jN2tDU1lWTm5ra3pVYUR5aWExS0ZMMFhuOXRJZGNDQS9JWXRpUWE3MmM2QUpUQUNtZ20yMWNiSXc9PSIsIm1hYyI6ImQ5Yzc1MDFjMmRkYTczYmE2MDEwZDc3MjY3YWU3ZjU4NzIwMTVlMmJlZmViOTQ2Y2M1MDMwMWI0N2Q0MzQwYmQiLCJ0YWciOiIifQ==\u0022,false],\u0022The email has already been taken.\u0022,false]]},\u0022status\u0022:{\u0022laravelValidation\u0022:[[\u0022In\u0022,[\u0022subscribed\u0022,\u0022unsubscribed\u0022],\u0022The selected status is invalid.\u0022,false]]}}')
        //         });
        //     });
        // });
    </script>
    <script src="vendor/core/plugins/language/js/language-public.js?v=2.2.0"></script>
    <script src="vendor/core/plugins/cookie-consent/js/cookie-consent.js?v=1.0.2"></script>
</body>

</html>