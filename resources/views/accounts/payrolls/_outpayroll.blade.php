@php
    $no = 1;
@endphp
@foreach ($out_payrolls as $out_payroll)
  <tr>
    <td class="text-right">{{ $no++ }}</td>
    <td class="text-left">{{ $out_payroll->description }}</td>
    <td class="text-right">
      {{ number_format($out_payroll->amount) }}
    </td>
    <td class="text-right">
    </td>
    <td class="text-center">
      <button type="button" class="btn btn-success btn-xs btn-round btn-circle" style="padding:3px;" data-toggle="modal" data-target="#OutPayroll{{ $out_payroll->id }}">
        <i class="material-icons">edit</i>
      </button>
      @include('accounts.payrolls._outedit')
    </th>
    <th>
      {!! Form::open(['method' => 'DELETE', 'route' => ['out_payrolls.destory', $out_payroll->id], 'class' => 'form-horizontal']) !!}
        <button type="submit" class="btn btn-danger btn-xs btn-round btn-circle" style="padding:3px;">
          <i class="material-icons">close</i>
        </button>
      {!! Form::close() !!}
    </td>
  </tr>
@endforeach
<tr>
  <td class="text-right" colspan="2">နှုတ်ဖြတ်ငွေ</td>
  <td class="text-right">
      @php
          $outtotal=0;
          foreach ($out_payrolls as $out_payroll)
          {
              $outtotal+= $out_payroll->amount;
          }
        @endphp
        {{ number_format($outtotal) }}
  </td>
  <td> </td>
  <td colspan="2"></td>
</tr>
