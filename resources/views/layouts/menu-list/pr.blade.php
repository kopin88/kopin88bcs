<li class="{{ Request::is('position_types') ? "active" : "" }} || {{ Request::is('depts') ? "active" : "" }} || {{ Request::is('personals/create') ? "active" : "" }} || {{ Request::is('personals') ? "active" : "" }} || {{ Request::is('personals/*') ? "active" : "" }}">
  <a data-toggle="collapse" href="#Personal">
    {{-- <i class="material-icons">account_box</i> --}}
    <i class="fa fa-sitemap" aria-hidden="true"></i>
      <p>ဝန်ထမ်းရေးရာ
          <b class="caret"></b>
      </p>
  </a>
  <div class="collapse" id="Personal">
      <ul class="nav">
        <li class="{{ Request::is('personals') ? "active" : "" }}">
          <a href="{{ route('personals.index') }}">
              <i class="material-icons pull-right">account_box</i>
            <p>ဝန်ထမ်းများ</p>
          </a>
        </li>
        <li class="{{ Request::is('personals/transfer/list') ? "active" : "" }}">
            <a href="{{ route('personals.transferlist') }}">
              <i class="material-icons pull-right">transform</i>
              <p>ပြောင်းရွေ့</p>
            </a>
        </li>
        <li class="{{ Request::is('personals/resign/list') ? "active" : "" }}">
            <a href="{{ route('personals.resignlist') }}">
              <i class="material-icons pull-right">launch</i>
              <p>နှုတ်ထွက်/ရပ်နား</p>
            </a>
        </li>
        <li class="{{ Request::is('personals/pension/list') ? "active" : "" }}">
            <a href="{{ route('personals.pensionlist') }}">
              <i class="material-icons pull-right">beenhere</i>
              <p>ပင်စင်</p>
            </a>
        </li>
        @foreach (Auth::user()->roles as $key => $navrole)
          @if ($navrole->name == "Administrator")
            @include('layouts.menu-list.pw')
          @elseif ($navrole->name == "Personal Manager")
            @include('layouts.menu-list.pw')
          @elseif ($navrole->name == "Personal Write")
            @include('layouts.menu-list.pw')
          @endif
        @endforeach
      </ul>
  </div>
</li>

@foreach(Auth::user()->roles as $key => $navrole)
	@if ($navrole->name == "Administrator")
    @include('layouts.menu-list.pm')
	@elseif ($navrole->name == "Personal Manager")
    @include('layouts.menu-list.pm')
	@endif
@endforeach
