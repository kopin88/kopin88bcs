{!! Form::model($position_type, ['route'=>['position_types.update','id'=>$position_type->id],'method'=>'PATCH', 'files'=>true]) !!}

<div class="modal fade" id="PositionTypeEdit{{ $position_type->id }}" tabindex="-1" role="dialog" aria-labelledby="PositionTypeEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-primary" id="PositionTypeEdit">{{ $position_type->name }} ပြင်ရန်</h4>
      </div><hr>
      <div class="modal-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
            {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'ရာထူးအမည်', 'required'=>'required'])!!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>
       <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} label-floating has-success">
          {!!Form::textarea("description", null, ['class'=>'form-control', 'placeholder'=>'အကြောင်းအရာ', 'rows'=>'2'])!!}
           <small class="text-danger">{{ $errors->first('description') }}</small>
       </div>
      </div>
      <hr>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div>

{!!Form::close()!!}
