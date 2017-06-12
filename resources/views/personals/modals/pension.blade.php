<!-- Modal -->
  {!! Form::open(['method'=>'PATCH', 'route'=>['personals.pension', $personal->id], 'files'=>true]) !!}
<div class="modal fade" id="PersonalPension{{ $personal->id }}" tabindex="-1" role="dialog" aria-labelledby="PersonalPensionLabel{{ $personal->id }}">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-left text-primary" id="PersonalPensionLabel{{ $personal->id }}"><strong>{{ $personal->name }}</strong></h4>
      </div>
      <div class="modal-body">
        <p class="text-primary"><strong>ပင်စင်</strong></p>
        <h3 class="text-center text-danger"><strong>သေချာပါသလား ?</strong></h3>
      </div>
      <div class="modal-foter">
          <div class="row">
            <div class="text-center">
              @include('kopin.button-sure')<br>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
