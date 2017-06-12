@extends('layouts.app')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
      <div class="col-lg-12 col-md-6">
        <div class="row">
          <div class="col-lg-8 col-md-6">
            <div class="card card-chart">
              <div class="row">
                <div class="col-lg-8">
                  <div class="card-header" data-background-color="green">
                		<h4 class="title">{{ $personal->name }} ၏ {{ $leave_year->name }} ခွင့်မှတ်တမ်း</h4>
                		<p class="category">ဝန်ထမ်းရေးရာ</p>
                	</div>
                </div>
                <div class="col-lg-4">
                    <div class="card-content pull-right" style="float:right" data-background-color="white">
                      @foreach (Auth::user()->roles as $key => $user_role)
                        @if ($user_role->name == "Personal Write")
                          <div class="pull-right">
                            <button type="button" rel="tooltip" title="အသစ်ထည့်ရန်" class="btn btn-success btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#LeaveModel">
                              <i class="material-icons">add</i>
                            </button>
                            @include('personals.leaves.create-form')
                          </div>
                        @elseif($user_role->name == "Personal Manager")
                          <div class="pull-right">
                            <button type="button" rel="tooltip" title="အသစ်ထည့်ရန်" class="btn btn-success btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#LeaveModel">
                              <i class="material-icons">add</i>
                            </button>
                            @include('personals.leaves.create-form')
                          </div>
                        @elseif($user_role->name == "Administrator")
                          <div class="pull-right">
                            <button type="button" rel="tooltip" title="အသစ်ထည့်ရန်" class="btn btn-success btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#LeaveModel">
                              <i class="material-icons">add</i>
                            </button>
                            @include('personals.leaves.create-form')
                          </div>
                        @endif
                      @endforeach
                    </div>
                </div>
              </div>
              <div class="card-content table-responsive">
                @include('personals.leaves.detail')
                <a class="text-success" href="{{ route('leaves.index', $personal->id) }}">
                  <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
                  နောက်သို့
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header" data-background-color="green">
                <h4 class="title">ခွင့်အမျိုးအစားများ</h4>
                <p class="category">ဝန်ထမ်းရေးရာ</p>
              </div>
              <div class="card-content table-responsive">
                <table class="table table-bordered">
                  <thead class="text-primary">
                    <th class="text-center"><strong>ခွင့်အမျိုးအစား</strong></th>
                    <th class="text-center"><strong>ခွင့်ရက်</strong></th>
                    </thead>
                      @foreach ($leave_type as $leavetype)
                          <tr>
                            <td>{{ $leavetype->name }}</td>
                            <td class="text-right">{{ $leavetype->day }} - ရက်</td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
