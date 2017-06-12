<div class="col-lg-12 col-md-6">
  <div class="row">
    <div class="col-lg-8 col-md-6">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">ခွင့်အမျိုးအစားများ</h4>
      		<p class="category">ဝန်ထမ်းရေးရာ</p>
      	</div>
      	<div class="card-content table-responsive">
      		<table class="table">
      			<thead class="text-primary">
              <th class="text-center" width="50px;"><h5><strong>#</strong></h5></th>
              <th class="text-center"><h5><strong>ခွင့်အမျိုးအစား</strong></h5></th>
              <th class="text-center"><h5><strong>စုစုပေါင်း(ရက်)</strong></h5></th>
              <th width="80px;" class="text-center"><h5><strong>ပြင်ရန်</strong></h5></th>
              <th width="80px;" class="text-center"><h5><strong>ဖျက်ရန်</strong></h5></th>
      			</thead>
            <tbody>
              @foreach($leave_types as $leave_type)
                <tr>
                  <td class="text-right">#</td>
                  <td>{{$leave_type->name}}</td>
                  <td class="text-center">{{$leave_type->day}}</td>
                  <td class="text-center">
                  <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#LeaveTypeEdit{{ $leave_type->id }}">
                      <i class="fa fa-edit text-success"></i>
                  </button>
                  @include('personals.leaves.leave-type-form-edit')
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#LeaveTypeDel{{ $leave_type->id }}">
                      <i class="fa fa-trash text-danger"></i>
                  </button>
                  @include('personals.leaves.delete-type')
                </td>
              </tr>
              @endforeach
            </tbody>
      		</table>
      	</div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header" data-background-color="green">
          <h4 class="title">ခွင့်အမျိုးအစား အသစ်ထည့်ရန်</h4>
          <p class="category">MOAI@2017</p>
        </div>
        <div class="card-content">
          @include('personals.leaves.leave-type-form')
        </div>
      </div>
    </div>
  </div>
</div>
