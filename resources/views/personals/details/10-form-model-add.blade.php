<!-- Modal -->
{!! Form::open(['route' => ['maritals.store', $personal->id], 'method' => 'POST']) !!}
<div class="modal fade" id="myModalMarital" tabindex="-1" role="dialog" aria-labelledby="myModalLabelMarital">
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
        @include('kopin.button-add')
      </div>
    </div>
  </div>
</div> <!-- End Add -->
{!! Form::close() !!}

<!-- Modal -->
{!! Form::open(['route' => ['childrens.store', $personal->id], 'method' => 'POST']) !!}
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel10">၁၀။ အိမ်ထောင်ရေး</h4>
      </div>
      <div class="modal-body">
        {!!Form::text('name', null, ['class'=>'form-control', 'id'=>'married_2', 'placeholder'=> 'သား/သမီး အမည်', 'autofocus'=>'autofocus'])!!}
        <br>
        {!!Form::date('dob', null, ['class'=>'form-control', 'id'=>'married_3', 'placeholder'=> 'မွေးရက်စွဲ'])!!}
      </div>
      <div class="modal-footer">
        @include('kopin.button-add')
      </div>
    </div>
  </div>
</div> <!-- End Add -->
{!! Form::close() !!}
