<!--// ၁၆။ နိုင်ငံခြား ဗဟုသုတ //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingSeven">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        ၁၆။ နိုင်ငံခြား ဗဟုသုတ
      </a>
    </h4>
  </div>
  <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
    <div class="panel-body">
      <table class="table table-bordered table-hover kopin-font">
        <thead>
          <tr>
            <th rowspan="2" style="vertical-align: middle" class="text-center">စဉ်</th>
            <th rowspan="2" style="vertical-align: middle" class="text-center">အကြောင်းအရာ</th>
            <th rowspan="2" style="vertical-align: middle" class="text-center">နိုင်ငံ</th>
            <th colspan="2" class="text-center">ကာလ</th>
            <th rowspan="2" style="vertical-align: middle" class="text-center" width="80px">ပြင်ရန်</th>
          </tr>
          <tr>
            <th class="text-center">မှ</th>
            <th class="text-center">ထိ</th>
          </tr>
        </thead>
        <tbody>
          @foreach($personal->knowledges as $knowledge)
            <tr>
              <td></td>
              <td>{{ $knowledge->description }}</td>
              <td>{{ $knowledge->country }}</td>
              <td>{{ date('d - M - Y', strtotime($knowledge->from_date)) }}</td>
              <td>{{ date('d - M - Y', strtotime($knowledge->to_date)) }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal16{{ $knowledge->id }}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>
                @include('personals.details.16-form-model-edit')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal16">
        @include('kopin.button-new')
      </button>
      <!-- Modal -->
      @include('personals.details.16-form-model-add')
    </div>
  </div>
</div>
