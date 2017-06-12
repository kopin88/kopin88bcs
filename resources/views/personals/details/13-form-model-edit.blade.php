<!-- Modal -->
{!! Form::model($experience, ['route' => ['experiences.update', $experience->id], 'method' => 'PUT']) !!}
<div class="modal fade" id="myModal13{{$experience->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၃။ တာ၀န်ထမ်းဆောင်ခဲ့သည့်နေ့မှစ၍ ထမ်းဆောင်ခဲ့သော တာ၀န်များ</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12" style="margin-bottom: 10px;margin-top:10px;">
          {!!Form::text('org_dept', null, ['class'=>'form-control', 'placeholder'=> 'မူရင်းဌာန'])!!}
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
          {!!Form::text('org_position', null, ['class'=>'form-control', 'placeholder'=> 'မူရင်းရာထူး'])!!}
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
          {!!Form::text('tmp_position', null, ['class'=>'form-control', 'placeholder'=>'ခေတ္တ/ယာယီရာထူး'])!!}
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
          {!!Form::textarea('remark', null, ['class'=>'form-control', 'placeholder'=>'မှတ်ချက်', 'rows'=>'3'])!!}
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
