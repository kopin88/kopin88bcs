@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

  <div class="card card-nav-tabs">
    <div class="card-header" data-background-color="green">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          {{-- <span class="nav-tabs-title"><strong></strong></span> --}}
          <ul class="nav nav-tabs" data-tabs="tabs">

            <li class="active">
              <a href="#reports" data-toggle="tab">
                {{-- <i class="fa fa-exclamation-circle"></i> --}}
                {{-- <i class="fa fa-exclamation-circle"></i> --}}
                <i class="material-icons">report</i>
                <strong>Reports</strong>
              <div class="ripple-container"></div></a>
            </li>
            <li class="">
              <a href="#fixed" data-toggle="tab">
                {{-- <i class="material-icons">account_balance_wallet</i> --}}
                {{-- <i class="fa fa-wrench"></i> --}}
                <i class="material-icons">build</i>
                <strong>Fixed</strong>
              <div class="ripple-container"></div></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card-content">
      <div class="tab-content">
        <div class="tab-pane in active" id="reports">
          <div class="row">
            <div class="col-lg-12">
              <div class="tab-content">
                @include('reports.report')
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="fixed">
          <div class="row">
            <div class="col-lg-12">
            <div class="tab-content">
                @include('reports.error-fix')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
