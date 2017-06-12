@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
<div class="col-md-6">
  <div class="card card-stats">
      <div class="row">
        <div class="col-md-6">
          <div class="card-header" data-background-color="green">
            <strong>လစာပေးမှတ်တမ်း</strong>
            <p class="category">{{ $personal->name }}</p>
          </div>
        </div>
        <div class="col-md-6">
          {!! Form::open(['route'=>['payments.index', $personal->id], 'method'=>'GET', 'role'=>'search']) !!}
            <div class="form-group input-group label-floating has-success pull-right" style="margin-right:20px">
              {!!Form::text('fterm', Request::get('fterm'), ['class'=>'form-control input-md', 'placeholder'=>'Search ...', 'name'=>'fterm'])!!}
              <span class="input-group-btn"></span>
              <button type="submit" class="btn btn-success btn-round btn-just-icon">
                <i class="material-icons">search</i><div class="ripple-container"></div>
              </button>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    <div class="card-content">
      <table class="table table-bordered table-hover tab kopin-font">
        <thead>
          <tr class="bg-success">
            <th class="text-center" width="50px;" style="font-size:1.1em">#</th>
            <th class="text-center" style="font-size:1.1em">ဘဏ္ဍာရေးနှစ်</th>
            <th width="200px;" class="text-center" style="font-size:1.1em">
              အသေးစိတ်ကြည့်ရန်
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($fyears->sortByDesc('id') as $fyear)
          <tr>
            <td class="text-center"><a href="{{ route('payments.show', [$personal->id, $fyear->id]) }}">#</a></td>
            <td class="text-left"><a href="{{ route('payments.show', [$personal->id, $fyear->id]) }}">{{ $fyear->name }}</a></td>
            <td class="text-center">
              <a href="{{ route('payments.show', [$personal->id, $fyear->id]) }}">
               <samp class="glyphicon glyphicon-eye-open"></samp>
             </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        {!! $fyears->appends( Request::query() )->render() !!}
      </div>
    </div>
    <div class="card-footer">
      <a class="text-success" href="{{ url('/personals') }}">
        <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
          နောက်သို့
      </a>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="card card-stats">
      <div class="row">
        <div class="col-md-6">
          <div class="card-header" data-background-color="green">
            <strong>ခွင့်မှတ်တမ်း</strong>
            <p class="category">{{ $personal->name }}</p>
          </div>
        </div>
        <div class="col-md-6">
          {!! Form::open(['route'=>['payments.index', $personal->id], 'method'=>'GET', 'role'=>'search']) !!}
            <div class="form-group input-group label-floating has-success pull-right" style="margin-right:20px">
              {!!Form::text('lterm', Request::get('lterm'), ['class'=>'form-control input-md', 'placeholder'=>'Search ...', 'name'=>'lterm'])!!}
              <span class="input-group-btn"></span>
              <button type="submit" class="btn btn-success btn-round btn-just-icon">
                <i class="material-icons">search</i><div class="ripple-container"></div>
              </button>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    <div class="card-content">
      <table class="table table-bordered table-hover tab kopin-font">
        <thead>
          <tr class="bg-success">
            <th class="text-center" width="50px;" style="font-size:1.1em">#</th>
            <th class="text-center" style="font-size:1.1em">ပြက္ခဒိန် နှစ်</th>
            <th width="200px;" class="text-center" style="font-size:1.1em">
              အသေးစိတ်ကြည့်ရန်
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($leave_years->sortByDesc('id') as $leave_year)
            <tr>
              <td class="text-center">
                <a href="{{ route('leaves.show', [$personal->id, $leave_year->id]) }}">#
                </a>
              </td>
              <td class="text-left">
                <a href="{{ route('leaves.show', [$personal->id, $leave_year->id]) }}">
                  {{ $leave_year->name }}
                </a>
              </td>
              <td class="text-center">
                <a href="{{ route('leaves.show', [$personal->id, $leave_year->id]) }}">
                 <samp class="glyphicon glyphicon-eye-open"></samp>
               </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        {!! $leave_years->appends( Request::query() )->render() !!}
      </div>
    </div>
    <div class="card-footer">
      <a class="text-success" href="{{ url('/personals') }}">
        <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
          နောက်သို့
      </a>
    </div>
  </div>
</div>

{{-- <div class="col-md-6">
  <div class="card">
  	<div class="card-header" data-background-color="green">
      <strong>{{ $personal->name }}၏ ခွင့်မှတ်တမ်း</strong>
    </div>
    <div class="card-content">
      <table class="table table-bordered table-hover tab kopin-font">
        <thead>
          <tr>
            <th class="text-center" width="50px;">စဉ်</th>
            <th class="text-center">နှစ်</th>
            <th width="200px;" class="text-center">
              အသေးစိတ်ကြည့်ရန်
            </th>
          </tr>
        </thead>
        @php
          $no = 1;
        @endphp
        <tbody>
      @foreach ($leave_years->sortByDesc('id') as $leave_year)
        <tr>
          <td class="text-right">{{ $no++ }}</td>
          <td>{{ $leave_year->name }}</td>
          <td class="text-center">
            <a href="{{ route('leaves.show', [$personal->id, $leave_year->id]) }}" class="btn btn-success btn-xs"><samp class="glyphicon glyphicon-eye-open"></samp></a>
          </td>
        </tr>
      @endforeach
    </tbody>
      </table>
    </div>
    <div class="card-footer">
      @php
          foreach (Auth::user()->roles as $key => $user_role){
            $UserRole = $user_role->name;
          }
      @endphp
        <a href="/personals" data-toggle="hover" class="btn btn-success btn-xs" title="နောက်သို့">
        <span class="glyphicon glyphicon-backward"><strong> Back</strong></span>
        </a>
    </div>
  </div>
</div> --}}
@endsection
