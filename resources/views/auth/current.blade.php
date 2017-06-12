
  <div class="content">
    <div class="container-fluid">
      <div class="row" style="margin-top:50px;">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
        <div class="col-md-4 col-sm-12 col-md-offset-4">
          <div class="card">
            <div class="card-header card-chart" data-background-color="green">
              <div class="user">
                <div class="photo text-center"><br>
                    {{-- <img src="/uploads/images/Ministry_of_Agriculture_and_Irrigation.svg.png" alt="" style="width:150px; height:150px; border-radius:50%;" /> --}}
                    <img src="/uploads/images/logo.jpg" alt="" style="width:150px; height:150px; border-radius:50%;" />
                </div>
                <div class="info text-center">
                  {{-- <h4>Ministry Of Agriculture & Irrigation</h4> --}}
                  <h4>Organization Name</h4>
                  <br>
                </div>
              </div>
            </div>
            <div class="card-content">
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} label-floating has-success">
                      <div class="col-md-10 col-md-offset-1 input-group">
                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} label-floating has-success">
                      <div class="col-md-10 col-md-offset-1 input-group">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                          </div>
                          <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group label-floating has-success">
                      <div class="col-md-10 col-md-offset-1">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-4 col-md-offset-1">
                          <button type="submit" class="btn btn-success btn-sm">
                              Login
                          </button>
                        </div>
                        <div class="col-md-6">
                          <a class="btn btn-link btn-sm btn-primary" href="{{ url('/password/reset') }}">
                              Forgot Your Password?
                          </a>
                      </div>
                  </div>
            </div>
            {{-- <div class="card-footer">

              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div> --}}
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
