@php
  $no = 1;
@endphp
@foreach ($in_payrolls as $in_payroll)
  <tr>
    <td class="text-right">{{ $no++ }}</td>
    <td class="text-left">{{ $in_payroll->description }}</td>
    <td class="text-right">
      {{ number_format($in_payroll->amount) }}
    </td>
    <td class="text-right">

    </td>
    <td class="text-center">
      <button type="button" class="btn btn-success btn-circle btn-round btn-xs" data-toggle="modal" data-target="#InPayroll{{ $in_payroll->id }}" style="padding:3px;">
        <i class="material-icons">edit</i>
        {{-- <span class="glyphicon glyphicon-pencil">
        </span> --}}
        {{-- <i class="fa fa-pencil" aria-hidden="true"></i> --}}
      </button>
      @include('accounts.payrolls._inedit')
    </td>
    <td class="text-center">
      {!! Form::open(['method' => 'DELETE', 'route' => ['in_payrolls.destory', $in_payroll->id], 'class' => 'form-horizontal']) !!}

        <button type="submit" class="btn btn-danger btn-circle btn-round btn-xs" style="padding:3px;">
          {{-- <span class="glyphicon glyphicon-trash">
          </span> --}}
          <i class="material-icons">close</i>
          {{-- <i class="fa fa-times" aria-hidden="true"></i> --}}
        </button>
      {!! Form::close() !!}
    </td>
  </tr>
@endforeach
<tr>
  <td class="text-right" colspan="2">ရရှိငွေ</td>
  <td class="text-right">
      @php
          $intotal=0;
          foreach ($in_payrolls as $in_payroll)
          {
              $intotal+= $in_payroll->amount;
          }
        @endphp
        {{ number_format($intotal) }}
  </td>
  <td> </td>
  <td colspan="2"></td>
</tr>
