<!-- အခြေခံ အကြောင်းအရာများ -->
  <div class="row">
      <h3 class="text-center">အခြေခံ အကြောင်းအရာများ</h3>
    <div class="col-md-offset-1 col-md-10">
      <table class="table" style="margin-top:20px;">
        <tbody>
          <tr>
            <td>၁။</td>
            <td>အမည်</td>
            <td>{{ $personal->name }}</td>
          </tr>
          <tr>
            <td>၂။</td>
            <td>လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</td>
            <td>{{ $personal->nationality }}/{{ $personal->religion }}</td>
          </tr>
          <tr>
            <td>၃။</td>
            <td>အမျိုးသား/နိုင်ငံသား မှတ်ပုံတင်အမှတ်</td>
            <td>{{$personal->nrc}}</td>
          </tr>
          <tr>
            <td>၄။</td>
            <td>အသက် (မွေးသကရာဇ်)</td>
            <td>{{ date('d - M - Y', strtotime($personal->dob)) }}</td>
          </tr>
          <tr>
            <td>၅။</td>
            <td>မွေးရပ်ဇာတိ</td>
            <td>{{ $personal->pob }}</td>
          </tr>
          <tr>
            <td>၆။</td>
            <td>ပညာအရည်အချင်း/ အောင်သည့်ခုနှစ်</td>
            <td>{{ $personal->edu }}</td>
          </tr>
          <tr>
            <td>၇။</td>
            <td>ထင်ရှားသော အမှတ်အသား</td>
            <td>{{ $personal->unique }}</td>
          </tr>
          <tr>
            <td>၈။</td>
            <td>နေရပ်လိပ်စာ</td>
            <td>{{ $personal->address }}</td>
          </tr>
          <tr>
            <td>၉။</td>
            <td>မိဘအမည်/ နေရပ်လိပ်စာ</td>
            <td>{{ $personal->paddress }}</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
