{!! Form::open(['method' => 'put', 'route' => ['user.delete', $user->id], 'class' => 'form-horizontal']) !!}

<!-- Modal -->
<div class="modal fade" id="DelAccount{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="DelAccontLabel{{ $user->id }}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-primary" id="DelAccontLabel{{ $user->id }}"> {{ $user->name }} ကို ဖျက်ရန် -</h4>
        <h3 class="text-center text-danger"><strong>သေချာလား ?</strong></h3>
      </div>
      <div class="modal-body">
        <div class="text-center">
          @include('kopin.button-sure')
        </div>
      </div>
      {{-- <div class="modal-footer">
      </div> --}}
    </div>
  </div>
</div>

{!! Form::close() !!}
