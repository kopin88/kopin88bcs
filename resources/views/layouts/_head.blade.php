<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="iCRNiMx87VSAKksvxXspk18BO55gfEKtSXsDTpdw">

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>MOAI @yield('title')</title>
    <!-- Styles -->
    <link href="{{mix('css/app.css') }}" rel="stylesheet">
		<style media="screen">
    .btn-size-xs{
      padding: 3px 3px;
    }
		  @yield('style')
		</style>
    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"iCRNiMx87VSAKksvxXspk18BO55gfEKtSXsDTpdw"}    </script>
</head>
