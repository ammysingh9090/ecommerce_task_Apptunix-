<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Fonts -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/notify.css') }}"/>    <meta name="csrf-token" content="Hd3EgWZHdO8LHczESrrHCI4lHwP5aT8UHnmw2PsO">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <script src="{{ asset('css/fontawesome.min.css') }}"  type="text/css"></script>

    <link rel="stylesheet" href="{{ asset('css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/argon.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" type="text/css">
    <style>
        .loading-container {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #ffffffc7;
            z-index: 999;
        }
    </style>
</head>

<body class="custom-scollbar">

    @include('dashboard.layouts.sidebar')
    <!-- Main content -->

    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('dashboard.layouts.navbar')
        <!-- Header -->

        @yield('content')

    </div>
    @stack('custom_script')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js" integrity="sha512-5AcaBUUUU/lxSEeEcruOIghqABnXF8TWqdIDXBZ2SNEtrTGvD408W/ShtKZf0JNjQUfOiRBJP+yHk6Ab2eFw3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>


</body>

</html>
