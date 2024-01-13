<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('Blog', 'Laravel') }}</title>

    <!-- AdminLTE styles -->
    <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/dist/css/adminlte.min.css') }}">
    <!-- Additional styles if needed -->

    <!-- Laravel styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Your Laravel content here -->
    </div>

    <!-- AdminLTE scripts -->
    <script src="{{ asset('node_modules/admin-lte/dist/js/adminlte.min.js') }}"></script>
    <!-- Additional scripts if needed -->

    <!-- Laravel scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
