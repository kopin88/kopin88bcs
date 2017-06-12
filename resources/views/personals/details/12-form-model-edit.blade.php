<!-- Modal -->
{!! Form::model($training, ['route' => ['trainings.update', $training->id], 'method' => 'PUT']) !!}
<div class="modal fade" id="myModal12{{ $training->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၂။ တက်ရောက်ခဲ့သည့်သင်တန်းများ (ပြည်တွင်း/ပြည်ပ)</h4>
      </div>
      <div class="modal-body">
        {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=> 'သင်တန်းအမည်'])!!}
        <br>
        {!!Form::text('period', null, ['class'=>'form-control', 'placeholder'=> 'ကာလ'])!!}
        <br>
        {!!Form::text('place', null, ['class'=>'form-control', 'placeholder'=>'နေရာ'])!!}
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
