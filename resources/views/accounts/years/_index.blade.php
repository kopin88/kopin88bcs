<div class="col-lg-12 col-md-6">
  <div class="row">
    <div class="col-lg-8 col-md-6">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">နှစ်/ဘဏ္ဍာရေးနှစ်များ</h4>
      		<p class="category">ငွေစာရင်း</p>
      	</div>
      	<div class="card-content table-responsive">
      		<table class="table">
      			<thead class="text-primary">
              <th class="text-center"><h5><strong>#</strong></h5></th>
              <th class="text-center"><h5><strong>ဘဏ္ဍာရေးနှစ်</strong></h5></th>
              <th class="text-center"><h5><strong>စာရင်းဖွင့်</strong></h5></th>
              <th class="text-center"><h5><strong>လက်ကျန်</strong></h5></th>
              <th class="text-center"><h5><strong>ကြည့်ရန်</strong></h5></th>
              @foreach(Auth::user()->roles as $key => $navrole)
              	@if ($navrole->name == "Administrator")
                  <th width="80px;" class="text-center"><h5><strong>ပြင်ရန်</strong></h5></th>
                  <th width="80px;" class="text-center"><h5><strong>ဖျက်ရန်</strong></h5></th>
              	@elseif ($navrole->name == "Account Manager")
                  <th width="80px;" class="text-center"><h5><strong>ပြင်ရန်</strong></h5></th>
                  <th width="80px;" class="text-center"><h5><strong>ဖျက်ရန်</strong></h5></th>
              	@elseif ($navrole->name == "Account Write")
                  <th width="80px;" class="text-center"><h5><strong>ပြင်ရန်</strong></h5></th>
                  <th width="80px;" class="text-center"><h5><strong>ဖျက်ရန်</strong></h5></th>
              	@endif
              @endforeach

      			</thead>
            <tbody>
              @foreach ($financial_years->sortByDesc('id') as $financial_year)
                <tr>
                  <td>#</td>
                  <td class="text-center">
                    <a href="{{ route('months.index', $financial_year->id) }}" >{{ $financial_year->name }}</samp></a>
                  </td>
                  <td class="text-right">{{ number_format($financial_year->open_balance) }}</td>
                  <td class="text-right">{{ number_format($financial_year->balance) }}</td>
                  <td class="text-center">
                    <a href="{{ route('months.index', $financial_year->id) }}">
                      <button type="button" rel="tooltip" title="ကြည့်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;">
                          <i class="fa fa-eye text-success"></i>
                      </button>
                    </a>
                      {{-- <a href="{{ route('months.index', $financial_year->id) }}">
                        <button type="button" rel="tooltip" title="ကြည့်ရန်" class="btn btn-white btn-round btn-xs btn-circle" style="padding:3px 3px;">
                            <i class="fa fa-plus-circle text-success"></i>
                        </button>
                      </a> --}}
                  </td>
                  @foreach(Auth::user()->roles as $key => $navrole)
                  	@if ($navrole->name == "Administrator")
                      @include('accounts.years.edit')
                  	@elseif ($navrole->name == "Account Manager")
                      @include('accounts.years.edit')
                  	@elseif ($navrole->name == "Account Write")
                      @include('accounts.years.edit')
                  	@endif
                  @endforeach
              @endforeach
            </tbody>
      		</table>

      	</div>
        <div class="card-footer text-center">
            {{ $financial_years->links() }}
        </div>
      </div>

    </div>
    @foreach(Auth::user()->roles as $key => $navrole)
    	@if ($navrole->name == "Administrator")
        @include('accounts.years._create')
    	@elseif ($navrole->name == "Account Manager")
        @include('accounts.years._create')
    	@elseif ($navrole->name == "Account Write")
        @include('accounts.years._create')
    	@endif
    @endforeach
  </div>
</div>
