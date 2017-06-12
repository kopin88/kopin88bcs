@php
$username6 = null;
foreach ($roles[6]->users as $key => $user) {
  $username6 = $user->name;
}
@endphp
@if (isset($username6))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[6]->name }}</strong>
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
          @foreach ($roles[6]->users->where('active', 0) as $user)
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
  $username7 = null;
  foreach ($roles[7]->users as $key => $user) {
    $username7 = $user->name;
  }
@endphp
@if (isset($username7))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[7]->name }}</strong>
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
          @foreach ($roles[7]->users->where('active', 0) as $user)
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
  $username8 = null;
  foreach ($roles[8]->users as $key => $user) {
    $username8 = $user->name;
  }
@endphp
@if (isset($username8))
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>{{ $roles[8]->name }}</strong>
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
          @foreach ($roles[8]->users->where('active', 0) as $user)
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
