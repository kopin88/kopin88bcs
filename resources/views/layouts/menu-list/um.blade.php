
<li class="{{ Request::is('register') ? "active" : "" }} || {{ Request::is('users/list') ? "active" : "" }}">
  <a data-toggle="collapse" href="#UserGroup">
      {{-- <i class="material-icons">account_circle</i> --}}
      <i class="fa fa-users" aria-hidden="true"></i>
      <p>အသုံးပြုခွင့်
          <b class="caret"></b>
      </p>
  </a>
  <div class="collapse" id="UserGroup">
      <ul class="nav">
        <li class="{{ Request::is('register') ? "active" : "" }}">
          <a href="{{ url('/register') }}">
            <i class="material-icons pull-right">person_add</i>
            <p>Register</p>
          </a>
        </li>
        <li class="{{ Request::is('users/list') ? "active" : "" }}">
          <a href="{{ url('/users/list') }}">
            <i class="material-icons pull-right">supervisor_account</i>
            <p>အသုံးပြုသူစာရင်း</p>
          </a>
        </li>
        <li class="{{ Request::is('user/help') ? "active" : "" }}">
          <a href="{{ url('/user/help') }}">
            <i class="fa fa-info-circle pull-right"></i>
            <p>အသုံးပြုပုံ</p>
          </a>
        </li>
        {{-- <li class="{{ Request::is('register') ? "active" : "" }}">
          <a href="{{ url('/register') }}">
            <i class="material-icons pull-right">person_add</i>
            <p>Personal</p>
          </a>
        </li>
        <li class="{{ Request::is('register') ? "active" : "" }}">
          <a href="{{ url('/register') }}">
            <i class="material-icons pull-right">person_add</i>
            <p>Account</p>
          </a>
        </li> --}}
      </ul>
  </div>
</li>
