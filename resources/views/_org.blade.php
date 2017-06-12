@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
        <div class="card">
        	<div class="card-header" data-background-color="green">
        		<h4 class="title">ဖွဲ့စည်းပုံ</h4>
        		{{-- <p class="category">Here is a subtitle for this table</p> --}}
        	</div>
          <div class="card-content">
            <div class="text-center text-primary">
                <h1>၂၀၀၈ ဖွဲ့စည်းပုံအခြေခံဥပဒေ <img src="/uploads/images/laugh-icon.png" alt="" style="width:150px; height:150px"></h1>
            </div>
        	</div>
        </div>
@endsection
