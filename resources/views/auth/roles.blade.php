@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  @foreach(Auth::user()->roles as $key => $navrole)
  	@if ($navrole->name == "Administrator")
      @include('auth._roles')
  	@elseif ($navrole->name == "User Manager")
      @include('auth._roles')
  	@endif
  @endforeach
@endsection
