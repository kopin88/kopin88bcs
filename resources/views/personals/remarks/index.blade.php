<?php
  if (Request::is('personals/transfer/list') ) {
    $remark = "ပြောင်းရွေ့";
  }elseif (Request::is('personals/resign/list') ) {
    $remark = "နှုတ်ထွက်/ရပ်နား";
  }elseif (Request::is('personals/pension/list') ) {
    $remark = "ပင်စင်";
  }
 ?>

@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('title')
  - {{$remark}}
@endsection

@section('content')
    <div class="card card-stats">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-header" data-background-color="green">
            <h4 class="title">
              {{$remark}}ဝန်ထမ်းများ၏ ကိုယ်ရေးမှတ်တမ်းများ</h4>
            <p class="category">ဝန်ထမ်းရေးရာ</p>
            {{-- <i class="material-icons">account_circle</i>
              <p><strong>ကိုယ်ရေးမှတ်တမ်းများ</strong></p> --}}
          </div>
        </div>
        <div class="col-md-push-3 col-md-3">
          @include('personals.remarks.search')
        </div>
      </div>
      <div class="card-content">
        @include('personals.remarks.remark-form')
      </div>
      <div class="card-content text-center">
        <nav>
          {{-- {{ $personals->links() }} --}}
        </nav>
      </div>
    </div>
@endsection
