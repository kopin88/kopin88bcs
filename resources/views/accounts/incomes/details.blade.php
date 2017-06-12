<label for="">ဝင်ငွေ</label>
<table class="table table-hover table-striped table-bordered kopin-font">
    <thead class="text-primary">
    <th class="text-center" width="120px;"><strong>နေ့စွဲ</strong></th>
    <th class="text-center"><h5><strong>အကြောင်းအရာ</strong></h5></th>
    <th class="text-center"><h5><strong>ငွေသွင်း</strong></h5></th>
    <th class="text-center"><h5><strong>ငွေစာရင်း ခေါင်းစဉ်</strong></h5></th>
    <th class="text-center"><h5><strong>ငွေပမာဏ</strong></h5></th>
    <th class="text-center"><h5><strong>မှတ်ချက်</strong></h5></th>
    @foreach (Auth::user()->roles as $key => $navrole)
      @if ($navrole->name == "Administrator")
        {{-- <th class="text-center" colspan="2" width="80px">
          <a href="#" data-toggle="tab" data-target="#IncomeCreate">
            <i class="material-icons">add_circle_outline</i>
            <strong>ဝင်ငွေ</strong>
            <div class="ripple-container"></div>
          </a>
        </th> --}}
        <th class="text-center" colspan="2" width="50px">
          <strong>ပြင် / ဖျက်</strong>
        </th>
      @elseif ($navrole->name == "Account Manager")
        {{-- <th class="text-center" colspan="2" width="80px">
          <a href="#" data-toggle="tab" data-target="#IncomeCreate">
            <i class="material-icons">add_circle_outline</i>
            <strong>ဝင်ငွေ</strong>
            <div class="ripple-container"></div>
          </a>
        </th> --}}
        <th class="text-center" colspan="2" width="50px">
          <strong>ပြင် / ဖျက်</strong>
        </th>
      @elseif ($navrole->name == "Account Write")
        {{-- <th class="text-center" colspan="2" width="80px">
          <a href="#" data-toggle="tab" data-target="#IncomeCreate">
            <i class="material-icons">add_circle_outline</i>
            <strong>ဝင်ငွေ</strong>
            <div class="ripple-container"></div>
          </a>
        </th> --}}
        <th class="text-center" colspan="2" width="50px">
          <strong>ပြင် / ဖျက်</strong>
        </th>
      @endif
    @endforeach

  </thead>
  <tbody>
    @foreach ($month->incomes->sortBy('date') as $key => $income)
      <tr>
        <td class="text-center">{{ date('d - M - Y', strtotime($income->date)) }}</td>
        <td>{{ $income->description }}</td>
        <td>{{ $income->name }}</td>
        <td>{{ $income->income_head->name }}</td>
        <td class="text-right">
          @php
            $amount = $income->amount
          @endphp
          {{ number_format($amount) }}
        </td>
        <td></td>
        @foreach (Auth::user()->roles as $key => $navrole)
          @if ($navrole->name == "Administrator")
            <td class="text-center">
              <button type="button" rel="tooltip" title="ပြင်မည်" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
                <i class="material-icons" data-toggle="modal" data-target="#IncomeEdit{{ $income->id }}">edit</i>
              </button>
            </td>
            @include('accounts.incomes._edit')
            <td class="text-center">
                {!! Form::model($income, ['route' => ['incomes.destroy', $income->id], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
                  <button type="submit" rel="tooltip" title="ဖျက်မည်" class="btn btn-danger btn-round btn-circle btn-xs" style="padding:3px;">
                    <i class="material-icons">close</i>
                  </button>
                {!! Form::close() !!}
            </td>
          @elseif ($navrole->name == "Account Manager")
            <td class="text-center">
              <button type="button" rel="tooltip" title="ပြင်မည်" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
                <i class="material-icons" data-toggle="modal" data-target="#IncomeEdit{{ $income->id }}">edit</i>
              </button>
            </td>
            @include('accounts.incomes._edit')
            <td class="text-center">
                {!! Form::model($income, ['route' => ['incomes.destroy', $income->id], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
                  <button type="submit" rel="tooltip" title="ဖျက်မည်" class="btn btn-danger btn-round btn-circle btn-xs" style="padding:3px;">
                    <i class="material-icons">close</i>
                  </button>
                {!! Form::close() !!}
            </td>
          @elseif ($navrole->name == "Account Write")
            <td class="text-center">
              <button type="button" rel="tooltip" title="ပြင်မည်" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
                <i class="material-icons" data-toggle="modal" data-target="#IncomeEdit{{ $income->id }}">edit</i>
              </button>
            </td>
            @include('accounts.incomes._edit')
            <td class="text-center">
                {!! Form::model($income, ['route' => ['incomes.destroy', $income->id], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
                  <button type="submit" rel="tooltip" title="ဖျက်မည်" class="btn btn-danger btn-round btn-circle btn-xs" style="padding:3px;">
                    <i class="material-icons">close</i>
                  </button>
                {!! Form::close() !!}
            </td>
          @endif
        @endforeach

      </tr>
    @endforeach

  </tbody>
  <tfoot>
    <tr>
      <td class="text-center" colspan="4"><strong>စုစုပေါင်း ငွေပမာဏ</strong></td>
      <td class="text-right">
        <strong>
        @php
            $total=0;
            foreach ($month->incomes as $income)
            {
                $total+= $income->amount;
            }
          @endphp
          {{ number_format($total) }}
          </strong>
      </td>
      <td>  </td>
      @foreach (Auth::user()->roles as $key => $navrole)
        @if ($navrole->name == "Administrator")
          <td>  </td>
          <td>  </td>
        @elseif ($navrole->name == "Account Manager")
          <td>  </td>
          <td>  </td>
        @elseif ($navrole->name == "Account Write")
          <td>  </td>
          <td>  </td>
        @endif
      @endforeach
    </tr>
  </tfoot>
</table>
