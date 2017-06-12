{!! Form::model($leave_type, ['route'=>['leave_types.update','id'=>$leave_type->id],'method'=>'PATCH', 'files'=>true]) !!}

<div class="modal fade" id="LeaveTypeEdit{{ $leave_type->id }}" tabindex="-1" role="dialog" aria-labelledby="LeaveTypeEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-primary" id="LeaveTypeEdit">{{ $leave_type->name }} ဌာန အမည် ပြင်ရန်</h4>
      </div><hr>
      <div class="modal-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
            {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'ခွင့်အမျိုးအစား အမည်', 'required'=>'required'])!!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>
        <div class="form-group{{ $errors->has('day') ? ' has-error' : '' }} label-floating has-success">
            {!!Form::number("day", null, ['class'=>'form-control', 'placeholder'=>'ရက် (only number)'])!!}
            <small class="text-danger">{{ $errors->first('day') }}</small>
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
