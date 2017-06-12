<br>
@foreach ($ingrouped as $income_head_id=>$incomes)
  <strong>
    @php
      $title = App\Models\Accounts\IncomeHead::find($income_head_id);
    @endphp
    {{ $title->name }}
  </strong><br>

    <table class="table table-striped table-hover table-bordered kopin-font">
      <thead class="text-primary">
        <th class="text-center" width="120px;"><strong>နေ့စွဲ</strong></th>
        <th class="text-center"><strong>အကြောင်းအရာ</strong></th>
        <th class="text-center" width="200px;"><strong>ငွေပမာဏ</strong></th>
        <th class="text-center" width="200px;"><strong>မှတ်ချက်</strong></th>
      </thead>
      <tbody>
        @foreach ($incomes as $income)
          <tr>
            <td class="text-center">{{ date('d/M/Y', strtotime($income->date)) }}</td>
            <td>{{$income->description}}</td>
            <td class="text-right">{{$income->amount}}</td>
            <td></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td class="text-center" colspan="2"><strong>စုစုပေါင်း ငွေပမာဏ</strong></td>
          <td class="text-right">
            <strong>
            @php
                $total=0;
                foreach ($incomes as $income)
                {
                    $total+= $income->amount;
                }
              @endphp
              {{ number_format($total) }}
              </strong>
          </td>
          <td> </td>
        </tr>
      </tfoot>
    </table>
    <hr>
@endforeach
