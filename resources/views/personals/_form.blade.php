<div class="card-content">
  <div class="form-horizontal">
    <div class="row">
      <div class="col-md-8">
        @if( count($errors) )
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $key => $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="name" class="control-label col-md-4"><h5 class=" text-primary"><strong>အမည်</strong></h5></label>
          <div class="col-md-1">
            {!! Form::select('gender',[ 'ဦး'=>'ဦး', 'ဒေါ်'=>'ဒေါ်'], null, ['class'=>'form-control', 'style'=>'padding-left:20px']) !!}
          </div>
          <div class="col-md-6">
            {!! Form::text("name", null, ['class'=>'form-control', 'placeholder'=>'Name', 'autofocus'=>'autofocus']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="serial" class="control-label col-md-4"><h5 class=" text-primary"><strong>အမှတ်စဉ်</strong></h5></label>
          <div class="col-md-7">
            {!! Form::text("serial", null, ['class'=>'form-control', 'placeholder'=>'Serial']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="on_date" class="control-label col-md-4"><h5 class=" text-primary"><strong>စတင်သည့်နေ့</strong></h5></label>
          <div class="col-md-7">
            {!! Form::date("on_date", null, ['class'=>'form-control']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="nationality" class="control-label col-md-4"><h5 class=" text-primary"><strong>လူမျိုး</strong></h5></label>
          <div class="col-md-7">
            {!! Form::text("nationality", null, ['class'=>'form-control', 'placeholder'=>'Nationality']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="religion" class="control-label col-md-4"><h5 class=" text-primary"><strong>ကိုးကွယ်သည့်ဘာသာ</strong></h5></label>
          <div class="col-md-7">
            {!! Form::text("religion", null, ['class'=>'form-control', 'placeholder'=>'Religion']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="nrc" class="control-label col-md-4"><h5 class=" text-primary"><strong>အမျိုးသား / နိုင်ငံသား<br> မှတ်ပုံတင်အမှတ်</strong></h5></label>
          <div class="col-md-7">
            {!! Form::text("nrc", null, ['class'=>'form-control',  'placeholder'=>'၈/တတတ(နိုင်)၁၅၁၇၁၅', 'required'=>'required', 'style'=>'margin-top:10px']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="dob" class="control-label col-md-4"><h5 class=" text-primary"><strong>မွေးသကရာဇ်</strong></h5></label>
          <div class="col-md-7">
            {!! Form::date("dob", null, ['class'=>'form-control', 'placeholder'=>'Religion', 'placeholder'=>'Date of Birth']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="pob" class="control-label col-md-4"><h5 class=" text-primary"><strong>မွေးရပ်ဇာတိ</strong></h5></label>
          <div class="col-md-7">
            {!! Form::text("pob", null, ['class'=>'form-control', 'placeholder'=>'Religion', 'placeholder'=>'Place of Birth']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="edu" class="control-label col-md-4"><h5 class=" text-primary"><strong>ပညာအရည်အချင်း/ <br>အောင်သည့်ခုနှစ်</strong></h5></label>
          <div class="col-md-7">
            {!! Form::textarea("edu", null, ['class'=>'form-control', 'placeholder'=>'Religion', 'placeholder'=>'Academic / Year', 'rows'=>'1', 'style'=>'margin-top:10px']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="unique" class="control-label col-md-4"><h5 class=" text-primary"><strong>ထင်ရှားသော အမှတ်အသား</strong></h5></label>
          <div class="col-md-7">
            {!! Form::textarea("unique", null, ['class'=>'form-control', 'placeholder'=>'Religion', 'placeholder'=>'Famous landmark', 'rows'=>'1']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="address" class="control-label col-md-4"><h5 class=" text-primary"><strong>နေရပ်လိပ်စာ</strong></h5></label>
          <div class="col-md-7">
            {!! Form::textarea("address", null, ['class'=>'form-control', 'placeholder'=>'Religion', 'placeholder'=>'Address', 'rows'=>'1']) !!}
          </div>
        </div>
        <div class="form-group has-success" style="margin-top:0px; margin-bottom:0px">
          <label for="paddress" class="control-label col-md-4"><h5 class=" text-primary"><strong>မိဘအမည်/ နေရပ်လိပ်စာ</strong></h5></label>
          <div class="col-md-7">
            {!! Form::textarea("paddress", null, ['class'=>'form-control', 'placeholder'=>'Religion', 'placeholder'=>'Parent Address', 'rows'=>'1']) !!}
          </div>
        </div>
        <div class="form-group has-success" id="add-new-group" style="display: none;">
          <div class="col-md-offset-3 col-md-8">
            <div class="input-group">
              <input type="text" name="new_group" id="new_group" class="form-control">
              <span class="input-group-btn">
                <a href="#" class="btn btn-default">
                  <i class="glyphicon glyphicon-ok"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center" style="margin-top:20px;">
        @if (Request::is('personals/create'))
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
              <img src="../uploads/images/require.png" alt="Photo">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div class="text-center">
              <span class="btn btn-success btn-file"><span class="fileinput-new">Choose Photo</span>
              <span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
          </div>
          @else
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                <?php $image = !is_null($personal->image) ? $personal->image : 'default.png' ?>
                {!! Html::image('uploads/personal_images/' . $image, $personal->name, ['class'=>'media-object']) !!}
              </div>

              <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
              <div class="text-center">
                <span class="btn btn-success btn-file btn-sm"><span class="fileinput-new">Change Photo</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                <a href="#" class="btn btn-primary fileinput-exists btn-sm" data-dismiss="fileinput">Remove</a>
              </div>
            </div>
        @endif

      </div>
    </div>
  </div>
</div>
<div class="card-footer">
  @include('kopin.button-add')
</div>
