{!! Form::model($month, ['route' => ['months.update', $month->id], 'method' => 'patch']) !!}
<div class="modal fade" id="monthModel{{ $month->id }}" tabindex="-1" role="dialog" aria-labelledby="monthModel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="monthModel">ပြင်ရန်</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            {!! Form::select('name', ['ဇန်နဝါရီ'=>'ဇန်နဝါရီ', 'ဖေဖော်ဝါရီ'=>'ဖေဖော်ဝါရီ', 'မတ်'=>'မတ်', 'ဧပြီ'=>'ဧပြီ', 'မေ'=>'မေ', 'ဇွန်'=>'ဇွန်', 'ဇူလိုင်'=>'ဇူလိုင်', 'သြဂုတ်'=>'သြဂုတ်', 'စက်တင်ဘာ'=>'စက်တင်ဘာ', 'အောက်တိုဘာလ'=>'အောက်တိုဘာလ', 'နိုဝင်ဘာ'=>'နိုဝင်ဘာ', 'ဒီဇင်ဘာ'=>'ဒီဇင်ဘာ' ], null, ['class'=>'form-control', 'placeholder' => '-- လ ရွေးရန် -- ']) !!}
            {{-- {!! Form::select('name', ['January'=>'January', 'February'=>'February', 'March'=>'March', 'April'=>'April', 'May'=>'May', 'June'=>'June', 'July'=>'July', 'August'=>'August', 'September'=>'September', 'October'=>'October', 'November'=>'November', 'December'=>'December' ], null, ['class'=>'form-control', 'placeholder' => '-- Select Month -- ']) !!} --}}
          </div>
          <div class="col-sm-8">
            {!!Form::textarea('title', null, ['class'=>'form-control', 'placeholder'=>'Title', 'rows'=>'1'])!!}
          </div>
        </div>

        @if ($month->month_balance_id != null)
          <div class="row">
            <div class="col-md-4">
              <div class="form-group{{ $errors->has('month_balance_id') ? ' has-error' : '' }} label-floating has-success">
                {!! Form::select('month_balance_id', $month_balance, null, ['class'=>'form-control', 'placeholder' => '- စာရင်းဖွင့်လက်ကျန် - ', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('month_balance_id') }}</small>
              </div>
            </div>
          </div>
        @elseif ($month_balance != null)
          <div class="row">
            <div class="col-md-4">
              <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }} label-floating has-success">
                {{-- {!! Form::label('open_balance', 'စာရင်းဖွင့်') !!} --}}
                {!! Form::number('open_balance', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'စာရင်းဖွင့်']) !!}
                <small class="text-danger">{{ $errors->first('balance') }}</small>
              </div>
            </div>
            <div class="col-md-7 col-md-offset-1">

            </div>
          </div>
        @endif
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{!! Form::close() !!}
