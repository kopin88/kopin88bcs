@php
  $username0 = null;
  foreach ($roles[0]->users as $key => $user) {
    $username0 = $user->name;
  }
@endphp
@if (isset($username0))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[0]->name }}</strong>
    </div>
    <div class="panel-body table-responsive">
        <table class="table">
          <thead>
            <th class="text-center" width="80px">No.</th>
            <th class="text-center">User</th>
            <th>User Name</th>
            <th>Email</th>
            <th class="text-center">Role</th>
          </thead>
          <tbody>
          @php
            $no=1;
          @endphp
          @foreach ($roles[0]->users->where('active', 0) as $user)
            <tr>
              <td class="text-right" style="vertical-align:middle;">
                {{ $no++ }}
              </td>
              <td class="text-center">
                <img src="/uploads/user_images/{{ $user->avatar }}" alt="" style="width:50px; height:50px; border-radius:50%"/>
              </td>
              <td style="vertical-align:middle;">{{ $user->name }}</td>
              <td style="vertical-align:middle;">{{ $user->email }}</td>
              <td style="vertical-align:middle;">
                <a href="{{ route('users.show', $user->id) }}" ><span class="glyphicon glyphicon-flag text-center" style="color: #3097D1;"></span></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- <div class="panel-footer">
        <div class="text-center">
          {{ $roles->links() }}
        </div>
    </div> --}}
  </div>
@endif


@php
  $username1 = null;
  foreach ($roles[1]->users as $key => $user) {
    $username1 = $user->name;
  }
@endphp
@if (isset($username1))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[1]->name }}</strong>
    </div>
    <div class="panel-body table-responsive">
        <table class="table">
          <thead>
            <th class="text-center" width="80px">No.</th>
            <th class="text-center">User</th>
            <th>User Name</th>
            <th>Email</th>
            <th class="text-center">Role</th>
          </thead>
          <tbody>
          @php
            $no=1;
          @endphp
          @foreach ($roles[1]->users->where('active', 0) as $user)
            <tr>
              <td class="text-right" style="vertical-align:middle;">
                {{ $no++ }}
              </td>
              <td class="text-center">
                <img src="/uploads/user_images/{{ $user->avatar }}" alt="" style="width:50px; height:50px; border-radius:50%"/>
              </td>
              <td style="vertical-align:middle;">{{ $user->name }}</td>
              <td style="vertical-align:middle;">{{ $user->email }}</td>
              <td style="vertical-align:middle;">
                <a href="{{ route('users.show', $user->id) }}" ><span class="glyphicon glyphicon-flag text-center" style="color: #3097D1;"></span></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- <div class="panel-footer">
        <div class="text-center">
          {{ $roles->links() }}
        </div>
    </div> --}}
  </div>
@endif


@php
    foreach (Auth::user()->roles as $key => $navrole){
      $navroles = $navrole->name;
    }
@endphp
@if ($navroles == "Administrator")
  @php
    $username2 = null;
    foreach ($roles[2]->users as $key => $user) {
      $username2 = $user->name;
    }
  @endphp
  @if (isset($username2))
    <div class="panel panel-success">
      <div class="panel-heading">
        <strong>{{ $roles[2]->name }}</strong>
      </div>
      <div class="panel-body table-responsive">
          <table class="table">
            <thead>
              <th class="text-center" width="80px">No.</th>
              <th class="text-center">User</th>
              <th>User Name</th>
              <th>Email</th>
              <th class="text-center">Role</th>
            </thead>
            <tbody>
            @php
              $no=1;
            @endphp
            @foreach ($roles[2]->users->where('active', 0) as $user)
              <tr>
                <td class="text-right" style="vertical-align:middle;">
                  {{ $no++ }}
                </td>
                <td class="text-center">
                  <img src="/uploads/user_images/{{ $user->avatar }}" alt="" style="width:50px; height:50px; border-radius:50%"/>
                </td>
                <td style="vertical-align:middle;">{{ $user->name }}</td>
                <td style="vertical-align:middle;">{{ $user->email }}</td>
                <td style="vertical-align:middle;">
                  <a href="{{ route('users.show', $user->id) }}" ><span class="glyphicon glyphicon-flag text-center" style="color: #3097D1;"></span></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- <div class="panel-footer">
          <div class="text-center">
            {{ $roles->links() }}
          </div>
      </div> --}}
    </div>
  @endif
@endif
