<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Listian</title>
    <link rel="icon" type="image/png" href="{{ asset('user_assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>
    {{ $slot }}

    <!--jquery library js-->
    <script src="{{ asset('user_assets/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('user_assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('user_assets/js/Font-Awesome.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('user_assets/js/slick.min.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('user_assets/js/venobox.min.js') }}"></script>
    <!--counter js-->
    <script src="{{ asset('user_assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/jquery.countup.min.js') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('user_assets/js/select2.min.js') }}"></script>
    <!--isotope js-->
    <script src="{{ asset('user_assets/js/isotope.pkgd.min.js') }}"></script>
    <!--summer_note js-->
    <script src="{{ asset('user_assets/js/summernote.min.js') }}"></script>
    <!--select js-->
    <script src="{{ asset('user_assets/js/jquery.nice-select.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('user_assets/js/main.js') }}"></script>
</body>

</html>
