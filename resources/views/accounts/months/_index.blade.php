
<div class="col-lg-12 col-md-12">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">{{ $financial_year->name }} ငွေစာရင်း</h4>
      		<p class="category">ငွေစာရင်း</p>
      	</div>
      	<div class="card-content table-responsive">
      		<table class="table table-bordered table-hover">
      			<thead class="text-primary">
              <th class="text-center" ><h5><strong>လ</strong></h5></th>
              <th class="text-center"><h5><strong>အကြောင်းအရာ</strong></h5></th>
              <th class="text-center"><h5><strong>စာရင်းဖွင့်</strong></h5></th>
              <th class="text-center"><h5><strong>ဝင်ငွေ</strong></h5></th>
              <th class="text-center"><h5><strong>ထွက်ငွေ</strong></h5></th>
              <th class="text-center"><h5><strong>လက်ကျန်</strong></h5></th>
              <th class="text-center"><h5><strong>ငွေစာရင်း</strong></h5></th>
              <th class="text-center"><h5><strong>လစာပေးမှတ်တမ်း</strong></h5></th>
              @foreach(Auth::user()->roles as $key => $navrole)
                @if ($navrole->name == "Administrator")
                  <th width="80px;" class="text-center">
                    <button type="button" rel="tooltip" title="စာရင်းဖွင့်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#monthModel">
                      {{-- <i class="material-icons text-primary">add_circle</i> --}}
                      <i class="fa fa-plus-circle text-primary" aria-hidden="true"></i>
                    </button>
                    @include('accounts.months.create')
                  </th>
                @elseif ($navrole->name == "Account Manager")
                  <th width="80px;" class="text-center">
                    <button type="button" rel="tooltip" title="စာရင်းဖွင့်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#monthModel">
                      {{-- <i class="material-icons text-primary">add_circle</i> --}}
                      <i class="fa fa-plus-circle text-primary" aria-hidden="true"></i>
                    </button>
                    @include('accounts.months.create')
                  </th>
                @elseif ($navrole->name == "Account Write")
                  <th width="80px;" class="text-center">
                    <button type="button" rel="tooltip" title="စာရင်းဖွင့်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#monthModel">
                      {{-- <i class="material-icons text-primary">add_circle</i> --}}
                      <i class="fa fa-plus-circle text-primary" aria-hidden="true"></i>
                    </button>
                    @include('accounts.months.create')
                  </th>
                @endif
              @endforeach

      			</thead>
            <tbody>
              @foreach ($months as $financial_year=>$month)
                <tr>
                  <td>{{ $month->name }}</td>
                  <td><a href="{{ route('accounts.show', $month->id) }}">{{ $month->title }}</a></td>
                  <td class="text-right">
                    @if ($month->month_balance_id != null)
                      @php
                        $r_balance = App\Models\Accounts\Month::find($month->month_balance_id);
                      @endphp
                      {{ number_format($r_balance->balance) }}
                      {{-- {{ $month[2]->balance}} --}}
                    @elseif ($month->month_balance_id == null)
                      {{ number_format($month->open_balance) }}
                    @endif
                  </td>
                  <td class="text-right">{{ number_format($month->in_total) }}</td>
                  <td class="text-right">{{ number_format($month->out_total) }}</td>
                  <td class="text-right">{{ number_format($month->balance) }}</td>
                  <td class="text-center">
                    <a href="{{ route('accounts.show', $month->id) }}">
                      <button type="button" rel="tooltip" title="ကြည့်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;">
                          <i class="fa fa-play-circle-o text-primary"></i>
                      </button>
                    </a>
                  </td>
                  <td class="text-center">
                    <a href="{{ route('payrolls.index', $month->id) }}">
                      <button type="button" rel="tooltip" title="ကြည့်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;">
                          <i class="fa fa-money text-warning"></i>
                      </button>
                    </a>
                  </td>
                  @foreach (Auth::user()->roles as $key => $navrole)
                    @if ($navrole->name == "Administrator")
                      <td class="text-center">
                        <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#monthModel{{ $month->id }}">
                            <i class="fa fa-edit text-success"></i>
                        </button>
                        @include('accounts.months.edit')
                      </td>
                    @elseif ($navrole->name == "Account Manager")
                      <td class="text-center">
                        <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#monthModel{{ $month->id }}">
                            <i class="fa fa-edit text-success"></i>
                        </button>
                        @include('accounts.months.edit')
                      </td>
                    @elseif ($navrole->name == "Account Write")
                      <td class="text-center">
                        <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#monthModel{{ $month->id }}">
                            <i class="fa fa-edit text-success"></i>
                        </button>
                        @include('accounts.months.edit')
                      </td>
                    @endif
                  @endforeach

                </tr>
              @endforeach
              <tr>
                <td colspan="2" class="text-center"><strong>စုစုပေါင်း</strong></td>
                <td class="text-right">
                  <strong>
                    @php
                      $open_balance = 0;
                      foreach ($months as $financial_year=>$month) {
                        $open_balance += $month->open_balance;
                      }
                      echo number_format($open_balance);
                    @endphp
                  </strong>
                </td>
                <td class="text-right">
                  <strong>
                    @php
                      $intotal = 0;
                      foreach ($months as $financial_year=>$month) {
                        $intotal += $month->in_total;
                      }
                      echo number_format($intotal);
                    @endphp
                  </strong>
                </td>
                <td class="text-right">
                  <strong>
                    @php
                      $outtotal = 0;
                      foreach ($months as $financial_year=>$month) {
                        $outtotal += $month->out_total;
                      }
                      echo number_format($outtotal);
                    @endphp
                  </strong>
                </td>
                <td class="text-right"><strong>{{ number_format($balance = ($open_balance+$intotal)-$outtotal) }}</strong></td>
                <td colspan="3"></td>
              </tr>
            </tbody>
      		</table>

      	</div>
        <div class="card-footer">
          <a class="text-success" href="{{ url('/financial_years') }}">
            <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
              နောက်သို့
          </a>
        </div>
      </div>
    </div>
