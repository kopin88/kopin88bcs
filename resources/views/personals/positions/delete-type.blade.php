<!-- Modal -->
{!! Form::open(['method' => 'put', 'route' => ['position_types.delete', $position_type->id], 'class' => 'form-horizontal']) !!}
<div class="modal fade" id="PositionTypeDel{{ $position_type->id }}" tabindex="-1" role="dialog" aria-labelledby="PositionTypeDelLabel{{ $position_type->id }}">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-left text-primary" id="PositionTypeDelLabel{{ $position_type->id }}"><strong>{{ $position_type->name }}</strong></h4>
      </div>
      <div class="modal-body">
      <h3 class="text-center text-danger"><strong>သေချာလား ?</strong></h3>
      </div>
      <div class="modal-foter">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">
            @include('kopin.button-sure')<br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}
