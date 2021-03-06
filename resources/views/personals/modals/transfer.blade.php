<!-- Modal -->
  {!! Form::open(['method'=>'PATCH', 'route'=>['personals.transfer', $personal->id], 'files'=>true]) !!}
<div class="modal fade" id="PersonalTransfer{{ $personal->id }}" tabindex="-1" role="dialog" aria-labelledby="PersonalTransferLabel{{ $personal->id }}">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-left text-primary" id="PersonalTransferLabel{{ $personal->id }}"><strong>{{ $personal->name }}</strong></h4>
      </div>
      <div class="modal-body">
        <p class="text-primary"><strong>ပြောင်းရွေ့ရန်</strong></p>
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
