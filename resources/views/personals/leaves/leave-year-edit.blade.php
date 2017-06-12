{!! Form::model($leave_year, ['route' => ['LeaveYears.update', $leave_year->id], 'method' => 'PUT']) !!}

<div class="modal fade" id="LeaveYearEdit{{ $leave_year->id }}" tabindex="-1" role="dialog" aria-labelledby="LeaveYearEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-primary" id="LeaveYearEdit">{{ $leave_year->name }}  ပြင်ရန်</h4>
        </div><hr>
        <div class="modal-body">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
                  {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'ထည့်ရန်']) !!}
                  <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>
        </div>
        <hr>
        <div class="modal-footer">
          @include('kopin.button-edit')
        </div>
    </div>
    </div>
  </div>
</div>

{!! Form::close() !!}
