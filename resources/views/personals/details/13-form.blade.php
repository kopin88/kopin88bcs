<!--// ၁၃။ တာ၀န်ထမ်းဆောင်ခဲ့သည့်နေ့မှစ၍ ထမ်းဆောင်ခဲ့သော တာ၀န်များ //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingFour">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
        ၁၃။ တာ၀န်ထမ်းဆောင်ခဲ့သည့်နေ့မှစ၍ ထမ်းဆောင်ခဲ့သော တာ၀န်များ
      </a>
    </h4>
  </div>
  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
    <div class="panel-body">
      <table class="table table-bordered table-hover table-responsive kopin-font">
        <thead>
          <tr>
            <th class="text-center" rowspan="2" style="vertical-align: middle">မူရင်းဌာန</th>
            <th class="text-center" rowspan="2" style="vertical-align: middle">မူရင်းရာထူး</th>
            <th class="text-center" rowspan="2" style="vertical-align: middle">ခေတ္တ/ယာယီရာထူး</th>
            <th class="text-center" colspan="2">ကာလ</th>
            <th class="text-center" rowspan="2" style="vertical-align: middle">မှတ်ချက်</th>
            <th rowspan="2" class="text-center" width="80px" style="vertical-align: middle">ပြင်ရန်</th>
          </tr>
          <tr>
            <td class="text-center">မှ</td>
            <td class="text-center">ထိ</td>
          </tr>
        </thead>
        <tbody>
          @foreach($personal->experiences as $experience)
            <tr>
              <td>{{ $experience->org_dept }}</td>
              <td>{{ $experience->org_position }}</td>
              <td>{{ $experience->tmp_position }}</td>
              <td>{{ date('d - M - Y', strtotime($experience->from_date)) }}</td>
              <td>{{ date('d - M - Y', strtotime($experience->to_date)) }}</td>
              <td>{{ $experience->remark }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal13{{$experience->id}}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>
                @include('personals.details.13-form-model-edit')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal13">
        @include('kopin.button-new')
      </button>
      <!-- Modal -->
      @include('personals.details.13-form-model-add')
    </div>
  </div>
</div>
</div>
