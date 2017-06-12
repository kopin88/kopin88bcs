<!--// ၁၂။ တက်ရောက်ခဲ့သည့်သင်တန်းများ (ပြည်တွင်း/ပြည်ပ) //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingThree">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ၁၂။ တက်ရောက်ခဲ့သည့်သင်တန်းများ (ပြည်တွင်း/ပြည်ပ)
      </a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    <div class="panel-body">
      <table class="table table-bordered table-hover table-responsive kopin-font">
        <thead>
          <tr>
            <th class="text-center">စဉ်</th>
            <th class="text-center">သင်တန်းအမည်</th>
            <th class="text-center">ကာလ</th>
            <th class="text-center">နေရာ</th>
            <th class="text-center">မှတ်ချက်</th>
            <th class="text-center" width="80px">ပြင်ရန်</th>
          </tr>
        </thead>
        <tbody>
          @foreach($personal->trainings as $training)
            <tr>
              <td>{{ $training->id }}</td>
              <td>{{ $training->name }}</td>
              <td>{{ $training->period }}</td>
              <td>{{ $training->place }}</td>
              <td>{{ $training->remark }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal12{{ $training->id }}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>
                @include('personals.details.12-form-model-edit')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal12">
        @include('kopin.button-new')
      </button>
      <!-- Modal -->
      @include('personals.details.12-form-model-add')
    </div>
  </div>
</div>
