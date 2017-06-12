<li class="{{ Request::is('personals/create') ? "active" : "" }}">
  <a href="{{ url('/personals/create') }}">
    <i class="material-icons pull-right">person_add</i>
    <p>ဝန်ထမ်း အသစ်ထည့်ရန်</p>
  </a>
</li>
@foreach (Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    <li class="{{ Request::is('position_types') ? "active" : "" }}">
      <a href="{{ route('position_types.index') }}">
          <i class="material-icons pull-right">person_pin</i>
        <p>ရာထူးစာရင်း</p>
      </a>
    </li>
    <li class="{{ Request::is('depts') ? "active" : "" }}">
        <a href="{{ route('depts.index') }}">
          <i class="material-icons pull-right">view_quilt</i>
          <p>ဌာနစာရင်း</p>
        </a>
    </li>
  @elseif ($navrole->name == "Personal Manager")
    <li class="{{ Request::is('position_types') ? "active" : "" }}">
      <a href="{{ route('position_types.index') }}">
          <i class="material-icons pull-right">person_pin</i>
        <p>ရာထူးစာရင်း</p>
      </a>
    </li>
    <li class="{{ Request::is('depts') ? "active" : "" }}">
        <a href="{{ route('depts.index') }}">
          <i class="material-icons pull-right">view_quilt</i>
          <p>ဌာနစာရင်း</p>
        </a>
    </li>
  @endif
@endforeach
<li class="{{ Request::is('personal/help') ? "active" : "" }}">
  <a href="{{ url('/personal/help') }}">
    <i class="fa fa-info-circle pull-right"></i>
    <p>အသုံးပြုပုံ</p>
  </a>
</li>
