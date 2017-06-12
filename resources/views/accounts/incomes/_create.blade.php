{!! Form::open(['method' => 'POST', 'route' => ['incomes.store', $month->id], 'class' => 'form-horizontal']) !!}

       @if( count($errors) )
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $key => $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
    <div class="modal fade" id="IncomeCreate" tabindex="-1" role="dialog" aria-labelledby="accountModel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="card-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="accountModel">ဝင်ငွေ အသစ်ထည့်မည်</h4>
              </div>
              <div class="modal-body">
                <div class="col-md-12">
                  <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-6">
                      <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('date', 'Date') !!} --}}
                          {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('date') }}</small>
                      </div>
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('name', 'ငွေသွင်း') !!} --}}
                          {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'ငွေသွင်း']) !!}
                          <small class="text-danger">{{ $errors->first('name') }}</small>
                      </div>
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('description', 'အကြောင်းအရာ') !!} --}}
                          {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required', 'rows' => '2', 'placeholder' => 'အကြောင်းအရာ']) !!}
                          <small class="text-danger">{{ $errors->first('description') }}</small>
                      </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                      <div class="form-group{{ $errors->has('income_head_id') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('income_head_id', 'ငွေစာရင်း ခေါင်းစဉ်') !!} --}}
                          {!! Form::select('income_head_id', $income_heads, null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'-- ရငွေ စာရင်းခေါင်းစဉ် --']) !!}
                          <small class="text-danger">{{ $errors->first('income_head_id') }}</small>
                      </div>
                      <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('amount', 'ငွေပမာဏ') !!} --}}
                          {!! Form::number('amount', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'ငွေပမာဏ']) !!}
                          <small class="text-danger">{{ $errors->first('amount') }}</small>
                      </div>
                      <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }} label-floating has-success">
                          {{-- {!! Form::label('remark', 'မှတ်ချက်') !!} --}}
                          {!! Form::textarea('remark', null, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'မှတ်ချက်']) !!}
                          <small class="text-danger">{{ $errors->first('remark') }}</small>
                      </div>
                    </div>
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
