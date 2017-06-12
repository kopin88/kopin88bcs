@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
	@foreach (Auth::user()->roles as $key => $user_role)
		@if ($user_role->name == "Administrator")
			@include('personals._show')
		@elseif ($user_role->name == "Personal Manager")
			@include('personals._show')
		@elseif($user_role->name == "Personal Write")
			@include('personals._show')
		@elseif($user_role->name == "Personal Read")
			@include('personals._show')  
		@endif        
	@endforeach
@endsection
