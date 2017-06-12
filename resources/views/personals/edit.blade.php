@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
  @foreach (Auth::user()->roles as $key => $navrole)
  	@if ($navrole->name == "Administrator")
  		@include('personals._edit')
  	@elseif ($navrole->name == "Personal Manager")
  		@include('personals._edit')
  	@elseif($navrole->name == "Personal Write")
  		@include('personals._edit')
  	@endif
  @endforeach
@endsection

@section('script')
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
