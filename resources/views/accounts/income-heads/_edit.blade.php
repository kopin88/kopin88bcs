{!! Form::model($income_head, ['route' => ['income_heads.update', $income_head->id], 'method' => 'PATCH']) !!}

<div class="modal fade" id="IncomeHeadEdit{{ $income_head->id }}" tabindex="-1" role="dialog" aria-labelledby="IncomeHeadEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-primary" id="IncomeHeadEditLabel">{{ $income_head->name }}   ပြင်ရန်</h4>
      </div><hr>
      <div class="modal-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
            {!!Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'ဌာနအမည်', 'required'=>'required', 'autofocus'=>'autofocus'])!!}
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

{!! Form::close() !!}
