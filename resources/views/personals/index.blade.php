@extends('layouts.app')
@section('title')
	 - ဝန်ထမ်းရေးရာ
@endsection

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

	@foreach (Auth::user()->roles as $key => $user_role)
    @if ($user_role->name == "Administrator")
			@include('personals._index')
		@elseif ($user_role->name == "Personal Manager")
			@include('personals._index')
		@elseif($user_role->name == "Personal Write")
			@include('personals._index')
		@elseif($user_role->name == "Personal Read")
			@include('personals._index')
		@endif
	@endforeach

@endsection

@section('script')
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
  $(function() {
    $("#term").autocomplete({
      source: "{{ route('personals.autocomplete') }}",
      minLength: 3,
      select: function(event, ui) {
        $("#term").val(ui.item.value);
      }
    });
  });
</script>
@endsection
