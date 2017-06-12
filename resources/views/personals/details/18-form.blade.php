<!--// ၁၈။ အထူး ပြင်ပ တာ၀န် ထမ်းဆောင်ခြင်းများ //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingNine">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        ၁၈။ အထူး ပြင်ပ တာ၀န် ထမ်းဆောင်ခြင်းများ
      </a>
    </h4>
  </div>
  <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover kopin-font">
          <thead>
            <tr>
              <th class="text-center" rowspan="2" style="vertical-align:middle">စဉ်</th>
              <th class="text-center" rowspan="2" style="vertical-align:middle">အကြောင်းအရာ</th>
              <th class="text-center" colspan="2">ကာလ</th>
              <th class="text-center" rowspan="2" style="vertical-align:middle">အမိန့် အာဏာ</th>
              <th class="text-center" rowspan="2" style="vertical-align:middle" width="80px">ပြင်ရန်</th>
            </tr>
            <tr>
              <th class="text-center">မှ</th>
              <th class="text-center">ထိ</th>
            </tr>
          </thead>
          @php
            $no = 1;
          @endphp
          <tbody>
            @foreach($personal->SpecialPosts as $specialpost)
              <tr>
                <td class="text-right">{{ $no++ }}</td>
                <td>{{ $specialpost->description }}</td>
                <td>{{ date('d - M - Y', strtotime($specialpost->from_date)) }}</td>
                <td>{{ date('d - M - Y', strtotime($specialpost->to_date)) }}</td>
                <td>{{ $specialpost->remark }}</td>
                <td class="text-center">
                  <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal18{{ $specialpost->id }}">
                    <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                    </span>
                  </button>
                  @include('personals.details.18-form-model-edit')
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal18">
        @include('kopin.button-new')
      </button>
      <!-- Modal -->
      @include('personals.details.18-form-model-add')
    </div>
  </div>
</div>
