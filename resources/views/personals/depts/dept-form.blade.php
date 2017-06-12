{!! Form::open(['route'=>'depts.store', 'method'=>'POST']) !!}

       @include('kopin.errors')

      <div class="card-content">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
                {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'ဌာနအမည်', 'required'=>'required', 'autofocus'=>'autofocus'])!!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} label-floating has-success">
                {!!Form::textarea("description", null, ['class'=>'form-control', 'placeholder'=>'အကြောင်းအရာ', 'rows'=>'2'])!!}
                <small class="text-danger">{{ $errors->first('description') }}</small>
            </div>
        @include('kopin.button-add')
      </div>

{!!Form::close()!!}
