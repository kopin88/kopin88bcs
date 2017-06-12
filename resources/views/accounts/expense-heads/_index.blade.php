<div class="col-lg-12 col-md-6">
  <div class="row">
    <div class="col-lg-8 col-md-6">
      <div class="card">
      	<div class="card-header" data-background-color="green">
      		<h4 class="title">ငွေစာရင်းခေါင်းစဉ်များ (သုံးငွေ)</h4>
      		<p class="category">ငွေစာရင်း</p>
      	</div>
      	<div class="card-content table-responsive">
      		<table class="table">
      			<thead class="text-primary">
              <th class="text-center" width="50px;"><h5><strong>#</strong></h5></th>
              <th><h5><strong>ငွေစာရင်းခေါင်းစဉ်</strong></h5></th>
              <th width="80px;" class="text-center"><h5><strong>ပြင်ရန်</strong></h5></th>
              <th width="80px;" class="text-center"><h5><strong>ဖျက်ရန်</strong></h5></th>
      			</thead>
            <tbody>
              @foreach ($expense_heads as $expense_head)
                <tr>
                  <td class="text-center">#</td>
                  <td>{{$expense_head->name}}</td>
                  <td class="text-center">
                  <button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#ExpenseHeadEdit{{ $expense_head->id }}">
                      <i class="fa fa-edit text-success"></i>
                  </button>
                  @include('accounts.expense-heads._edit')
                </td>
                <td class="text-center">
                    <button type="button" rel="tooltip" title="ဖျက်ရန်" class="btn btn-white btn-round btn-just-icon"  data-toggle="modal" data-target="#ExpenseHeadDel{{ $expense_head->id }}">
                        <i class="fa fa-trash text-danger"></i>
                    </button>
                    @include('accounts.expense-heads._delete')
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
          <h4 class="title">အသစ်ထည့်ရန်</h4>
          <p class="category">ငွေစာရင်း</p>
        </div>
        <div class="card-content">
          @include('accounts.expense-heads._create')
        </div>
      </div>
    </div>
  </div>
</div>
