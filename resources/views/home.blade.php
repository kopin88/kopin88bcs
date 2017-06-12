@foreach (Auth::user()->roles as $key => $navrole)
@if ($navrole->name == "User")
  @include('kopin.del-user')
@else
  @include('_home')
@endif
@endforeach
