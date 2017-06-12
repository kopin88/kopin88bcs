
<!--// ၁၁။ အမွေစားအမွေခံ //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingTwo">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        ၁၁။ အမွေစားအမွေခံ
      </a>
    </h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="panel-body">
      <table class="table table-bordered table-responsive kopin-font">
        <thead>
          <tr>
            <th class="text-center">အမည်</th>
            <th class="text-center">တော်စပ်ပုံ</th>
            <th class="text-center">အမျိုးသား/နိုင်ငံသား မှတ်ပုံတင်</th>
            <th class="text-center">မှတ်ချက်</th>
            <th class="text-center" width="80px">ပြင်ရန်</th>
          </tr>
        </thead>
        <tbody>
          @foreach($personal->heirs as $heir)
            <tr>
              <td>{{ $heir->name }}</td>
              <td>{{ $heir->related }}</td>
              <td>{{ $heir->nrc }}</td>
              <td>{{ $heir->remark }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal11{{ $heir->id }}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>
                @include('personals.details.11-form-model-edit')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>


      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal11">
        @include('kopin.button-new')
      </button>
      <!-- Modal -->
      @include('personals.details.11-form-model-add')
    </div>
  </div>
</div>
