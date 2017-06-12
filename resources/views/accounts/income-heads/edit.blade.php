{!! Form::model($income_head, ['route' => ['income_heads.update', $income_head->id], 'method' => 'PUT']) !!}

<div class="modal fade" id="CashTitleModel{{ $income_head->id }}" tabindex="-1" role="dialog" aria-labelledby="CashTitleModel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="CashTitleModel">Edit {{ $income_head->name }}</h4>
      </div>
      <div class="modal-body">

              {!!Form::text('name', null, ['class'=>'form-control'])!!}

      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{!! Form::close() !!}
