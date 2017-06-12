{!! Form::model($expense_head, ['route' => ['expense_heads.update', $expense_head->id], 'method' => 'PATCH']) !!}

<div class="modal fade" id="ExpenseHeadEdit{{ $expense_head->id }}" tabindex="-1" role="dialog" aria-labelledby="ExpenseHeadEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-primary" id="ExpenseHeadEditLabel">{{ $expense_head->name }}   ပြင်ရန်</h4>
      </div><hr>
      <div class="modal-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
            {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'ဌာနအမည်', 'required'=>'required', 'autofocus'=>'autofocus'])!!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>
        {{-- <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} label-floating has-success">
            {!!Form::textarea("description", null, ['class'=>'form-control', 'placeholder'=>'အကြောင်းအရာ', 'rows'=>'2'])!!}
            <small class="text-danger">{{ $errors->first('description') }}</small>
        </div> --}}
      </div>
      <hr>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div>

{!! Form::close() !!}
