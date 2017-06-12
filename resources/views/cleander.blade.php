<!doctype html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<link href="assets/css/bootstrap-datepicker.css" rel="stylesheet" />
    {{-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> --}}
	{{-- <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet" /> --}}

	{{-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script> --}}
	{{-- <script src="assets/js/bootstrap.js" type="text/javascript"></script> --}}
    {{-- <script src="assets/js/bootstrap-datepicker.js"></script> --}}
		<link rel="stylesheet" href="{{mix('css/app.css')}}">
    <style>
	   body{
	       padding-top: 60px;
	   }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
        	<div class="col-xs-12 col-sm-4">
        		  <div class="controls">
        		      <input class="datepicker form-control" type="text"/>
        		  </div>
        	</div>
    		<div class="col-sm-4">
    			<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
    			    {!! Form::label('date', 'Date') !!}
    			    {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
    			    <small class="text-danger">{{ $errors->first('date') }}</small>
    			</div>
    		</div>
        </div>
    </div>
		<script src="{{mix('js/app.js')}}" type="text/javascript">
		</script>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap-datepicker.js"></script>

	<script type="text/javascript">
	 $('.datepicker').datepicker({
    	 weekStart:1,
    	 color: 'red'
	 });
	</script>
	{{-- <script src="{{mix('js/app.js')}}"></script> --}}
</body>
</html>
