{!! Form::model($month, ['route' => ['months.balance', $month->id], 'method' => 'PUT']) !!}

<table class="table table-hover table-bordered kopin-font">
        <thead class="text-primary">
          <th class="text-center" width="80px"><h5><strong>စဉ်</strong></h5></th>
          <th class="text-center"><h5><strong>ငွေစာရင်း ခေါင်းစဉ်</strong></h5></th>
          <th class="text-center"><h5><strong>ငွေပမာဏ</strong></h5></th>
          <th class="text-center" width="100px"><h5><strong>မှတ်ချက်</strong></h5></th>
        </thead>
        <tbody>
          <tr>
            <td class="text-right">1</td>
            @if ($month->month_balance_id != null)
              <td>စာရင်းဖွင့်လက်ကျန်</td>
              <td class="text-right">
                @php
                  $r_balance = App\Models\Accounts\Month::find($month->month_balance_id);
                @endphp
                {{ number_format($r_balance->balance) }}
              </td>
            @elseif ($month->month_balance_id == null)
              <td>စာရင်းဖွင့်</td>
              <td class="text-right">{{ number_format($month->open_balance) }}</td>
            @endif
            <td></td>
          </tr>
          <tr><td colspan="4"></td></tr>
          @include('accounts._income')
          <tr><td colspan="4"></td></tr>
          @include('accounts._expense')
          {{-- <tr><td colspan="4"></td></tr> --}}
        </tbody>
        <tfoot>
          <tr>
            <td class="text-right" colspan="2"><strong>လက်ကျန်ငွေ</strong></td>
            <td class="text-right">
              <strong>
                @php
                    $open_balance=0;
                    if ($month->month_balance_id != null) {
                      $r_balance = App\Models\Accounts\Month::find($month->month_balance_id);
                      $open_balance= $r_balance->balance;
                    }elseif ($month->month_balance_id == null) {
                      $open_balance=$month->open_balance;
                    }
                    $intotal=0;
                    foreach ($month->incomes as $income)
                    {
                        $intotal+= $income->amount;
                    }
                    $outtotal=0;
                    foreach ($month->expenses as $expense)
                    {
                        $outtotal+= $expense->amount;
                    }
                    $balance=0;
                    $balance= ($open_balance+$intotal) - $outtotal;
               @endphp
                  {{ number_format($balance) }}
                  <div class="hidden form-group{{ $errors->has('balance') ? ' has-error' : '' }}">
                      {{-- {!! Form::label('balance', 'Input label') !!} --}}
                      {!! Form::number('balance', $balance, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('balance') }}</small>
                  </div>
                </strong>
            </td>
            <td class="text-center">
              @if ($balance == $month->balance)
                <i class="fa fa-check fa-lg text-primary" aria-hidden="true"></i>
              @elseif ($balance != $month->balance)
                <div class="btn-group">
                    {!! Form::submit("စာရင်းပိတ်မည်", ['class' => 'btn btn-sm btn-round btn-success']) !!}
                </div>
              @endif
            </td>
          </tr>
        </tfoot>
    </table>

{!! Form::close() !!}
