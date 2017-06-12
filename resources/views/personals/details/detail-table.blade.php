<div class="">
  <div class="row">
    <div class="col-md-5">
      <label for="name">၁ ။ အမည်</label>
    </div>
    <div class="col-md-7">
      <a href="{{route('personals.show', ['id'=>$personal->id])}}" >
        <strong>{{$personal->name}}</strong>
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၂ ။ လူမျိုး/ကိုးကွယ်သည့်ဘာသာ</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->nationality}} / {{$personal->religion}}</strong>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၃ ။ အမျိုးသား/နိုင်ငံသား မှတ်ပုံတင်အမှတ်</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->nrc}}</strong>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၄ ။ အသက် (မွေးသကရာဇ်)</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->dob}}</strong>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၅ ။ မွေးရပ်ဇာတိ</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->pob}}</strong>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၆ ။ ပညာအရည်အချင်း/ အောင်သည့်ခုနှစ်</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->edu}}</strong>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၇ ။ ထင်ရှားသော အမှတ်အသား</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->unique}}</strong>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၈ ။ နေရပ်လိပ်စာ</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->address}}</strong>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label for="name">၉ ။ မိဘအမည်/ နေရပ်လိပ်စာ</label>
    </div>
    <div class="col-md-7">
        <strong>{{$personal->paddress}}</strong>
    </div>
  </div>

</div>
