@php
$username3 = null;
foreach ($roles[3]->users as $key => $user) {
  $username3 = $user->name;
}
@endphp
@if (isset($username3))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[3]->name }}</strong>
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
          @foreach ($roles[3]->users->where('active', 0) as $user)
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
  $username4 = null;
  foreach ($roles[4]->users as $key => $user) {
    $username4 = $user->name;
  }
@endphp
@if (isset($username4))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[4]->name }}</strong>
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
          @foreach ($roles[4]->users->where('active', 0) as $user)
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
  $username5 = null;
  foreach ($roles[5]->users as $key => $user) {
    $username5 = $user->name;
  }
@endphp
@if (isset($username5))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[5]->name }}</strong>
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
          @foreach ($roles[5]->users->where('active', 0) as $user)
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
