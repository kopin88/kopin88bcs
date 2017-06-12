<!--// ၁၅။ ဘွဲ့ တံဆိပ်များ //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingSix">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        ၁၅။ ဘွဲ့ တံဆိပ်များ
      </a>
    </h4>
  </div>
  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
    <div class="panel-body">
      <table class="table table-bordered table-hover kopin-font">
        <thead>
          <tr>
            <th class="text-center" width="50px">စဉ်</th>
            <th class="text-center">အမျိုးအစား</th>
            <th class="text-center">ခုနှစ်</th>
            <th class="text-center" width="80px">ပြင်ရန်</th>
          </tr>
        </thead>
        @php
          $no = 1;
        @endphp
        <tbody>
          @foreach($personal->congrats as $congrat)
            <tr>
              <td class="text-right">{{ $no++ }}</td>
              <td>{{ $congrat->description }}</td>
              <td class="text-center">{{ date('Y', strtotime($congrat->year)) }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal15{{ $congrat->id }}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>
                @include('personals.details.15-form-model-edit')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal15">
        @include('kopin.button-new')
      </button>
      <!-- Modal -->
      @include('personals.details.15-form-model-add')
    </div>
  </div>
</div>
