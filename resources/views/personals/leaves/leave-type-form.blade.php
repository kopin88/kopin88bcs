{!! Form::open(['route'=>'leave_types.store', 'method'=>'POST']) !!}

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
        {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'ခွင့်အမျိုးအစား အမည်', 'required'=>'required', 'autofocus'=>'autofocus'])!!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>
    <div class="form-group{{ $errors->has('day') ? ' has-error' : '' }} label-floating has-success">
        {!!Form::number("day", null, ['class'=>'form-control', 'placeholder'=>'ရက် (only number)'])!!}
        <small class="text-danger">{{ $errors->first('day') }}</small>
    </div>
 @include('kopin.button-add')
</div>

{!!Form::close()!!}
