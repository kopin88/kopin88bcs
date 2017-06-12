<!--// ၁၇။ ခွင့်ယူခြင်းများ //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingEight">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        ၁၇။ ခွင့်ယူခြင်းများ
      </a>
    </h4>
  </div>
  <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
    <div class="panel-body">
        <table class="table table-bordered table-hover kopin-font">
          <thead>
            <tr>
              <th class="text-center" rowspan="2" style="vertical-align:middle">စဉ်</th>
              <th class="text-center" rowspan="2" style="vertical-align:middle">အကြောင်းအရာ</th>
              <th class="text-center" colspan="4">ကာလ</th>
              <th class="text-center" rowspan="2" style="vertical-align:middle">အမိန့် အာဏာ</th>
              <th class="text-center" rowspan="2" style="vertical-align:middle" width="80px">ပြင်ရန်</th>
            </tr>
            <tr>
              <th class="text-center">မှ</th>
              <th class="text-center">ထိ</th>
              <th class="text-center">လ</th>
              <th class="text-center">ရက်</th>
            </tr>
          </thead>
          <tbody>
            @php
              $n = 1;
            @endphp
            @foreach($personal->leave as $leaves)
              <tr>
                <td class="text-right">{{ $n++ }}</td>
                <td>{{ $leaves->leave_types->name}}</td>
                <td class="text-center">{{ date('d - M - Y', strtotime($leaves->from_date)) }}</td>
                <td class="text-center">{{ date('d - M - Y', strtotime($leaves->to_date)) }}</td>
                <td></td>
                <td>{{ $leaves->total}}</td>
                <td>{{ $leaves->remark}}</td>
                <td class="text-center">
                  <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal17{{$leaves->id}}">                    <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                    </span>
                  </button>

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal17">
        @include('kopin.button-new')
      </button>
      @include('details.17-form-model-add')
      <!-- Modal -->
    </div>
  </div>
</div>
