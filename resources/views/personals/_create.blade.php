<div class="card card-chart">
  <div class="col-md-12">
  <div class="row">
    <div class="col-lg-6">
      <div class="card-header" data-background-color="green">
        <h4 class="title"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp ဝန်ထမ်းအသစ်ထည့်ရန်</h4>
          {{-- <h4 class="title">ဝန်ထမ်းများ၏ ကိုယ်ရေးမှတ်တမ်းများ</h4> --}}
        <p class="category">ဝန်ထမ်းရေးရာ</p>
          {{-- <strong>ကိုယ်ရေးမှတ်တမ်းများ</strong> --}}
      </div>
    </div>
    <div class="col-lg-6">
      {{-- <div class="card-header" data-background-color="green"> --}}
        <div class="card-content pull-right" style="float:right" data-background-color="white">
            <a href="{{ route('personals.index') }}"><button type="button" class="btn btn-success btn-circle btn-round btn-xs"style="padding:3px"><span class="glyphicon glyphicon-list"></span></button></a>
        </div>
      {{-- </div> --}}
    </div>
  </div>
</div>
  <div class="col-md-12">
    <div class="row">
      {!! Form::open(['route'=>'personals.store', 'files'=>true]) !!}
        @include('personals._form')
      {!! Form::close() !!}
    </div>
  </div>
</div>
