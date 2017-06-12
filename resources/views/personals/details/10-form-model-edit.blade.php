<!-- Modal -->
{!! Form::model($marital, ['route'=>['maritals.update', $marital->id], 'method'=>'PUT']) !!}
<div class="modal fade" id="myModalMarital{{ $marital->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabelMarital">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabelMarital">၁၀။ အိမ်ထောင်ရေး</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-2">
            {!!Form::select('desc', ['ရှိ' => 'ရှိ', 'မရှိ' => 'မရှိ'], null, ['class'=>'form-control'])!!}
          </div>
          <div class="col-xs-10">
            {!!Form::text('name', null, ['class'=>'form-control', 'id'=>'married_2', 'placeholder'=> 'ဇနီး/ခင်ပွန်း အမည်'])!!}
          </div>
        </div>
        <br>
        {!!Form::date('dob', null, ['class'=>'form-control', 'id'=>'married_3', 'placeholder'=> 'မွေးရက်စွဲ'])!!}
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div> <!-- End Edit -->
{!! Form::close() !!}


<!-- Modal -->
{!! Form::model($children, ['route'=>['childrens.update', $children->id], 'method'=>'PUT']) !!}
<div class="modal fade" id="myModal10{{$children->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၀။ အိမ်ထောင်ရေး</h4>
      </div>
      <div class="modal-body">
        {!!Form::text('name', null, ['class'=>'form-control', 'id'=>'married_2', 'placeholder'=> 'သား/သမီး အမည်'])!!}
        <br>
        {!!Form::date('dob', null, ['class'=>'form-control', 'id'=>'married_3', 'placeholder'=> 'မွေးရက်စွဲ'])!!}
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div> <!-- End Edit -->
{!! Form::close() !!}
