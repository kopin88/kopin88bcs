<div class="card card-stats">
    <div class="row">
      <div class="col-md-6">
        <div class="card-header" data-background-color="green">
          <h4 class="title">ဝန်ထမ်းများ၏ ကိုယ်ရေးမှတ်တမ်းများ</h4>
          <p class="category">ဝန်ထမ်းရေးရာ</p>
          {{-- <i class="material-icons">account_circle</i>
            <p><strong>ကိုယ်ရေးမှတ်တမ်းများ</strong></p> --}}
        </div>
      </div>
      <div class="col-md-push-3 col-md-3">
        {!! Form::open(['route'=>'personals.index', 'method'=>'GET', 'role'=>'search']) !!}
          <div class="form-group input-group label-floating has-success pull-right" style="margin-right:20px">
            {!!Form::text('term', Request::get('term'), ['class'=>'form-control input-md', 'placeholder'=>'Search ...', 'id'=>'term'])!!}
            <span class="input-group-btn"></span>
            <button type="submit" class="btn btn-success btn-round btn-just-icon">
              <i class="material-icons">search</i><div class="ripple-container"></div>
            </button>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
    <div class="card-content">
      @include('personals.list-form')
    </div>
    <div class="card-content text-center">
      <nav>
        {!! $personals->appends( Request::query() )->render() !!}
      </nav>
    </div>
  </div>
