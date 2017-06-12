<div class="card-content">
  <div class="row">
    {!! Form::open(['method' => 'POST', 'route' => ['reports.store', Auth::user()->id], 'class' => 'form-horizontal']) !!}
    <div class="col-md-8 col-md-offset-1">
        <div class="form-group{{ $errors->has('reports') ? ' has-error' : '' }} has-success">
            {{-- {!! Form::label('report', 'Error Description') !!} --}}
            {!! Form::textarea('report', null, ['class' => 'form-control', 'placeholder'=>'Error description ...', 'required' => 'required', 'rows'=>'2', 'autofocus'=>'autofocus']) !!}
            <small class="text-danger">{{ $errors->first('reports') }}</small>
        </div>
    </div>
    <div class="col-md-2">
      {!! Form::submit('Add Report', ['class' => 'btn btn-danger pull-right']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>

<div class="card-content">
  <table class="table table-inverse|reflow|striped|bordered|hover|sm">
    <thead>
      <tr class="text-primary">
        <th><strong>#</strong></th>
        <th><strong>Date</strong></th>
        <th><strong>User Name</strong></th>
        <th><strong>Error</strong></th>
        <th><strong>Remark</strong></th>
        <th class="text-center"><strong>Action</strong></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($report_remarks as $key => $report)
        <tr>
          <td>#</td>
          <td>{{ date('d-M-Y', strtotime($report->updated_at)) }}</td>
          <td>{{ $report->user->name }}</td>
          <td>{{ $report->report }}</td>
          <td>{{ $report->remark }}</td>
          <td class="text-center text-success">
            <button class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
              <i class="fa fa-check" aria-hidden="true"></i>
            </button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
