@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  @foreach (Auth::user()->roles as $key => $navrole)
    @if ($navrole->name == "Administrator")
      @include('personals.positions._positions')
    @elseif ($navrole->name == "Personal Manager")
      @include('personals.positions._positions')
    @elseif ($navrole->name == "Personal Write")
      @include('personals.positions._positions')
    @elseif($navrole->name == "Personal Read")
      @include('personals.positions._positions')
    @endif
  @endforeach
@endsection
