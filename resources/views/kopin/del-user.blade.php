<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')

<body>
<div class="text-center" style="margin-top:20%">
  <a href="{{ url('/logout') }}"
      onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
    <h1>Sorry !</h1>
  </a>
  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
</div>
  <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

	{{-- @include('layouts._footer') --}}

</html>
