<div class="col-lg-12 col-md-12">
  <div class="card">
  	<div class="card-header" data-background-color="green">
  		<h4 class="title">{{ $personal->name }} ထမ်းဆောင်ခဲ့သော တာဝန်များ</h4>
  		<p class="category">ဝန်ထမ်းရေးရာ</p>
  	</div>
  	<div class="card-content table-responsive">
  		<table class="table">
  			<thead class="text-primary">
          <th class="text-center" ><h5><strong>နေ့စွဲ</strong></h5></th>
          <th class="text-center"><h5><strong>ရာထူး</strong></h5></th>
          <th class="text-center"><h5><strong>ဌာန</strong></h5></th>
          <th class="text-center"><h5><strong>အခြေခံလစာ</strong></h5></th>
          <th class="text-center"><h5><strong>နှစ်တိုး</strong></h5></th>
          <th class="text-center"><h5><strong>နှစ်တိုးဆုံး လစာ</strong></h5></th>
          <th class="text-center"><h5><strong>မှတ်ချက်</strong></h5></th>
          @foreach (Auth::user()->roles as $key => $user_role)
            @if ($user_role->name == "Personal Write")
              <th width="80px;" class="text-center">
                <button type="button" rel="tooltip" title="အသစ်ထည့်မည်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#PositionAdd">
                  {{-- <i class="material-icons text-primary">add_circle</i> --}}
                  <i class="fa fa-plus-circle text-primary" aria-hidden="true"></i>
                </button>
                @include('personals.positions.position-form')
              </th>
            @elseif($user_role->name == "Personal Manager")
              <th width="80px;" class="text-center">
                <button type="button" rel="tooltip" title="အသစ်ထည့်မည်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#PositionAdd">
                  {{-- <i class="material-icons text-primary">add_circle</i> --}}
                  <i class="fa fa-plus-circle text-primary" aria-hidden="true"></i>
                </button>
                @include('personals.positions.position-form')
              </th>
            @elseif($user_role->name == "Administrator")
              <th width="80px;" class="text-center">
                <button type="button" rel="tooltip" title="အသစ်ထည့်မည်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#PositionAdd">
                  {{-- <i class="material-icons text-primary">add_circle</i> --}}
                  <i class="fa fa-plus-circle text-primary" aria-hidden="true"></i>
                </button>
                @include('personals.positions.position-form')
              </th>
            @endif
          @endforeach
  			</thead>
        <tbody>
          @foreach($personal->positions->sortByDesc('date')  as $position)
            <tr>
              <td class="text-center">{{ date('d - M - Y', strtotime($position->date)) }}</td>
              <td>{{ $position->position_type->name }}</td>
              <td>{{ $position->dept->name }}</td>
              <td class="text-right">{{ number_format($position->basic_salary) }}</td>
              <td class="text-right">{{ number_format($position->annual_interest) }}</td>
              <td class="text-right">{{ number_format($position->end_salary) }}</td>
              <td>{{ $position->remark }}</td>
              @foreach (Auth::user()->roles as $key => $user_role)
                @if ($user_role->name == "Personal Write")
                  <td class="text-center">
                    <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#positionEdit{{ $position->id }}">
                        <i class="fa fa-edit text-success"></i>
                    </button>
                    @include('personals.positions.position-form-edit')
                  </td>
                @elseif($user_role->name == "Personal Manager")
                  <td class="text-center">
                    <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#positionEdit{{ $position->id }}">
                        <i class="fa fa-edit text-success"></i>
                    </button>
                    @include('personals.positions.position-form-edit')
                  </td>
                @elseif($user_role->name == "Administrator")
                  <td class="text-center">
                    <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#positionEdit{{ $position->id }}">
                        <i class="fa fa-edit text-success"></i>
                    </button>
                    @include('personals.positions.position-form-edit')
                  </td>
                @endif
              @endforeach
            </tr>
          @endforeach
        </tbody>
  		</table>
  	</div>
    <div class="card-footer">
      <a class="text-success" href="{{ route('personals.index') }}">
        <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>
          နောက်သို့
      </a>
    </div>
  </div>
</div>
