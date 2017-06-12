@foreach ($grouped as $leave_type_id=>$leaves)

  <strong>
    @php
      $leave_title = App\Models\Personals\LeaveType::find($leave_type_id);
    @endphp
    <strong>{{ $leave_title->name }} ({{ $leave_title->day }}) - ရက်</strong>
  </strong><br><br>
  <table class="table table-bordered">
    <thead class="text-primary">
        <th class="text-center" width="200px;">မှ</th>
        <th class="text-center" width="200px;">ထိ</th>
        <th class="text-center" width="100px;">ခွင့်ရက်</th>
        <th class="text-center" width="300px;">မှတ်ချက်</th>

        @foreach (Auth::user()->roles as $key => $user_role)
          @if ($user_role->name == "Personal Write")
            <th class="text-center" width="150px;">ပြင်ရန်</th>
          @elseif($user_role->name == "Personal Manager")
            <th class="text-center" width="150px;">ပြင်ရန်</th>
          @elseif($user_role->name == "Administrator")
            <th class="text-center" width="150px;">ပြင်ရန်</th>
          @endif
        @endforeach

      </thead>
      <tbody>
        @foreach ($leaves as $leave)
          <tr>
            <td class="text-center">{{ date('d - M - Y', strtotime($leave->from_date)) }}</td>
            <td class="text-center">{{ date('d - M - Y', strtotime($leave->to_date)) }}</td>
            <td class="text-right">{{$leave->total}}</td>
            <td>{{ $leave->remark }}</td>

            @if ($user_role->name == "Personal Write")
              <td class="text-center">
                <button type="button" rel="tooltip" title="ပြင်မည်" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
                  <i class="material-icons" data-toggle="modal" data-target="#LeaveModel{{ $leave->id }}">edit</i>
                </button>

                <button type="button" rel="tooltip" title="ဖျက်မည်"class="btn btn-danger btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#LeaveModelDel{{ $leave->id }}">
                <i class="material-icons">close</i>
                  </span>
                </button>

                <div class="modal fade" id="LeaveModelDel{{ $leave->id }}" tabindex="-1" role="dialog" aria-labelledby="LeaveModelLabel">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="LeaveModelLabel"> ဖျက်ရန် </h4>
                      </div>
                      {!! Form::open(['method' => 'DELETE', 'route' => ['leaves.destroy', $leave->id], 'class' => 'form-horizontal']) !!}
                        <div class="modal-body">
                          <strong>သေချာပါသလား?</strong>
                        </div>
                        <div class="modal-footer">
                          @include('kopin.button-sure')
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
                  @include('personals.leaves.edit-form')
              </td>
            @elseif($user_role->name == "Personal Manager")
              <td class="text-center">
                <button type="button" rel="tooltip" title="ပြင်မည်" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
                  <i class="material-icons" data-toggle="modal" data-target="#LeaveModel{{ $leave->id }}">edit</i>
                </button>

                <button type="button" rel="tooltip" title="ဖျက်မည်"class="btn btn-danger btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#LeaveModelDel{{ $leave->id }}">
                <i class="material-icons">close</i>
                  </span>
                </button>

                <div class="modal fade" id="LeaveModelDel{{ $leave->id }}" tabindex="-1" role="dialog" aria-labelledby="LeaveModelLabel">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="LeaveModelLabel"> ဖျက်ရန် </h4>
                      </div>
                      {!! Form::open(['method' => 'DELETE', 'route' => ['leaves.destroy', $leave->id], 'class' => 'form-horizontal']) !!}
                        <div class="modal-body">
                          <strong>သေချာပါသလား?</strong>
                        </div>
                        <div class="modal-footer">
                          @include('kopin.button-sure')
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
                  @include('personals.leaves.edit-form')
              </td>
            @elseif($user_role->name == "Administrator")
              <td class="text-center">
                <button type="button" rel="tooltip" title="ပြင်မည်" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;">
                  <i class="material-icons" data-toggle="modal" data-target="#LeaveModel{{ $leave->id }}">edit</i>
                </button>

                <button type="button" rel="tooltip" title="ဖျက်မည်"class="btn btn-danger btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#LeaveModelDel{{ $leave->id }}">
                <i class="material-icons">close</i>
                  </span>
                </button>

                <div class="modal fade" id="LeaveModelDel{{ $leave->id }}" tabindex="-1" role="dialog" aria-labelledby="LeaveModelLabel">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="LeaveModelLabel"> ဖျက်ရန် </h4>
                      </div>
                      {!! Form::open(['method' => 'DELETE', 'route' => ['leaves.destroy', $leave->id], 'class' => 'form-horizontal']) !!}
                        <div class="modal-body">
                          <strong>သေချာပါသလား?</strong>
                        </div>
                        <div class="modal-footer">
                          @include('kopin.button-sure')
                        </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
                  @include('personals.leaves.edit-form')
              </td>
            @endif
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td class="text-center" colspan="2"><strong>လက်ကျန်ရက်</strong></td>
          <td class="text-right">
            <strong>
            @php
                $total=0;
                foreach ($leaves as $leave)
                {
                    $total+= $leave->total;
                }

                echo $balance = ($leave_title->day)-$total;
            @endphp
              </strong>
          </td>
          <td> </td>
          @foreach (Auth::user()->roles as $key => $user_role)
            @if ($user_role->name == "Personal Write")
              <td></td>
            @elseif($user_role->name == "Personal Manager")
              <td></td>
            @elseif($user_role->name == "Administrator")
              <td></td>
            @endif
          @endforeach
        </tr>
      </tfoot>
    </table>
    <hr>
@endforeach
