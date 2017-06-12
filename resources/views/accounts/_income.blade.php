@php
  $no = 1;
@endphp
@foreach ($ingrouped as $income_head_id=>$incomes)
  <tr>
    <td class="text-right">{{$no++ }}</td>
    <td>
      @php
        $title = App\Models\Accounts\IncomeHead::find($income_head_id);
      @endphp
      {{ $title->name }}
    </td>
    <td class="text-right">
      @php
          $total=0;
          foreach ($incomes as $income)
          {
              $total+= $income->amount;
          }
        @endphp
        {{ number_format($total) }}
    </td>
    <td></td>
  </tr>
@endforeach
<tr>
  <td class="text-right" colspan="2"><strong>စုစုပေါင်း ဝင်ငွေ</strong></td>
  <td class="text-right">
    <strong>
      @php
          $intotal=0;
          foreach ($month->incomes as $income)
          {
              $intotal+= $income->amount;
          }
        @endphp
        {{ number_format($intotal) }}
        <div class="hidden form-group{{ $errors->has('in_total') ? ' has-error' : '' }}">
            {!! Form::number('in_total', $intotal, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('in_total') }}</small>
        </div>
      </strong>
  </td>
  <td class="text-center">
    @if ($intotal == $month->in_total)
      <i class="fa fa-check fa-lg text-primary" aria-hidden="true"></i>
    @endif
  </td>
</tr>
