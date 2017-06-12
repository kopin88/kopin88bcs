<!-- Modal -->
{!! Form::open(['route' => ['acknowledges.store', $personal->id], 'method' => 'POST']) !!}
<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၄။ ပြစ်မှု</h4>
      </div>
      <div class="modal-body">
        {!!Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=> 'အကြောင်းအရာ', 'rows'=>'2', 'autofocus'=>'autofocus'])!!}
        <br>
        {!!Form::textarea('action', null, ['class'=>'form-control', 'placeholder'=> 'ပြစ်ဒဏ်', 'rows'=>'2'])!!}
        <br>
        {!!Form::textarea('remark', null, ['class'=>'form-control', 'placeholder'=>'အမိန့် အမှတ်/ရက်စွဲ', 'rows'=>'2'])!!}
        <br>
      </div>
      <div class="modal-footer">
        @include('kopin.button-add')
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
