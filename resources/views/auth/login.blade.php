<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MOAI</title>
    {{-- <title>{{ config('app.name', 'kopin88') }}</title> --}}

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    {{-- @include('auth.org-login') --}}

    {{-- @include('auth.sanple-login') --}}

    @include('auth.current')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
