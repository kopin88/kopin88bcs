<div class="row">
    <div class="col-lg-8 col-md-6">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">ဌာန စာရင်း</h4>
      		<p class="category">ဝန်ထမ်းရေးရာ</p>
      	</div>
      	<div class="card-content table-responsive">
      		<table class="table">
      			<thead class="text-primary">
              <th class="text-center" width="50px;"><h5><strong>စဉ်</strong></h5></th>
              <th class="text-center"><h5><strong>ဌာနအမည်</strong></h5></th>
              <th class="text-center"><h5><strong>အကြောင်းအရာ</strong></h5></th>
              <th width="80px;" class="text-center"><h5><strong>ပြင်ရန်</strong></h5></th>
              <th width="80px;" class="text-center"><h5><strong>ဖျက်ရန်</strong></h5></th>
      			</thead>
            <tbody>
              <?php $n=1 ?>
              @foreach($depts as $dept)
                <tr>
                  <td class="text-right">{{$n++}}</td>
                  <td>{{$dept->name}}</td>
                  <td>{{$dept->description}}</td>
                  <td class="text-center">
                  <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#DeptEdit{{ $dept->id }}">
                      <i class="fa fa-edit text-success"></i>
                  </button>
                  @include('personals.depts.dept-form-edit')
                </td>
                <td class="text-center">
                    <button type="button" rel="tooltip" title="ဖျက်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#DeptDel{{ $dept->id }}">
                        <i class="fa fa-trash text-danger"></i>
                    </button>
                    @include('personals.depts.delete')
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
          <h4 class="title">ဌာန အသစ်ထည့်ရန်</h4>
          <p class="category">ဝန်ထမ်းရေးရာ</p>
        </div>
        <div class="card-content">
          @include('personals.depts.dept-form')
        </div>
      </div>
    </div>
  </div>
