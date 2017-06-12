@extends('layouts.app')

  @section('sidebar')
    @include('layouts.sidebar')
  @endsection

  @section('content')
      <div class="col-lg-12 col-md-12">
        <div class="card card-nav-tabs">
          <div class="card-header" data-background-color="green">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">
                  <strong>
                      {{ $month->financial_year->name }} {{ $month->name }} လစာပေးမှတ်တမ်း
                  </strong></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="pull-right">
                    <a href="{{route('accounts.show', $month->id)}}">
                      <strong>ငွေစာရင်း</strong>
                      <i class="fa fa-arrow-circle-o-right  fa-lg" aria-hidden="true"></i>
                      {{-- <i class="material-icons">forward</i> --}}
                      {{-- <div class="ripple-container"></div> --}}
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card-content">
            @include('accounts.payrolls._index-table')
            {{-- <div class="tab-content">
            </div> --}}
          </div>
          <div class="card-footer">
            <a class="text-success" href="{{ route('months.index', $month->financial_year->id) }}">
              <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
                နောက်သို့
            </a>
          </div>
        </div>
      </div>

@endsection
