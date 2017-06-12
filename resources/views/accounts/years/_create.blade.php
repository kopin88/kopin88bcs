<div class="col-lg-4 col-md-6">
  <div class="card">
    <div class="card-header" data-background-color="green">
      <h4 class="title">နှစ် အသစ်ထည့်ရန်</h4>
      <p class="category">ငွေစာရင်း</p>
    </div>
    <div class="card-content">
      {!! Form::open(['method' => 'POST', 'route' => 'financial_years.store', 'class' => 'form-horizontal']) !!}
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <div class="card-content">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'နှစ်/ဘဏ္ဍာရေးနှစ်', 'required' => 'required', 'autofocus'=>'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
          </div>
          {{-- <div class="modal-content"> --}}
            {{-- <div class="modal-footer"> --}}
              @include('kopin.button-add')
            {{-- </div> --}}
          {{-- </div> --}}



      {!! Form::close() !!}

    </div>
  </div>
</div>
