{!! Form::model($specialpost, ['route'=>['specialposts.update', $specialpost->id], 'method'=>'PUT']) !!}
<div class="modal fade" id="myModal18{{ $specialpost->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၈။ အထူး ပြင်ပ တာ၀န် ထမ်းဆောင်ခြင်းများ</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-12" style="margin-bottom: 10px;">
            {!!Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=> 'အကြောင်းအရာ', 'rows'=>'2'])!!}
          </div>
          <div class="col-md-5" style="margin-bottom: 10px;">
            {!!Form::date('from_date', null, ['class'=>'form-control'])!!}
          </div>
          <div class="col-md-1 text-center" style="margin-top:8px;">
            မှ
          </div>
          <div class="col-md-5" style="margin-bottom: 10px;">
            {!!Form::date('to_date', null, ['class'=>'form-control'])!!}
          </div>
          <div class="col-md-1 text-center" style="margin-top:8px;">
            ထိ
          </div>
          <div class="col-md-12" style="margin-bottom: 10px;">
            {!!Form::text('remark', null, ['class'=>'form-control', 'placeholder'=>'အမိန့် အာဏာ'])!!}
          </div>
        </div>
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
