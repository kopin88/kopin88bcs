
<div class="col-lg-12 col-md-6">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">{{ $user->name }}'s Profile</h4>
      		{{-- <p class="category">Here is a subtitle for this table</p> --}}
      	</div>
        <div class="card-content">
          <div class="col-md-4">
            <div class="text-center" style="margin-top:20%;">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail text-center" style="width:150px; height:150px; border-radius:50%;">
                  <?php $image = !is_null($user->avatar) ? $user->avatar : 'default.jpg' ?>
                  {!! Html::image('uploads/user_images/' . $image, $user->name, ['class'=>'media-object', 'style'=>'width:150px; height:150px; border-radius:50%;']) !!}
                </div>

                <div class="fileinput-preview fileinput-exists thumbnail text-center" style="width:150px; height:150px; float:left; border-radius:50%;"></div>

                  <div class="text-center">
                    <span class="btn btn-success btn-file btn-sm"><span class="fileinput-new">Change Photo</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                    <a href="#" class="btn btn-primary fileinput-exists btn-sm" data-dismiss="fileinput">Remove</a>
                  </div>
              </div>
            </div>

          </div>
          <div class="col-md-8">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('changepass') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('passwordold') ? ' has-error' : '' }} has-success">
                    <label for="passwordold" class="col-md-4 control-label"><h4>Current Password</h4></label>

                    <div class="col-md-6">
                        <input id="passwordold" type="password" class="form-control" name="passwordold" required autofocus="autofocus">

                        @if ($errors->has('passwordold'))
                            <span class="help-block">
                                <strong>{{ $errors->first('passwordold') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-success">
                    <label for="password" class="col-md-4 control-label"><h4>New Password</h4></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-success">
                    <label for="password-confirm" class="col-md-4 control-label"><h4>Confirm Password</h4></label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-success btn-sm">
                            Change Password
                        </button>
                    </div>
                </div>
            </form>
          </div>
      	</div>
      </div>
</div>
