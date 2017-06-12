@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  @foreach (Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    @include('auth._register')
  @elseif ($navrole->name == "User Manager")
    @include('auth._register')
  @endif
  @endforeach
@endsection
