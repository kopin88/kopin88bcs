@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

  @foreach (Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    @include('personals.depts._dept')
  @elseif ($navrole->name == "Personal Manager")
    @include('personals.depts._dept')
  @endif
  @endforeach

@endsection
