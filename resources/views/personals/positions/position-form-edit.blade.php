<!-- Modal -->
 {!! Form::model($position, ['route'=>['positions.update','id'=>$position->id],'method'=>'PUT', 'files'=>true]) !!}
<div class="modal fade" id="positionEdit{{ $position->id }}" tabindex="-1" role="dialog" aria-labelledby="deptEditModel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="positionEditModel">{{$position->name}} ရာထူးပြင်ရန်</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            {!!Form::date("date", null, ['class'=>'form-control'])!!}

            {!! Form::select("position_type_id", $position_types, null, ['class'=>'form-control', 'placeholder'=>'-- ရာထူးရွေးရန် --', 'style'=>'margin-top:10px']) !!}

            {!! Form::select("dept_id", $depts, null, ['class'=>'form-control', 'placeholder'=>'-- ဌာနရွေးရန် --', 'style'=>'margin-top:10px']) !!}
          </div>

          <div class="col-md-4">
            {!!Form::number("basic_salary", null, ['class'=>'form-control', 'placeholder'=>'အခြေခံလစာ'])!!}

            {!!Form::number("annual_interest", null, ['class'=>'form-control', 'placeholder'=>'နှစ်တိုး', 'style'=>'margin-top:10px'])!!}

            {!!Form::number("end_salary", null, ['class'=>'form-control', 'placeholder'=>'နှစ်တိုးဆုံး လစာ', 'style'=>'margin-top:10px'])!!}
          </div>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-md-12">
            {!!Form::textarea("remark", null, ['class'=>'form-control', 'placeholder'=>'မှတ်ချက်', 'rows'=>'2'])!!}
          </div>
        </div>
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div> <!-- End Add -->
{!! Form::close() !!}
