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
              <span class="nav-tabs-title"><strong>{{ $month->title }}</strong>:</span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="">
                  <a href="#Report" data-toggle="tab">
                    <i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
                    {{-- <i class="material-icons">account_balance</i> --}}
                    <strong>Report</strong>
                  <div class="ripple-container"></div></a>
                </li>

                <li class="active">
                  <a href="#DailyAccount" data-toggle="tab">
                    <i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
                    {{-- <i class="material-icons">code</i> --}}
                    <strong>နေ့စဉ် ရ/သုံး ငွေစာရင်း</strong>
                  <div class="ripple-container"></div></a>
                </li>
                <li class="">
                  <a href="#TitleAccount" data-toggle="tab">
                    <i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
                    {{-- <i class="material-icons">account_balance_wallet</i> --}}
                    {{-- <i class="material-icons">list</i> --}}
                    <strong>ငွေစာရင်းခေါင်းစဉ်အလိုက်</strong>
                  <div class="ripple-container"></div></a>
                </li>
                @foreach(Auth::user()->roles as $key => $navrole)
                	@if ($navrole->name == "Administrator")
                    <li class="pull-right">
                      <a href="#" data-toggle="modal" data-target="#ExpenseCreate">
                          <i class="material-icons">add_circle_outline</i>
                        <strong>အသုံးစရိတ်</strong>
                      <div class="ripple-container"></div>
                    </a>
                    </li>
                    <li class="pull-right">
                      <a href="#" data-toggle="modal" data-target="#IncomeCreate">
                        <i class="material-icons">add_circle_outline</i>
                        <strong>ဝင်ငွေ</strong>
                      <div class="ripple-container"></div>
                    </a>
                    </li>
                	@elseif ($navrole->name == "Account Manager")
                    <li class="pull-right">
                      <a href="#" data-toggle="modal" data-target="#ExpenseCreate">
                          <i class="material-icons">add_circle_outline</i>
                        <strong>အသုံးစရိတ်</strong>
                      <div class="ripple-container"></div>
                    </a>
                    </li>
                    <li class="pull-right">
                      <a href="#" data-toggle="modal" data-target="#IncomeCreate">
                        <i class="material-icons">add_circle_outline</i>
                        <strong>ဝင်ငွေ</strong>
                      <div class="ripple-container"></div>
                    </a>
                    </li>
                	@elseif ($navrole->name == "Account Write")
                    <li class="pull-right">
                      <a href="#" data-toggle="modal" data-target="#ExpenseCreate">
                          <i class="material-icons">add_circle_outline</i>
                        <strong>အသုံးစရိတ်</strong>
                      <div class="ripple-container"></div>
                    </a>
                    </li>
                    <li class="pull-right">
                      <a href="#" data-toggle="modal" data-target="#IncomeCreate">
                        <i class="material-icons">add_circle_outline</i>
                        <strong>ဝင်ငွေ</strong>
                      <div class="ripple-container"></div>
                    </a>
                    </li>
                	@endif
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="tab-content">
            <div id="Report" class="tab-pane">
              @include('accounts.report')
            </div>
            <div class="tab-pane in active" id="DailyAccount">
              <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <a href="#IncomeDetails" class="active" data-toggle="tab" role="tab" style="margin-right:50px;">
                          <i class="material-icons">view_headline</i>
                          <strong>ဝင်ငွေ</strong>
                          <div class="ripple-container"></div>
                        </a>
                        <a href="#ExpenseDetails" data-toggle="tab" role="tab">
                          <i class="material-icons">view_headline</i>
                          <strong>အသုံးစရိတ်</strong>
                        <div class="ripple-container"></div>
                      </a>
                    </div>
              </div>
              <div class="row" style="margin-top:20px;">
                <div class="col-lg-12">
                <div class="tab-content">
                    <div id="IncomeDetails" class="tab-pane fade in active">
                      @include('accounts.incomes.details')
                    </div>
                    <div id="ExpenseDetails" class="tab-pane fade">
                      @include('accounts.expenses.details')
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="TitleAccount">
              <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <a href="#GroupIncomeDetails" class="active" data-toggle="tab" role="tab" style="margin-right:50px;">
                          <i class="material-icons">view_headline</i>
                          <strong>ဝင်ငွေ</strong>
                          <div class="ripple-container"></div>
                        </a>
                        <a href="#GroupExpenseDetails" data-toggle="tab" role="tab">
                          <i class="material-icons">view_headline</i>
                          <strong>အသုံးစရိတ်</strong>
                        <div class="ripple-container"></div>
                      </a>
                    </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                <div class="tab-content">
                    <div id="GroupIncomeDetails" class="tab-pane fade in active">
                      @include('accounts.incomes.group-details')
                    </div>
                    <div id="GroupExpenseDetails" class="tab-pane fade">
                      @include('accounts.expenses.group-details')
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
@section('additional')
  {{-- @include('accounts.payrolls.create') --}}
  @include('accounts.expenses._create')
  @include('accounts.incomes._create')
@endsection
