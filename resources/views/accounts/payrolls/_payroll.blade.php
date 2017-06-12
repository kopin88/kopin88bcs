<table class="table table-striped table-bordered">
  <thead>
    <th class="text-center" width="50px;"><strong>စဉ်</strong></th>
    <th><strong>အကြောင်းအရာ</strong></th>
    <th class="text-center" width="200px;"><strong>ငွေပမာဏ</strong></th>
    <th class="text-center" width="100;"><strong>မှတ်ချက်</strong></th>
    <th class="text-center" width="100;" colspan="2"><strong>လုပ်ဆောင်ချက်</strong></th>
  </thead>
  <tbody class="text-primary">
     @include('accounts.payrolls._inpayroll')
    <tr><td colspan="6"></td></tr>
    @include('accounts.payrolls._outpayroll')
    <tr><td colspan="6"></td></tr>
  </tbody>
  <tfoot>
    <tr>
      <td class="text-right" colspan="2"><strong>စုစုပေါင်း</strong></td>
      <td class="text-right">
        <strong>
          @php
              $intotal=0;
              foreach ($in_payrolls as $in_payroll)
              {
                  $intotal+= $in_payroll->amount;
              }
              $outtotal=0;
              foreach ($out_payrolls as $out_payroll)
              {
                  $outtotal+= $out_payroll->amount;
              }
              $balance=0;
              $balance= $intotal - $outtotal;
         @endphp
            {{ number_format($balance) }}
          </strong>
      </td>
      <td colspan="3"> </td>
    </tr>
  </tfoot>
</table>
