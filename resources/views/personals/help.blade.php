@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  <div class="card">
  	<div class="card-header" data-background-color="green">
  		<h4 class="title">ဝန်ထမ်းရေးရာ အသုံးပြုပုံ</h4>
  		<p class="category">ဝန်ထမ်းရေးရာ</p>
  	</div>
    <div class="card-content">
      <div class="">
        @include('documentation.personal')
      </div>
  	</div>
  </div>
@endsection
