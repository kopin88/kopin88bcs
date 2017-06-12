@php
$username9 = null;
foreach ($roles[9]->users as $key => $user) {
  $username9 = $user->name;
}
@endphp
@if (isset($username9))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[9]->name }}</strong>
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
          @foreach ($roles[9]->users->where('active', 0) as $user)
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
  $username10 = null;
  foreach ($roles[10]->users as $key => $user) {
    $username10 = $user->name;
  }
@endphp
@if (isset($username10))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[10]->name }}</strong>
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
          @foreach ($roles[10]->users->where('active', 0) as $user)
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
  $username11 = null;
  foreach ($roles[11]->users as $key => $user) {
    $username11 = $user->name;
  }
@endphp
@if (isset($username11))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[11]->name }}</strong>
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
          @foreach ($roles[11]->users->where('active', 0) as $user)
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
