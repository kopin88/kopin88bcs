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
          <a href="{{ route('personals.index') }}" class="btn btn-success btn-fab btn-fab-mini btn-round"><i class="material-icons">supervisor_account</i></a>
          <a href="{{ route('personals.detail', $personal->id) }}" class="btn btn-success btn-fab btn-fab-mini btn-round"><i class="material-icons">library_add</i></a>
        </div>
      {{-- </div> --}}
    </div>
  </div>
</div>
  <div class="col-md-12">
    <div class="row">
      {!! Form::model($personal, ['files'=>true,  'method'=>'PATCH','route'=>['personals.update', $personal->id]]) !!}
        @include('personals._form-edit')
      {!! Form::close() !!}
    </div>
  </div>
</div>
