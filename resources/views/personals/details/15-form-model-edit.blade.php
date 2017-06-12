<!-- Modal -->
{!! Form::model($congrat, ['route' => ['congrats.update', $congrat->id], 'method' => 'PUT']) !!}
<div class="modal fade" id="myModal15{{ $congrat->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">၁၅။ ဘွဲ့ တံဆိပ်များ</h4>
      </div>
      <div class="modal-body">
        {!!Form::text('description', null, ['class'=>'form-control', 'placeholder'=> 'အမျိုးအစား'])!!}
        <br>
        {!!Form::date('year', null, ['class'=>'form-control', 'placeholder'=>'ခုနှစ်'])!!}
      </div>
      <div class="modal-footer">
        @include('kopin.button-edit')
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
