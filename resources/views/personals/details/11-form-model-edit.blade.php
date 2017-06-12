{!! Form::model($heir, ['route' => ['heirs.update', $heir->id], 'method' => 'PUT']) !!}

<div class="modal fade" id="myModal11{{ $heir->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel11">၁၁။ အမွေစားအမွေခံ</h4>
      </div>
      <div class="modal-body">
        {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=> 'အမည်'])!!}
        <br>
        {!!Form::text('related', null, ['class'=>'form-control', 'placeholder'=> 'တော်စပ်ပုံ'])!!}
        <br>
        {!!Form::text('nrc', null, ['class'=>'form-control', 'placeholder'=>'အမျိုးသား/နိုင်ငံသား မှတ်ပုံတင်အမှတ်'])!!}
        <br>
        {!!Form::textarea('remark', null, ['class'=>'form-control', 'placeholder'=>'မှတ်ချက်', 'rows'=>'3'])!!}
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
