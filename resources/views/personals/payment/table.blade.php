<div class="table table-responsive">
  <table class="table table-bordered table-hover">
  <thead>
    <tr class="bg-success">
      <th class="text-center" style="font-size:1.1em">#</th>
      <th class="text-center" style="font-size:1.1em">လ</th>
      <th class="text-center" style="font-size:1.1em">ရရှိ</th>
      <th class="text-center" style="font-size:1.1em">နှုတ်ဖြတ်</th>
      <th class="text-center" style="font-size:1.1em">စုစုပါင်း</th>
      <th class="text-center" style="font-size:1.1em">မှတ်ချက်</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($months as $month)
      <tr>
        <td class="text-center">#</td>
        <td>
          <a href="{{route('payrolls.create', ['month_id'=>$month->id, 'personal_id'=>$personal->id])}}">{{ $month->name }}</a>
        </td>
        @php
           $intotal = 0;
            foreach (App\Models\Accounts\InPayroll::get()->where('month_id', $month->id)->where('personal_id', $personal->id) as $in_payroll)
             {
               $intotal+= $in_payroll->amount;
             }
           $outtotal = 0;
            foreach (App\Models\Accounts\OutPayroll::get()->where('month_id', $month->id)->where('personal_id', $personal->id) as $out_payroll)
             {
               $outtotal+= $out_payroll->amount;
             }
           $total = $intotal-$outtotal;
        @endphp
        <td class="text-right">
          @if ($intotal != 0)
            {{number_format($intotal) }}
          @endif
        </td>
        <td class="text-right">
          @if ($intotal != 0)
            {{number_format($outtotal) }}
          @endif
        </td>
        <td class="text-right">
          @if ($intotal != 0)
            {{number_format($total) }}
          @endif
        </td>
        <td></td>
      </tr>

    @endforeach
  </tbody>
  <tfoot >

  </tfoot>
</table>
</div>
