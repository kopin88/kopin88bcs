{!! Form::open(['route'=>['leaves.store', $personal->id], 'method'=>'POST']) !!}
<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၇။ ခွင့်ယူခြင်းများ</h4>
      </div>
      <div class="modal-body">

            <div class="row" style="margin-bottom: 10px;">
              <div class="col-sm-12">
                {!! Form::select("leave_type_id", $leave_types, null, ['class'=>'form-control', 'placeholder'=>'-- Select Leave Type --', 'autofocus'=>'autofocus']) !!}
              </div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
              <div class="col-md-5">
                {!!Form::date('from_date', null, ['class'=>'form-control'])!!}
              </div>
              <div class="col-md-1" style="margin-top:8px;">
                <p>မှ</p>
              </div>
              <div class="col-md-5">
                {!!Form::date('to_date', null, ['class'=>'form-control'])!!}
              </div>
              <div class="col-md-1" style="margin-top:8px;">
                ထိ
              </div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
              <div class="col-md-4">
                {!!Form::text('', null, ['class'=>'form-control'])!!}
              </div>
              <div class="col-md-2" style="margin-top:8px;">
                လ
              </div>
              <div class="col-md-4">
                {!!Form::text('total', null, ['class'=>'form-control'])!!}
              </div>
              <div class="col-md-2" style="margin-top:8px;">
                ရက်
              </div>
            </div>
            <div class="row">
              <div class="col-md-12" style="margin-bottom: 10px;">
                {!!Form::text('remark', null, ['class'=>'form-control', 'placeholder'=>'အမိန့် အာဏာ'])!!}
              </div>
            </div>
      </div>
      <div class="modal-footer">
        @include('kopin.button-add')
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
