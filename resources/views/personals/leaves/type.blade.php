@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

  @foreach (Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    @include('personals.leaves._type')
  @elseif ($navrole->name == "Personal Manager")
    @include('personals.leaves._type')
  @endif
  @endforeach

@endsection
