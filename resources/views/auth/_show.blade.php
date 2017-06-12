<div class="card card-nav-tabs">
  <div class="card-header" data-background-color="green">
    <div class="nav-tabs-navigation">
      <div class="nav-tabs-wrapper">
        {{-- <span class="nav-tabs-title"><strong></strong></span> --}}
        <ul class="nav nav-tabs" data-tabs="tabs">

          <li class="active">
            <a href="#AssignRole" data-toggle="tab">
              <i class="fa fa-user-circle-o"></i>
              <strong>{{ $user->name }}'s Role</strong>
            <div class="ripple-container"></div></a>
          </li>
          <li class="">
            <a href="#help" data-toggle="tab">
              {{-- <i class="material-icons">account_balance_wallet</i> --}}
              <i class="fa fa-info-circle"></i>
              <strong>အသုံးပြုပုံ</strong>
            <div class="ripple-container"></div></a>
          </li>
          <a href="{{ url('/users/list') }}">
            <button type="button" class="btn btn-white btn-round btn-circle btn-xs pull-right" style="padding:3px;">
              <i class="fa fa-list text-success"></i>
            </button>
          </a>
        </ul>
      </div>
    </div>
  </div>
  <div class="card-content">
    <div class="tab-content">
      <div class="tab-pane in active" id="AssignRole">
        <div class="row" style="margin-top:20px;">
          <div class="col-lg-12">
            <div class="tab-content text-primary">
              <form action="{{route('assign')}}" method="post">
                @include('auth._assign-role')
              </form>

              @foreach ($user->roles as $role)
                @if ($role->name == "User")
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DelAccount{{ $user->id }}">
                    Delete Account
                  </button>
                  @include('auth._delete')
                @endif
              @endforeach

            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="help">
        <div class="row">
          <div class="col-lg-12">
          <div class="tab-content">
            <div class="card-content">
              @include('documentation.user.uses')
              <hr>
              @include('documentation.user.delete')
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
