@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

  @foreach (Auth::user()->roles as $key => $user_role)
    @if ($user_role->name == "Administrator")
      @include('personals.leaves._leave-year')
    @elseif ($user_role->name == "Personal Manager")
      @include('personals.leaves._leave-year')
    @endif
  @endforeach

@endsection
