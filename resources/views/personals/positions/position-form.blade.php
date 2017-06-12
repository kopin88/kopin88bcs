{!! Form::open(['route'=>['positions.store', $personal->id], 'method'=>'POST']) !!}

<div class="modal fade" id="PositionAdd" tabindex="-1" role="dialog" aria-labelledby="PositionAdd" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-primary" id="PositionAdd">{{ $personal->name }} ၏ရာထူး အသစ်ထည့်ရန်</h4>
      </div>
      <div class="modal-body">
        {{-- <div class="row"> --}}
          <div class="col-md-8">
            {!!Form::date("date", null, ['class'=>'col-md-8 form-control'])!!}

            {!! Form::select("position_type_id", $position_types, null, ['class'=>'form-control', 'placeholder'=>'-- ရာထူးရွေးရန် --', 'style'=>'margin-top:10px']) !!}

            {!! Form::select("dept_id", $depts, null, ['class'=>'form-control', 'placeholder'=>'-- ဌာနရွေးရန် --', 'style'=>'margin-top:10px']) !!}
          </div>

          <div class="col-md-4">
            {!!Form::number("basic_salary", null, ['class'=>'form-control', 'placeholder'=>'အခြေခံလစာ'])!!}

            {!!Form::number("annual_interest", null, ['class'=>'form-control', 'placeholder'=>'နှစ်တိုး', 'style'=>'margin-top:10px'])!!}

            {!!Form::number("end_salary", null, ['class'=>'form-control', 'placeholder'=>'နှစ်တိုးဆုံး လစာ', 'style'=>'margin-top:10px'])!!}
          </div>
          <div class="col-md-12">
            {!!Form::textarea("remark", null, ['class'=>'form-control', 'placeholder'=>'မှတ်ချက်', 'rows'=>'2'])!!}
        </div>
      </div>
      <div class="modal-footer">
        @include('kopin.button-add')
      </div>
    </div>
  </div>
</div>


{!!Form::close()!!}
