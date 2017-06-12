{!! Form::model($in_payroll, ['method' => 'PUT', 'route' => ['in_payrolls.update', $in_payroll->id], 'class' => 'form-horizontal']) !!}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="modal fade" id="InPayroll{{ $in_payroll->id }}" tabindex="-1" role="dialog" aria-labelledby="InPayroll{{ $in_payroll->id }}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="InPayroll{{ $in_payroll->id }}">{{ $in_payroll->description }} ပြင်မည်</h4>
      </div>
      <div class="modal-body">
        @include('accounts.payrolls._form')
      </div>
      <div class="modal-footer">
        <div class="text-center">
          @include('kopin.button-edit')
        </div>
      </div>
    </div>
  </div>
</div>

{!! Form::close() !!}
