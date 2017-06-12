<!-- ၀န်ထမ်းရေးရာ page header -->
<div class="text-center">
  <h2><strong>ပြည်သူ့၀န်ထမ်းများ၏ ကိုယ်ရေးရာဇ၀င် မှတ်တမ်း</strong></h2>
</div>
<!-- အမည် နှင့် အမှတ်စဉ် -->
<div class="row">
  <div class="col-md-offset-1 col-md-4">
    <h3 class="text-center">အမည်</h3>
    <table class="table table-bordered">
      <th class=" text-center">
        <h4  style="margin:30px auto 30px;">{{ $personal->name }}</h4>
      </th>
    </table>
  </div>
  <div class="col-md-offset-2 col-md-4">
    <h3 class="text-center">အမှတ်စဉ်</h3>
    <table class="table table-bordered">
      <th class=" text-center">
        <h4  style="margin:30px auto 30px;">{{ $personal->serial }}</h4>
      </th>
    </table>
  </div>
</div>
<!-- အသက် (၆၀)နှစ် ပြည့်မည့်နေ့ -->
<div class="row">
  <div class="col-md-offset-3 col-md-6">
    <h3 class="text-center">အသက် (၆၀)နှစ် ပြည့်မည့်နေ့</h3>
    <table class="table table-bordered">
      <thead>
        <th class="text-center">ရက်</th>
        <th class="text-center">လ</th>
        <th class="text-center">နှစ်</th>
      </thead>
      <tbody>
        <tr>
          <td class="text-center"><p style="margin:30px auto 30px;">
            {{ date('d', strtotime($personal->dob)) }}
          </p></td>
          <td class="text-center"><p style="margin:30px auto 30px;">
            {{ date('M', strtotime($personal->dob)) }}
          </p></td>
          <td class="text-center"><p style="margin:30px auto 30px;">
            @php
              $pisen=date('Y', strtotime($personal->dob))+60;
              echo $pisen;
            @endphp
          </p></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- အလုပ်စတင်၀င်ရောက်သည့်နေ့ -->
<div class="row" style="margin-top:40px;">
  <div class="col-md-offset-1 col-md-10">
    <h3>အလုပ်စတင်၀င်ရောက်သည့်နေ့  ({{ date('d - M - Y', strtotime($personal->on_date)) }})</h3>
  </div>
</div>
<div class="row" style="margin-top:40px;">
  <div class="col-md-offset-1 col-md-10">
    <table class="table table-bordered">
      <thead>
        <th class="text-center">မူရင်းဌာန</th>
        <th class="text-center">မူရင်းရာထူး</th>
        <th class="text-center">ခေတ္တ/ယာယီရာထူး</th>
      </thead>
      <tbody>
        @foreach($personal->experiences as $experience)
        <tr>
          <td class="text-center"><p style="margin:30px auto 30px;">
            @if ($loop->last)
              {{ $experience->org_dept }}
            @endif
          </p></td>
          <td class="text-center"><p style="margin:30px auto 30px;">
            @if ($loop->first)
              {{ $experience->org_position }}
            @endif
          </p></td>
          <td class="text-center"><p style="margin:30px auto 30px;">
            @if ($loop->first)
              {{ $experience->tmp_position }}
            @endif
          </p></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

  <!-- ၀န်ထမ်း ဓာတ်ပုံ -->
<div class="row" style="margin-top:40px;">
  <div class="col-md-offset-1 col-md-4">
      <?php $image = !is_null($personal->image) ? $personal->image : 'default.png' ?>
      {!! Html::image('uploads/personal_images/' . $image, $personal->name, ['class'=>'thumbnail', 'width'=>'200', 'height'=>'200']) !!}
  </div>
  <div class="col-md-7">
    <h4 class="text-center" style="margin-top:180px;;">ဌာနအကြီးအကဲလက်မှတ်</h4>
  </div>
</div>
