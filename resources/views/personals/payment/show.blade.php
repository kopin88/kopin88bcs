@extends('layouts.app')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
        <div class="card">
          <div class="card-header" data-background-color="green">
            {{-- <h3 class="title">စက်မှုလယ်ယာဦးစီးဌာန <br> --}}
            <small class="" style="font-size:1.2em">{{$personal->name}}၏ {{$fyear->name}} ဘဏ္ဍာရေးနှစ် လစာပေးမှတ်တမ်း
</small>
          </div>
          <div class="card-content">
            @include('personals.payment.table')
          </div>
          <div class="card-footer">
            <a class="text-success" href="{{ route('payments.index', $personal->id) }}">
              <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
                နောက်သို့
            </a>
          </div>
        </div>
@endsection
