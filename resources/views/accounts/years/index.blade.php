@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  @foreach (Auth::user()->roles as $key => $navrole)
    @if ($navrole->name == "Administrator")
      @include('accounts.years._index')
    @elseif ($navrole->name == "Account Manager")
      @include('accounts.years._index')
    @elseif ($navrole->name == "Account Write")
      @include('accounts.years._index')
    @elseif ($navrole->name == "Account Read")
      @include('accounts.years._index')
    @endif
  @endforeach

@endsection
