@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="card card-nav-tabs">
          <div class="card-header" data-background-color="green">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title"><strong>{{ $month->financial_year->name }} ဘဏ္ဍာရေးနှစ် {{ $month->name }}လ လစာပေးမှတ်တမ်း</strong></span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="pull-right">
                    <a href="#" data-toggle="modal" data-target="#OutPayroll">
                        <i class="material-icons">remove_circle_outline</i>
                      <strong>နှုတ်ဖြတ်</strong>
                    <div class="ripple-container"></div>
                  </a>
                    @include('accounts.payrolls._outcreate')
                  </li>
                  <li class="pull-right">
                    <a href="#" data-toggle="modal" data-target="#InPayroll">
                      <i class="material-icons">add_circle_outline</i>
                      <strong>ရရှိ</strong>
                    <div class="ripple-container"></div>
                  </a>
                    @include('accounts.payrolls._increate')
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-content">
              @include('accounts.payrolls._payroll')
          </div>
          <div class="card-footer">
            <a class="text-success" href="{{ route('payrolls.index', $month->id) }}">
              <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
                နောက်သို့
            </a>
          </div>
        </div>
      </div>
	    <div class="col-md-3" style="margin-top:30px">
				<div class="card card-profile">
					<div class="card-avatar">
						<a href="#">
							{{-- <img class="img" src="../assets/img/faces/marc.jpg" />  <a href="#"> --}}
                   <?php $image = !is_null($personal->image) ? $personal->image : 'default.png' ?>
                   {!! Html::image('uploads/personal_images/' . $image, $personal->name) !!}
                 {{-- </a> --}}
						</a>
					</div>
					<div class="content">
            <h5 class="card-title text-gray">
              <strong>
                {{ $personal->name }}
              </strong><br>
                @foreach ($personal->positions as $key => $position)
                  @if ($loop->last)
                      {{ $position->position_type->name }}
                  @endif
                @endforeach
                <br>
                @foreach ($personal->positions as $key => $position)
                  @if ($loop->last)
                      ({{ $position->dept->name }})
                  @endif
                @endforeach
            </h5>
							<div class="card-content">
							  @include('accounts.payrolls._personal-table')
							</div>
						<a href="#" class="btn btn-primary btn-round">kopoin88</a>
					</div>
				</div>
			</div>
    </div>
  </div>
</div>

@endsection
