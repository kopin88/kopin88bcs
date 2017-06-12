
<div class="col-lg-12 col-md-6">
  <div class="row">
    <div class="col-lg-8 col-md-6">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">နှစ် (ခွင့်သတ်မှတ်ရန်)</h4>
      		<p class="category">ဝန်ထမ်းရေးရာ</p>
      	</div>
      	<div class="card-content table-responsive">
      		<table class="table">
      			<thead class="text-primary">
              <th class="text-center" width="50px;"><h5><strong>#</strong></h5></th>
              <th class="text-center"><h5><strong>နှစ် (ခွင့်သတ်မှတ်ရန်)</strong></h5></th>
              {{-- <th width="80px;" class="text-center"><h5><strong>ကြည့်ရန်</strong></h5></th> --}}
              <th width="80px;" class="text-center"><h5><strong>ပြင်ရန်</strong></h5></th>
              <th width="80px;" class="text-center"><h5><strong>ဖျက်ရန်</strong></h5></th>
      			</thead>
            <tbody>
              @foreach ($leave_years as $leave_year)
                <tr>
                  <td>#</td>
                  <td class="text-center">{{ $leave_year->name }}</td>
                  <td class="text-center">
                  <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#LeaveYearEdit{{ $leave_year->id }}">
                      <i class="fa fa-edit text-success"></i>
                  </button>
                  @include('personals.leaves.leave-year-edit')
                </td>
                <td class="text-center">
                    <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#LeaveYearDel{{ $leave_year->id }}">
                        <i class="fa fa-trash text-danger"></i>
                    </button>
                    @include('personals.leaves.delete-year')
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
          <h4 class="title">နှစ် အသစ်ထည့်ရန်</h4>
          <p class="category">MOAI@2017</p>
        </div>
        <div class="card-content">
          {!! Form::open(['route'=>'LeaveYears.store', 'method'=>'POST']) !!}

          @if( count($errors) )
             <div class="alert alert-danger">
               <ul>
                 @foreach($errors->all() as $key => $error)
                   <li>{{ $error }}</li>
                 @endforeach
               </ul>
             </div>
           @endif

          <div class="card-content">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating has-success">
                  {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'ထည့်ရန်', 'autofocus'=>'autofocus']) !!}
                  <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>
              @include('kopin.button-add')
          </div>

          {!!Form::close()!!}

        </div>
      </div>
    </div>
  </div>
</div>
