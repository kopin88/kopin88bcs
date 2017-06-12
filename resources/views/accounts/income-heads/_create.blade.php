{!! Form::open(['route'=>'income_heads.store', 'method'=>'POST']) !!}

       @if( count($errors) )
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $key => $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

      <div class="card-content">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
            {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'အမည်', 'required'=>'required', 'autofocus'=>'autofocus'])!!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>
        <div class="text-center">
          @include('kopin.button-add')
        </div>
      </div>

{!!Form::close()!!}
