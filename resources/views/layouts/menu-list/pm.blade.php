<li class="{{ Request::is('LeaveYears') ? "active" : "" }} || {{ Request::is('leave_types') ? "active" : "" }}">
  <a data-toggle="collapse" href="#Leave">
    <i class="material-icons">date_range</i>
    <p>ခွင့်သတ်မှတ်ရန်
      <b class="caret"></b>
    </p>
  </a>
  <div class="collapse" id="Leave">
    <ul class="nav">
      <li class="{{ Request::is('LeaveYears') ? "active" : "" }}">
        <a href="{{ route('LeaveYears.index') }}">
        <i class="material-icons pull-right">perm_contact_calendar</i>
        <p>နှစ် (ခွင့်သတ်မှတ်ရန်)</p>
        </a>
      </li>
      <li class="{{ Request::is('leave_types') ? "active" : "" }}">
      <a href="{{ url('/leave_types') }}">
        <i class="material-icons pull-right">view_list</i>
        <p>ခွင့်အမျိုးအစားများ</p>
      </a>
      </li>
    </ul>
  </div>
</li>
