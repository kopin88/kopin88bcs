<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
<body>
	<div class="wrapper">
	  @yield('sidebar')
    <div class="main-panel">
      @include('layouts.nav')
       <div class="content" style="margin-top:-40px;">
         {{-- @yield('top-nav') --}}
         @yield('content')
         @yield('additional')
       </div>
	     {{-- @include('layouts.footer') --}}
    </div>
	</div>
  <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
	{{-- @include('layouts._footer') --}}
</html>
