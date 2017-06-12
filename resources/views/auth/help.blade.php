@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
        <div class="card">
        	<div class="card-header" data-background-color="green">
        		<h4 class="title">အသုံးပြုသူ(User Account) အသုံးပြုပုံ</h4>
        		{{-- <p class="category">Here is a subtitle for this table</p> --}}
        	</div>
          <div class="card-content">
            <div class="">
              @include('auth._help')
            </div>
        	</div>
        </div>
@endsection
