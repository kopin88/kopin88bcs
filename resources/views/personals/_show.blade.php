@if( session('message'))
  <div class="alert alert-success">
    {{ session('message') }}
  </div>
@endif

<div class="col-md-12">
  <div class="card">
    <div class="card-header" data-background-color="green">
      <h4 class="title"><strong>{{ $personal->name }}</strong>  ၏ ကိုယ်ရေးမှတ်တမ်း</h4>
      <p class="category">ဝန်ထမ်းရေးရာ</p>
    </div>
    <div class="panel-body">
      @include('personals.show-fontpage')
      <hr>
      @include('personals.show-detail')
      @include('personals.show-table')
    </div>
    <div class="panel-footer">
      @include('kopin.back-personal')
    </div>
  </div>
</div>
