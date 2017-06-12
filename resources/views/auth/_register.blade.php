<div class="card card-nav-tabs">
  <div class="card-header" data-background-color="green">
    <div class="nav-tabs-navigation">
      <div class="nav-tabs-wrapper">
        {{-- <span class="nav-tabs-title"><strong></strong></span> --}}
        <ul class="nav nav-tabs" data-tabs="tabs">

          <li class="active">
            <a href="#Register" data-toggle="tab">
              <i class="fa fa-user-circle-o"></i>
              <strong>အသုံးပြုသူ အသစ်ထည့်ရန် ( Register )</strong>
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
      <div class="tab-pane in active" id="Register">
        <div class="row" style="margin-top:20px;">
          <div class="col-lg-12">
            <div class="tab-content">
              @include('auth._register-form')
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="help">
        <div class="row">
          <div class="col-lg-12">
          <div class="tab-content">
            <div class="card-content">
              @include('documentation.user.register')
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
