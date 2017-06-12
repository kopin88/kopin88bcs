<div class="col-lg-12 col-md-6">
  <div class="card">
  	<div class="card-header" data-background-color="green">
  		<h4 class="title">
        @if ($personal->active == 1)
          ပြောင်းရွေ့ခြင်း
        @elseif ($personal->active == 2)
          နှုတ်ထွက်/ရပ်နားခြင်း
        @elseif ($personal->active == 3)
          ပင်စင်
        @else
        @endif
      </h4>
  		<p class="category">ဝန်ထမ်းရေးရာ</p>
  	</div>
  	<div class="card-content">
      <div class="row">
        <div class="col-md-2 col-xs-12">
          <a href="#">
            <?php $image = !is_null($personal->image) ? $personal->image : 'default.png' ?>
            {!! Html::image('uploads/personal_images/' . $image, $personal->name, ['class'=>'media-object', 'style'=>'width:150px; height:150px;']) !!}
          </a>
        </div>
        <div class="col-md-4 col-xs-12 text-primary">
          <br>
          <h4><strong>{{ $personal->name }}</strong></h4>
          <p>
            <strong>
              @foreach ($personal->positions as $key => $position)
                @if ($loop->last)
                  {{ $position->position_type->name}}
                @endif
              @endforeach
            </strong>
          </p>
          <p>
            <strong>
                @foreach ($personal->positions as $key => $position)
                  @if ($loop->last)
                      {{ $position->dept->name }}
                  @endif
                @endforeach
            </strong>
          </p>
        </div>
        <div class="col-md-6 col-xs-12">
          {!! Form::open(['route'=>['remarks.store', $personal->id], 'method'=>'POST']) !!}
             @if( count($errors) )
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $key => $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <div class="card-content">
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }} label-floating has-success">
                  {!! Form::label('date', 'နေ့စွဲ') !!}
                  {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('date') }}</small>
                </div>
                <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }} label-floating has-success">
                  {!! Form::label('remark', 'အကြောင်းအရာ') !!}
                  {!! Form::textarea('remark', null, ['class' => 'form-control', 'required' => 'required', 'rows'=>'2']) !!}
                  <small class="text-danger">{{ $errors->first('remark') }}</small>
                </div>
                  @include('kopin.button-add')
              </div>
          {!!Form::close()!!}
        </div>
      </div>
  	</div>
  </div>
</div>
