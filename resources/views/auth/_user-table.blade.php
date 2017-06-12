      <div class="card card-nav-tabs">
        <div class="card-header" data-background-color="green">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <span class="nav-tabs-title"><strong>အသုံးပြုသူစာရင်း</strong></span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="active">
                  <a href="#User" data-toggle="tab">
                    <i class="material-icons">supervisor_account</i>
                    အသုံးပြုခွင့်ရှိသူ
                  <div class="ripple-container"></div></a>
                </li>
                <li class="">
                  <a href="#PersonalDept" data-toggle="tab">
                    <i class="material-icons">supervisor_account</i>
                    ဝန်ထမ်းရေးရာ
                  <div class="ripple-container"></div></a>
                </li>
                <li class="">
                  <a href="#AccountDept" data-toggle="tab">
                    <i class="material-icons">supervisor_account</i>
                    ငွေစာရင်း
                  <div class="ripple-container"></div></a>
                </li>
                <li class="">
                  <a href="#help" data-toggle="tab">
                    {{-- <i class="material-icons">account_balance_wallet</i> --}}
                    <i class="fa fa-info-circle"></i>
                    <strong>အသုံးပြုပုံ</strong>
                  <div class="ripple-container"></div></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card-content">
          <div class="tab-content">
            <div class="tab-pane in active" id="User">
              @include('auth.roles._user-roles')
            </div>
            <div class="tab-pane" id="PersonalDept">
              @include('auth.roles._personal-roles')
            </div>
            <div class="tab-pane" id="AccountDept">
              @include('auth.roles._account-roles')
            </div>
            <div class="tab-pane" id="help">
              <div class="card-content">
                @include('documentation.user.list')
              </div>
            </div>
          </div>
        </div>
      </div>
