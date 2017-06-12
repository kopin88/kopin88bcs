{!! Form::open(['method' => 'POST', 'route' => ['in_payrolls.store', $month->id, $personal->id], 'class' => 'form-horizontal']) !!}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="modal fade" id="InPayroll" tabindex="-1" role="dialog" aria-labelledby="InPayroll">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-primary" id="accountModel">ရရှိငွေ အသစ်ထည့်မည်</h4>
        </div>
        <div class="modal-body">
          @include('accounts.payrolls._form')
        </div>
        <div class="modal-footer">
          <div class="text-center">
            @include('kopin.button-add')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{!! Form::close() !!}
