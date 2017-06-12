@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

  @foreach (Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    @include('accounts.income-heads._index')
  @elseif ($navrole->name == "Account Manager")
    @include('accounts.income-heads._index')
  @elseif ($navrole->name == "Account Write")
    @include('accounts.income-heads._index')
  @endif
  @endforeach

@endsection
