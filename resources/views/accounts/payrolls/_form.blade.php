<div class="col-xs-12">
  <div class="row">
    <div class="col-xs-8">
      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} label-floating has-success">
          {!! Form::label('description', 'အကြောင်းအရာ', ['class'=>'pull-left']) !!}
          {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required', 'autofocus'=>'autofocus', 'rows'=>'1']) !!}
          <small class="text-danger">{{ $errors->first('description') }}</small>
      </div>
    </div>
    <div class="col-xs-3 col-xs-offset-1">
      <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }} label-floating has-success">
      {!! Form::label('amount', 'ငွေပမာဏ', ['class'=>'pull-left']) !!}
      {!! Form::number('amount', null, ['class' => 'form-control', 'required' => 'required']) !!}
      <small class="text-danger">{{ $errors->first('amount') }}</small>
    </div>
    </div>
  </div>
</div>
