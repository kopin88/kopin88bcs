{!! Form::model($expense, ['route' => ['expenses.update', $expense->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="modal fade" id="accounthModel{{ $expense->id }}" tabindex="-1" role="dialog" aria-labelledby="accounthModel{{ $expense->id }}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="accounthModel{{ $expense->id }}">Edit Account</h4>
      </div>
      <div class="modal-body">
        <div class="row" style="margin-bottom: 20px;">
          <div class="col-sm-6">
            <div class="{{ $errors->has('date') ? ' has-error' : '' }}">
                {!! Form::label('date', 'Date') !!}
                {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('date') }}</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="{{ $errors->has('expense_head_id') ? ' has-error' : '' }}">
                {!! Form::label('expense_head_id', 'Cash Title') !!}
                {!! Form::select('expense_head_id', $expense_heads, null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'-- Expense Title --']) !!}
                <small class="text-danger">{{ $errors->first('expense_head_id') }}</small>
            </div>
          </div>
        </div>


        <div class="row" style="margin-bottom: 20px;">
          <div class="col-sm-6">
            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'ငွေထုတ်သူ') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="{{ $errors->has('amount') ? ' has-error' : '' }}">
                {!! Form::label('amount', 'Amount') !!}
                {!! Form::number('amount', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('amount') }}</small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="{{ $errors->has('description') ? ' has-error' : '' }}">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required', 'rows'=>'2']) !!}
                <small class="text-danger">{{ $errors->first('description') }}</small>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="{{ $errors->has('remark') ? ' has-error' : '' }}">
                {!! Form::label('remark', 'Remark') !!}
                {!! Form::textarea('remark', null, ['class' => 'form-control', 'required' => 'required', 'rows'=>'2']) !!}
                <small class="text-danger">{{ $errors->first('remark') }}</small>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-sm">Update</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{!! Form::close() !!}
