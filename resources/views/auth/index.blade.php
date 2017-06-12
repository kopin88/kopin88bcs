@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

  @foreach (Auth::user()->roles as $key => $navrole)
    @if ($navrole->name =="Administrator")
      @include('auth._user-table')
    @elseif ($navrole->name =="User Manager")
      @include('auth._user-table')
    @endif
  @endforeach
  
@endsection
