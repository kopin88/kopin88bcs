<div class="card-content">
  <div class="col-md-offset-1">
    <div class="row">
      <div class="col-md-1">
        <img src="/uploads/user_images/{{ $user->avatar }}" alt="" style="width:50px; height:50px; border-radius:50%"/>
      </div>
      <div class="col-md-6">
        User Name :  {{ $user->name }}<br>
        Email : {{ $user->email }}<input type="hidden" name="email" value="{{$user->email}}">
      </div>
    </div>
    <hr>
    <strong>User</strong>
    <div class="row">
        <div class="col-md-4">
          <div class="togglebutton">
          	<label>
              	<input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user">
          	</label> :
            <label><strong>User</strong></label>
          </div>
        </div>
        @foreach (Auth::user()->roles as $key => $navrole)
          @if ($navrole->name == "Administrator")
            <div class="col-md-4">
            </div>
          @elseif ($navrole->name == "User Manager")
            <div class="col-md-4">
            </div>
          @endif
        @endforeach
        <div class="col-md-4">
          <div class="togglebutton">
            <label>
              <input type="checkbox" {{ $user->hasRole('User Manager') ? 'checked' : '' }} name="role_user_manager">
            </label> :
            <label><strong>Manager</strong></label>
          </div>
        </div>
    </div>
    <hr>
    <strong>Personal</strong>
    <div class="row" style="margin-bottom:5px;">
      <div class="col-md-4">
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Personal Read') ? 'checked' : '' }} name="role_personal_r">
          </label> :
          <label><strong>Read</strong></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Personal Write') ? 'checked' : '' }} name="role_personal_w">
          </label> :
          <label><strong>Write</strong></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Personal Manager') ? 'checked' : '' }} name="role_personal_m">
          </label> :
          <label><strong>Manager</strong></label>
        </div>
      </div>
    </div>
    <hr>

    <strong>Account</strong>
    <div class="row" style="margin-bottom:5px;">
      <div class="col-md-4">
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Account Read') ? 'checked' : '' }} name="role_account_r">
          </label> :
          <label><strong>Read</strong></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Account Write') ? 'checked' : '' }} name="role_account_w">
          </label> :
          <label><strong>Write</strong></label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="togglebutton">
          <label>
            <input type="checkbox" {{ $user->hasRole('Account Manager') ? 'checked' : '' }} name="role_account_m">
          </label> :
          <label><strong>Manager</strong></label>
        </div>
      </div>
    </div>
    {{-- <strong>Store</strong>
    <hr>

    <div class="row" style="margin-bottom:5px;">
      <div class="col-md-offset-1 col-md-2">
        Read
      </div>
      <div class="col-md-1 text-center">
        <div class="togglebutton">
          <label><strong>Read</strong></label>
          <label>
            <input type="checkbox" {{ $user->hasRole('Store Read') ? 'checked' : '' }} name="role_store_r">
          </label>
        </div>
      </div>
    </div>
    <div class="row" style="margin-bottom:5px;">
      <div class="col-md-offset-1 col-md-2">
        Write
      </div>
      <div class="col-md-1 text-center">
        <div class="togglebutton">
          <label><strong>Write</strong></label>
          <label>
          <label><input type="checkbox" {{ $user->hasRole('Store Write') ? 'checked' : '' }} name="role_store_w"></label>
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom">
      <div class="col-md-offset-1 col-md-2">
        Manager
      </div>
      <div class="col-md-1 text-center">
        <div class="togglebutton">
          <label><strong>Manager</strong></label>
          <label>
          <label><input type="checkbox" {{ $user->hasRole('Store Manager') ? 'checked' : '' }} name="role_store_m"></label>
        </div>
      </div>
    </div> --}}


    @foreach (Auth::user()->roles as $key => $navrole)
      @if ($navrole->name == "Administrator")
        <hr>
        <strong>Administrator</strong>
        <div class="row">
          <div class="col-md-12">
            <div class="togglebutton">
              <label>
                  <input type="checkbox" {{ $user->hasRole('Administrator') ? 'checked' : '' }} name="role_admin">
              </label> :
              <label><strong>Administrator</strong></label>
            </div>
          </div>
        </div>
      @endif
    @endforeach


  </div>
</div>
<div class="card-footer">
  {{ csrf_field() }}
  <div class="col-md-offset-1 col-md-2">
    {!! Form::submit('Assign Role', ['class' => 'btn btn-success btn-sm']) !!}
  </div>
</div>
