@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  @include('personals.remarks._create')

  {{-- @php
      foreach (Auth::user()->roles as $key => $navrole){
        $navroles = $navrole->name;
      }
  @endphp

  @if ($navroles == "Administrator")
    @include('personals.depts._dept')
  @elseif ($navroles == "Personal Manager")
    @include('personals.depts._dept')
  @else
      Sorry!  This page is not fond.
  @endif --}}
@endsection
