<!-- အိမ်ထောင်ရေး -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၀။ အိမ်ထောင်ရေး</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">အိမ်ထောင် ရှိ/မရှိ</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">ဇနီး/ခင်ပွန်း အမည်</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">သား/သမီး အမည်</th>
          <th colspan="3" class="text-center">မွေးရက်စွဲ</th>
        </tr>
        <tr>
          <td class="text-center">ရက်</td>
          <td class="text-center">လ</td>
          <td class="text-center">ခုနှစ်</td>
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
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- အမွေစားအမွေခံ -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၁။ အမွေစားအမွေခံ</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center">အမည်</th>
          <th class="text-center">တော်စပ်ပုံ</th>
          <th class="text-center">အမျိုးသား/နိုင်ငံသား မှတ်ပုံတင်</th>
          <th class="text-center">မှတ်ချက်</th>
        </tr>
      </thead>
      <tbody>
        @foreach($personal->heirs as $heir)
          <tr>
            <td>{{ $heir->name }}</td>
            <td>{{ $heir->related }}</td>
            <td>{{ $heir->nrc }}</td>
            <td>{{ $heir->remark }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- တက်ရောက်ခဲ့သည့်သင်တန်းများ (ပြည်တွင်း/ပြည်ပ) -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၂။ တက်ရောက်ခဲ့သည့်သင်တန်းများ (ပြည်တွင်း/ပြည်ပ)</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center">စဉ်</th>
          <th class="text-center">အမည်</th>
          <th class="text-center">ကာလ</th>
          <th class="text-center">နေရာ</th>
          <th class="text-center">မှတ်ချက်</th>
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
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- တာ၀န်ထမ်းဆောင်ခဲ့သည့်နေ့မှစ၍ ထမ်းဆောင်ခဲ့သော တာ၀န်များ -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၃။ တာ၀န်ထမ်းဆောင်ခဲ့သည့်နေ့မှစ၍ ထမ်းဆောင်ခဲ့သော တာ၀န်များ</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">စဉ်</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">အဆင့်</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">ဌာန</th>
          <th colspan="2" class="text-center">ကာလ</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">မှတ်ချက်</th>
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
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- ပြစ်မှု -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၄။ ပြစ်မှု</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center">စဉ်</th>
          <th class="text-center">အကြောင်းအရာ</th>
          <th class="text-center">ပြစ်ဒဏ်</th>
          <th class="text-center">အမိန့် အမှတ်/ရက်စွဲ</th>
        </tr>
      </thead>
      <tbody>
        @foreach($personal->acknowledges as $acknowledge)
          <tr>
            <td></td>
            <td>{{$acknowledge->description}}</td>
            <td>{{$acknowledge->action}}</td>
            <td>{{$acknowledge->remark}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- ဘွဲ့တံဆိပ်များ -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၅။ ဘွဲ့ တံဆိပ်များ</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center">စဉ်</th>
          <th class="text-center">အမျိုးအစား</th>
          <th class="text-center">ခုနှစ်</th>
        </tr>
      </thead>
      <tbody>
        @foreach($personal->congrats as $congrat)
          <tr>
            <td></td>
            <td>{{ $congrat->description }}</td>
            <td>{{ date('Y', strtotime($congrat->year)) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- နိုင်ငံခြား ဗဟုသုတ -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၆။ နိုင်ငံခြား ဗဟုသုတ</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">စဉ်</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">အကြောင်းအရာ</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">နိုင်ငံ</th>
          <th colspan="2" class="text-center">ကာလ</th>
        </tr>
        <tr>
          <td class="text-center">မှ</td>
          <td class="text-center">ထိ</td>
        </tr>
      </thead>
      <tbody>
        @foreach($personal->knowledges as $knowledge)
          <tr>
            <td></td>
            <td>{{ $knowledge->description }}</td>
            <td>{{ $knowledge->country }}</td>
            <td>{{ $knowledge->from_date }}</td>
            <td>{{ $knowledge->to_date }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- ခွင့်ယူခြင်းများ -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၇။ ခွင့်ယူခြင်းများ</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">စဉ်</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">ခွင့်အမျိုးအစား</th>
          <th colspan="4" class="text-center">ကာလ</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">အမိန့် အာဏာ</th>
        </tr>
        <tr>
          <td class="text-center">မှ</td>
          <td class="text-center">ထိ</td>
          <td class="text-center">လ</td>
          <td class="text-center">ရက်</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><p style="margin: 100px auto;"></p></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- အထူး ပြင်ပ တာ၀န် ထမ်းဆောင်ခြင်းများ -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <h3>၁၈။ အထူး ပြင်ပ တာ၀န် ထမ်းဆောင်ခြင်းများ</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">စဉ်</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">အကြောင်းအရာ</th>
          <th colspan="2" class="text-center">ကာလ</th>
          <th rowspan="2" class="text-center" style="vertical-align:middle;">အမိန့် အာဏာ</th>
        </tr>
        <tr>
          <td class="text-center">မှ</td>
          <td class="text-center">ထိ</td>
        </tr>
      </thead>
      <tbody>
          @foreach($personal->SpecialPosts as $specialpost)
            <tr>
              <td></td>
              <td>{{ $specialpost->description }}</td>
              <td>{{ date('d - M - Y', strtotime($specialpost->from_date)) }}</td>
              <td>{{ date('d - M - Y', strtotime($specialpost->to_date)) }}</td>
              <td>{{ $specialpost->remark }}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
