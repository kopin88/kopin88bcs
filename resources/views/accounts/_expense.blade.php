@php
  $no = 1;
@endphp
@foreach ($grouped as $expense_head_id=>$expenses)
  <tr>
    <td class="text-right">{{ $no++ }}</td>
    <td>
      @php
        $title = App\Models\Accounts\ExpenseHead::find($expense_head_id);
      @endphp
      {{ $title->name }}
    </td>
    <td class="text-right">
      @php
          $total=0;
          foreach ($expenses as $expense)
          {
              $total+= $expense->amount;
          }
        @endphp
        {{ number_format($total) }}
    </td>
    <td></td>
  </tr>
@endforeach
<tr>
  <td class="text-right" colspan="2"><strong>စုစုပေါင်း အသုံးစရိတ်</strong></td>
  <td class="text-right">
    <strong>
      @php
          $outtotal=0;
          foreach ($month->expenses as $expense)
          {
              $outtotal+= $expense->amount;
          }
        @endphp
        {{ number_format($outtotal) }}
        <div class="hidden form-group{{ $errors->has('out_total') ? ' has-error' : '' }}">
            {!! Form::number('out_total', $outtotal, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('out_total') }}</small>
        </div>
      </strong>
  </td>
  <td class="text-center">
    @if ($outtotal == $month->out_total)
      <i class="fa fa-check fa-lg text-primary" aria-hidden="true"></i>
    @endif
  </td>
</tr>
