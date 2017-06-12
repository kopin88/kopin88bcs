<div class="sidebar" data-color="green">
{{-- <div class="logo">
  <a href="/" class="simple-text">
    <strong>MOAI</strong>
  </a>
</div> --}}
  <div class="sidebar-wrapper">
    <div class="user">
        <div class="photo text-center" style="padding-top:20px">
            {{-- <img src="/uploads/images/Ministry_of_Agriculture_and_Irrigation.svg.png" alt="" style="width:150px; height:150px; border-radius:50%;" /> --}}
            <a href="/">
              <img src="/uploads/images/logo.jpg" alt="" style="width:150px; height:150px; border-radius:50%;" />
            </a>
        </div>
    </div>
    <ul class="nav">
      <li class="{{ Request::is('/') ? "active" : "" || Request::is('org') ? "active" : "" || Request::is('documentation') ? "active" : "" }}">
        <a href="/">
          <i class="material-icons">dashboard</i>
          <p>ပင်မစာမျက်နှာ</p>
        </a>
      </li>
			@foreach(Auth::user()->roles as $key => $navrole)
				@if ($navrole->name == "Administrator")
					@include('layouts.menu-list.pr')
					@include('layouts.menu-list.am')
					@include('layouts.menu-list.um')
				@elseif ($navrole->name == "Personal Manager")
					@include('layouts.menu-list.pr')
				@elseif ($navrole->name == "Personal Write")
					@include('layouts.menu-list.pr')
				@elseif ($navrole->name == "Personal Read")
					@include('layouts.menu-list.pr')
				@elseif ($navrole->name == "User Manager")
					@include('layouts.menu-list.um')
				@elseif ($navrole->name == "Account Manager")
					@include('layouts.menu-list.am')
				@elseif	($navrole->name == "Account Write")
					@include('layouts.menu-list.am')
				@elseif	($navrole->name == "Account Read")
					@include('layouts.menu-list.am')
				@endif
			@endforeach
    </ul>
  </div>
</div>
