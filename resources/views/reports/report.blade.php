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
        <th><strong>Error Description</strong></th>
        <th class="text-center"><strong>Action</strong></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($report_errors as $key => $report)
        <tr>
          <td>#</td>
          <td>{{ date('d-M-Y', strtotime($report->created_at)) }}</td>
          <td>{{ $report->user->name }}</td>
          <td>{{ $report->report }}</td>
          <td class="text-center">
            <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-danger btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#reportRemark{{ $report->id }}">
                <i class="fa fa-exclamation" aria-hidden="true"></i>
            </button>
            {{-- <button type="button" rel="tooltip" title="ပြင်မည်" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
              <i class="material-icons" data-toggle="modal" data-target="#IncomeEdit{{ $income->id }}">edit</i>
            </button> --}}
            @include('reports.remark')

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
