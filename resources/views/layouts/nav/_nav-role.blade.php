@foreach(Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    @include('layouts.nav.pm')
    @include('layouts.nav.um')
    <li class="divider"></li>
  @elseif ($navrole->name =="Personal Manager")
    @include('layouts.nav.pm')
    <li class="divider"></li>
  @elseif ($navrole->name =="Personal Write")
    @include('layouts.nav.pm')
    <li class="divider"></li>
  @elseif ($navrole->name =="User Manager")
    @include('layouts.nav.um')
    <li class="divider"></li>
  @endif
@endforeach
