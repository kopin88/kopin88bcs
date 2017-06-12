@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')

<div class="col-md-12">
  <div class="card">
  	<div class="card-header" data-background-color="green">
      <strong>{{ $personal->name }}၏ ခွင့်မှတ်တမ်း</strong>
    </div>
    <div class="card-content">
      <table class="table table-bordered table-hover tab kopin-font">
        <thead>
          <tr>
            <th class="text-center" width="50px;">စဉ်</th>
            <th class="text-center">နှစ်</th>
            <th width="200px;" class="text-center">
              အသေးစိတ်ကြည့်ရန်
            </th>
          </tr>
        </thead>
        @php
          $no = 1;
        @endphp
        <tbody>
      @foreach ($leave_years->sortByDesc('id') as $leave_year)
        <tr>
          <td class="text-right">{{ $no++ }}</td>
          <td>{{ $leave_year->name }}</td>
          <td class="text-center">
            <a href="{{ route('leaves.show', [$personal->id, $leave_year->id]) }}" class="btn btn-success btn-xs"><samp class="glyphicon glyphicon-eye-open"></samp></a>
          </td>
        </tr>
      @endforeach
    </tbody>
      </table>
    </div>
    <div class="card-footer">
      @php
          foreach (Auth::user()->roles as $key => $user_role){
            $UserRole = $user_role->name;
          }
      @endphp
        <a href="/personals" data-toggle="hover" class="btn btn-success btn-xs" title="နောက်သို့">
        <span class="glyphicon glyphicon-backward"><strong> Back</strong></span>
        </a>
    </div>
  </div>
</div>

@endsection
