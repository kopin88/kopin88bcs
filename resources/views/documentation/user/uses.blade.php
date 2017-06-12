<div class="row text-primary">
  <h3 class="text-success">Software အသုံးပြုခွင့် သတ်မှတ်ချက် အသုံးပြုပုံ</h3>
  <div class="img-thumbnail">
    <figure>
      <img src="../uploads/info/user_role.jpg" alt="အသုံးပြုသူ(User Account) အသစ် တည်ဆောက်ခြင်း (ပုံ-၁)">
       <figcaption class="figure-caption text-center" style="padding-top:10px">အသုံးပြုအဆင့်သတ်မှတ်ခြင်း (ပုံ-၃)</figcaption>
    </figure>
  </div>
  <br><br>
  <ul>
  <li><a href="#user">Software အသုံးပြုခွင့်</a>
    <ul>
      <li><a href="#">User (Default)</a></li>
      <li><a href="#">User Manager</a></li>
      @foreach(Auth::user()->roles as $key => $navrole)
        @if ($navrole->name == "Administrator")
          <li><a href="#">Administrator</a></li>
        @endif
      @endforeach
    </ul>
  </li>
  <li><a href="#">စီမံရေးရာ</a>
    <ul>
      <li><a href="#">Personal Read</a></li>
      <li><a href="#">Personal Write</a></li>
      <li><a href="#">Personal Manager</a></li>
    </ul>
  </li>
  <li><a href="#">ငွေစာရင်း</a>
    <ul>
      <li><a href="#">Account Read</a></li>
      <li><a href="#">Account Write</a></li>
      <li><a href="#">Account Manager</a></li>
    </ul>
  </li>
  </ul>


  <p><a name="user"></a></p>
  <blockquote class="text-warning">
    <p><strong>မှတ်ချက်</strong>။ <span class="label label-warning">(Software အသုံးပြုခွင့်၊ စီမံရေးရာ၊ ငွေစာရင်း)</span> အုပ်စု <span class="text-success">(၁)ခု</span> အတွင်းမှ လုပ်ပိုင်ခွင့် <span class="text-success">(၁)မျိုး</span>သာ သတ်မှတ်ရန်၊ </p><p>သတ်မှတ်ချက်များ ပြီးပါက <span class="label label-success">ASSIGN ROLE</span> ကိုနှိပ်ပါ၊</p>
  </blockquote>
  <h3>Software အသုံးပြုခွင့်</h3>
  <span>
  <strong># Default User</strong>
  <p style="padding-left:5%;">အသုံးပြုသူ အသစ်ထည့်သွင်းလိုက်လျှင် ရရှိလာမည့် အကောင့်တစ်ခုဖြစ်သည်။ လုပ်ပိုင်ခွင့် မရှိသေးပါ။</p>
  </span>
  <span>
  <strong># User Manager</strong>
  <p style="padding-left:5%;">အသုံးပြုခွင့်ရှိသူများကို စီမံနိုင်မည့် အကောင့်တစ်ခုဖြစ်သည်။ အသုံးပြုခွင့် သတ်မှတ်ပေးရာတွင် <span class="label label-warning">(Software အသုံးပြုခွင့်၊ စီမံရေးရာ၊ ငွေစာရင်း)</span> အုပ်စု <span class="text-success">(၁)ခု</span> အတွင်းမှ လုပ်ပိုင်ခွင့် <span class="text-success">(၁)မျိုး</span> သာ ပေးပါရန် သတိပြုသင့်သည်။</p>
  </span>
  @foreach(Auth::user()->roles as $key => $navrole)
  @if ($navrole->name == "Administrator")
    <span>
      <strong># Administrator</strong>
      <p style="padding-left:5%;">Software ရှိ လုပ်ဆောင်ချက်များ အားလုံးကို စီမံနိုင်မည့် အကောင့်တစ်ခုဖြစ်သည်။</p>
    </span>
  @endif
  @endforeach

  <p><a name="user"></a></p>
  <h3>စီမံရေးရာ</h3>
  <span>
  <strong># Personal Read</strong>
  <p style="padding-left:5%;">ထည့်သွင်းထားသော ပြည်သူ့၀န်ထမ်းများ၏ ကိုယ်ရေးအချက်အလက်များ၊ ခွင့်မှတ်တမ်းများကို ကြည့်ခွင့်ပြုရန် ဖြစ်သည်။</p>
  </span>
  <span>
  <strong># Personal Write</strong>
  <p style="padding-left:5%;">ပြည်သူ့၀န်ထမ်းများ၏ ကိုယ်ရေးအချက်အလက်များ၊ ခွင့်မှတ်တမ်းများကို အသစ်ထည့်သွင့်ရန်နှင့် ပြင်ဆင်ခွင့်ပြုရန် ဖြစ်သည်။</p>
  </span>
  <span>
  <strong># Personal Manager</strong>
  <p style="padding-left:5%;">ပြည်သူ့၀န်ထမ်းများ၏ ကိုယ်ရေးအချက်အလက်များ၊ ခွင့်မှတ်တမ်းများကို အသစ်ထည့်သွင်းခြင်း၊ ပြင်ဆင်ခြင်း။ </p>
  <p style="padding-left:5%">ရာထူးများနှင့် ဌာနများကို အသစ်ထည့်သွင်းခြင်း၊ ပြင်ဆင်ခြင်း။</p>
  <p style="padding-left:5%">ခွင့်သတ်မှတ်ချက်များကို အသစ်ထည့်သွင်းခြင်း၊ ပြင်ဆင်ခြင်း။</p>
  </span>

  <p><a name="user"></a></p>
  <h3>ငွေစာရင်း</h3>
  <span>
  <strong># Account Read</strong>
  <p style="padding-left:5%;">ငွေစာရင်းများကို ကြည့်ခွင့်ပြုရန်ဖြစ်သည်။</p>
  </span>
  <span>
  <strong># Account Write</strong>
  <p style="padding-left:5%;">ရ/သုံး ငွေစာရင်းများကို အသစ်ထည့်သွင့်ရန်နှင့် ပြင်ဆင်ခွင့်ပြုရန် ဖြစ်သည်။</p>
  </span>
  <span>
  <strong># Account Manager</strong>
  <p style="padding-left:5%;">ရ/သုံး ငွေစာရင်းများကို အသစ်ထည့်သွင်းခြင်း၊ ပြင်ဆင်ခြင်း။ </p>
  <p style="padding-left:5%">ရ/သုံး ငွေစာရင်းခေါင်းစဉ်များကို အသစ်ထည့်သွင်းခြင်း၊ ပြင်ဆင်ခြင်း။</p>
  <p style="padding-left:5%">ဘဏ္ဍာရေးနှစ်များကို အသစ်ထည့်သွင်းခြင်း၊ ပြင်ဆင်ခြင်း။</p>
  </span>
</div>
