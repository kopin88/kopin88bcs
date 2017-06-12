<!-- Modal -->
 {!! Form::model($report, ['route'=>['reports.update','id'=>$report->id],'method'=>'PATCH', 'files'=>true]) !!}

<div class="modal fade" id="reportRemark{{ $report->id }}" tabindex="-1" role="dialog" aria-labelledby="reportRemarkLabel{{ $report->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-primary" id="reportRemarkLabel{{ $report->id }}">ပြင်ဆင်ပြီး(Remark)</h4>
      </div><hr>
      <div class="modal-body">
        <div class="card-content">
          <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }} has-success">
              {!! Form::textarea('remark', null, ['class' => 'form-control', 'placeholder'=>'Fixed Remark ...', 'required' => 'required', 'rows'=>'2', 'autofocus'=>'autofocus']) !!}
              <small class="text-danger">{{ $errors->first('remark') }}</small>
          </div>
        </div>
      </div>
      <hr>
      <div class="modal-footer">
        @include('kopin.button-add')
      </div>
    </div>
  </div>
</div>


{!! Form::close() !!}
