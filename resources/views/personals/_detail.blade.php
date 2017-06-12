<div class="card card-chart">
<div class="col-md-12">
  <div class="row">
    <div class="col-lg-6">
      <div class="card-header" data-background-color="green">
        <h4 class="title"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp {{ $personal->name }}</h4>
        <p class="category">အသေးစိတ်အချက်အလက်များ</p>
      </div>
    </div>
    <div class="col-lg-6">
        <div class="card-content pull-right" style="float:right" data-background-color="white">
          <a href="{{ route('personals.index') }}" class="btn btn-success btn-fab btn-fab-mini btn-round"><i class="material-icons">supervisor_account</i></a>
          <a href="{{ route('personals.edit', $personal->id) }}" class="btn btn-success btn-fab btn-fab-mini btn-round"><i class="material-icons">edit</i></a>
        </div>
    </div>
  </div>
</div>
  <div class="col-md-12">
      <div class="row" style="margin: 20px 5px 15px auto">
        <div class="col-md-2">
          <a href="{{route('personals.show', ['id'=>$personal->id])}}"style="width:150px; height:150px;" class="thumbnail">
            <?php $image = !is_null($personal->image) ? $personal->image : 'default.png' ?>
            {!! Html::image('uploads/personal_images/' . $image, $personal->name, ['class'=>'media-object text-center']) !!}
          </a>
        </div>
        <div class="col-md-10">
          @include('personals.details.detail-table')
        </div>
      </div>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @include('personals.details.multi-form')
      </div>
  </div>
</div>
