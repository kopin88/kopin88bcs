@if (Request::is('personals/transfer/list') )
    {!!  Form::open(['route'=>'personals.transferlist', 'method'=>'GET', 'role'=>'search']) !!}
    <div class="form-group input-group label-floating has-success pull-right" style="margin-right:20px">
      {!!Form::text('term', Request::get('term'), ['class'=>'form-control input-md', 'placeholder'=>'Search ...', 'id'=>'term'])!!}
      <span class="input-group-btn"></span>
      <button type="submit" class="btn btn-success btn-round btn-just-icon">
        <i class="material-icons">search</i><div class="ripple-container"></div>
      </button>
    </div>
    {!! Form::close() !!}

@elseif (Request::is('personals/resign/list') )
    {!!  Form::open(['route'=>'personals.resignlist', 'method'=>'GET', 'role'=>'search']) !!}
    <div class="form-group input-group label-floating has-success pull-right" style="margin-right:20px">
      {!!Form::text('term', Request::get('term'), ['class'=>'form-control input-md', 'placeholder'=>'Search ...', 'id'=>'term'])!!}
      <span class="input-group-btn"></span>
      <button type="submit" class="btn btn-success btn-round btn-just-icon">
        <i class="material-icons">search</i><div class="ripple-container"></div>
      </button>
    </div>
    {!! Form::close() !!}

@elseif (Request::is('personals/pension/list') )
      {!!  Form::open(['route'=>'personals.pensionlist', 'method'=>'GET', 'role'=>'search']) !!}
      <div class="form-group input-group label-floating has-success pull-right" style="margin-right:20px">
        {!!Form::text('term', Request::get('term'), ['class'=>'form-control input-md', 'placeholder'=>'Search ...', 'id'=>'term'])!!}
        <span class="input-group-btn"></span>
        <button type="submit" class="btn btn-success btn-round btn-just-icon">
          <i class="material-icons">search</i><div class="ripple-container"></div>
        </button>
      </div>
      {!! Form::close() !!}

@endif
