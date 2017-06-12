<!--// ၁၀။ အိမ်ထောင်ရေး //-->
<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        ၁၀။ အိမ်ထောင်ရေး
      </a>
    </h4>
  </div>
  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
    <div class="panel-body kopin-font">
      <table class="table table-bordered table-responsive kopin-font">
        <thead>
          <tr>
            <th rowspan="2" class="text-center" style="vertical-align: middle">အိမ်ေထာင် ရှိ/မရှိ</th>
            <th rowspan="2" class="text-center" style="vertical-align: middle">ဇနီး/ခင်ပွန်း အမည်</th>
            <th rowspan="2" class="text-center" style="vertical-align: middle">သား/သမီး အမည်</th>
            <th colspan="3" class="text-center">မွေးရက်စွဲ</th>
            <th rowspan="2" class="text-center" width="80px" style="vertical-align: middle">ပြင်ရန်</th>
          </tr>
          <tr class="text-center">
            <td>ရက်</td>
            <td>လ</td>
            <td>ခုနှစ်</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($personal->maritals as $marital)
            <tr>
              <td class="text-center">{{ $marital->desc }}</td>
              <td>{{ $marital->name }}</td>
              <td> </td>
              <td>{{ date('d', strtotime($marital->dob)) }}</td>
              <td>{{ date('F', strtotime($marital->dob)) }}</td>
              <td>{{ date('Y', strtotime($marital->dob)) }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModalMarital{{$marital->id}}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>

              </td>
            </tr>
          @endforeach


          @foreach($personal->childrens as $children)
            <tr>
              <td> </td>
              <td> </td>
              <td>{{ $children->name }}</td>
              <td>{{ date('d', strtotime($children->dob)) }}</td>
              <td>{{ date('F', strtotime($children->dob)) }}</td>
              <td>{{ date('Y', strtotime($children->dob)) }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-round btn-circle btn-xs" style="padding:3px;" data-toggle="modal" data-target="#myModal10{{ $children->id }}">
                  <span class="glyphicon glyphicon-pencil" data-toggle="hover" title="ပြင်မည်">
                  </span>
                </button>
                @include('personals.details.10-form-model-edit')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalMarital">
        <span class="glyphicon glyphicon-plus" data-toggle="hover" title="ဇနီး/ခင်ပွန်း"><strong> ဇနီး/ခင်ပွန်း</strong></span>
      </button>
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal10">
        <span class="glyphicon glyphicon-plus" data-toggle="hover" title="သား/သမီး"><strong> သား/သမီး</strong></span>
      </button>
      <!-- Model -->
      @include('personals.details.10-form-model-add')
    </div>
  </div>
</div>
