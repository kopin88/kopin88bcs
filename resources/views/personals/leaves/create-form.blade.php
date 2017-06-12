{!! Form::open(['route'=>['leaves.store', $personal->id, $leave_year->id], 'method'=>'POST']) !!}

       @if( count($errors) )
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $key => $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
    <div class="modal fade" id="LeaveModel" tabindex="-1" role="dialog" aria-labelledby="LeaveModelLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="LeaveModelLabel">ခွင့်အသစ်ထည့်ရန်</h4>
              </div>
              <div class="modal-body">
                    <div class="col-md-6">
                      <div class="form-group{{ $errors->has('from_date') ? ' has-error' : '' }} label-floating has-success">
                          {!! Form::label('from_date', 'မှ') !!}
                            {!!Form::date('from_date', null, ['class'=>'form-control'])!!}
                          <small class="text-danger">{{ $errors->first('from_date') }}</small>
                      </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                      <div class="form-group{{ $errors->has('to_date') ? ' has-error' : '' }} label-floating has-success">
                        {!! Form::label('to_date', 'ထိ') !!}
                        {!!Form::date('to_date', null, ['class'=>'form-control'])!!}
                        <small class="text-danger">{{ $errors->first('to_date') }}</small>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group{{ $errors->has('leave_type_id') ? ' has-error' : '' }} label-floating has-success">
                        {!! Form::select("leave_type_id", $leave_types, null, ['class'=>'form-control', 'placeholder'=>'-- ခွင့်အမျိုးအစားရွေးရန် --']) !!}
                        <small class="text-danger">{{ $errors->first('leave_type_id') }}</small>
                    </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                      <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('income_head_id', 'ငွေစာရင်း ခေါင်းစဉ်') !!} --}}
                          {!!Form::number('total', null, ['class'=>'form-control', 'placeholder'=>'ရက်'])!!}
                          <small class="text-danger">{{ $errors->first('total') }}</small>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('amount', 'ငွေပမာဏ') !!} --}}
                          {!!Form::textarea('remark', null, ['class'=>'form-control', 'placeholder'=>'အမိန့် အာဏာ', 'rows'=>'2'])!!}
                          <small class="text-danger">{{ $errors->first('remark') }}</small>
                      </div>
                    </div>
              </div>
              <div class="modal-footer">
                @include('kopin.button-add')
              </div>
            </div>
        </div>
      </div>
    </div>
{!!Form::close()!!}
