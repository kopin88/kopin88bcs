@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
        <div class="card">
        	<div class="card-header" data-background-color="green">
        		<h4 class="title">ရည်ရွည်ချက်</h4>
        		{{-- <p class="category">Here is a subtitle for this table</p> --}}
        	</div>
          <div class="card-content">
            <div class="text-center text-primary">
              <h1><img src="/uploads/images/banar.jpg" alt="" style="width:150px; height:150px"> ဘာညာအာပလာ</h1>
            </div>
        	</div>
        </div>
@endsection
