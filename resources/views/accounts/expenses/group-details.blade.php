<br>
@foreach ($grouped as $expense_head_id=>$expenses)
  <strong>
    @php
      $title = App\Models\Accounts\ExpenseHead::find($expense_head_id);
    @endphp
    {{ $title->name }}
  </strong><br>

    <table class="table table-striped table-hover table-bordered">
      <thead class="text-primary">
        <th class="text-center" width="120px;"><strong>နေ့စွဲ</strong></th>
        <th class="text-center"><strong>အကြောင်းအရာ</strong></th>
        <th class="text-center" width="200px;"><strong>ငွေပမာဏ</strong></th>
        <th class="text-center" width="200px;"><strong>မှတ်ချက်</strong></th>
      </thead>
      <tbody>
        @foreach ($expenses as $expense)
          <tr>
            <td class="text-center">{{ date('d/M/Y', strtotime($expense->date)) }}</td>
            <td>{{$expense->description}}</td>
            <td class="text-right">{{$expense->amount}}</td>
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
                foreach ($expenses as $expense)
                {
                    $total+= $expense->amount;
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
