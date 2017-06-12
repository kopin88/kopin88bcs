<div class="col-lg-12 col-md-6">
  <div class="row">
    <div class="col-lg-8 col-md-6">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">ရာထူး စာရင်း</h4>
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
              @foreach($position_types as $position_type)
                <tr>
                  <td class="text-right">{{$n++}}</td>
                  <td>{{$position_type->name}}</td>
                  <td>{{$position_type->description}}</td>
                  <td class="text-center">
                  <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#PositionTypeEdit{{ $position_type->id }}">
                      <i class="fa fa-edit text-success"></i>
                  </button>
                  @include('personals.positions.type-edit')
                </td>
                <td class="text-center">
                    <button type="button" rel="tooltip" title="ဖျက်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#PositionTypeDel{{ $position_type->id }}">
                        <i class="fa fa-trash text-danger"></i>
                    </button>
                    @include('personals.positions.delete-type')
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
          <h4 class="title">ရာထူးအမျိုးအစား အသစ်ထည့်ရန်</h4>
          <p class="category">ဝန်ထမ်းရေးရာ</p>
        </div>
        <div class="card-content">
          @include('personals.positions.type-create')

        </div>
      </div>
    </div>
  </div>
</div>
