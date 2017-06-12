<!--// ၁၄။ ပြစ်မှုများ //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingFive">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        ၁၄။ ပြစ်မှု
      </a>
    </h4>
  </div>
  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
    <div class="panel-body">
      <table class="table table-bordered table-hover tab kopin-font">
        <thead>
          <tr>
            <th class="text-center">စဉ်</th>
            <th class="text-center">အကြောင်းအရာ</th>
            <th class="text-center">ပြစ်ဒဏ်</th>
            <th class="text-center">အမိန့် အမှတ်/ရက်စွဲ</th>
            <th class="text-center">ပြင်ရန်</th>
          </tr>
        </thead>
        @php
          $no = 1;
        @endphp
        <tbody>
          @foreach($personal->acknowledges as $acknowledge)
            <tr>
              <td class="text-right">{{ $no++ }}</td>
              <td>{{$acknowledge->description}}</td>
              <td>{{$acknowledge->action}}</td>
              <td>{{$acknowledge->remark}}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal14{{$acknowledge->id}}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>
                @include('personals.details.14-form-model-edit')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal14">
        @include('kopin.button-new')
      </button>
      <!-- form-model-edit ??-->

      <!-- Modal -->
      @include('personals.details.14-form-model-add')
    </div>
  </div>
</div>
