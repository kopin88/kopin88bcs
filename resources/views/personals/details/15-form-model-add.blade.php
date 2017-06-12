<!-- Modal -->
{!! Form::open(['route' => ['congrats.store', $personal->id], 'method' => 'POST']) !!}
<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၅။ ဘွဲ့ တံဆိပ်များ</h4>
      </div>
      <div class="modal-body">
        {!!Form::text('description', null, ['class'=>'form-control', 'placeholder'=> 'အမျိုးအစား', 'autofocus'=>'autofocus'])!!}
        <br>
        {!!Form::date('year', null, ['class'=>'form-control', 'placeholder'=>'ခုနှစ်'])!!}
      </div>
      <div class="modal-footer">
        @include('kopin.button-add')
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
