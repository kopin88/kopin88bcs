<div class="col-md-12">
  @foreach($personals as $personal)
    <div class="row thumbnail" style="padding-top:25px">
        <div class="col-md-2">
          <a href="{{route('personals.show', ['id'=>$personal->id])}}"  class="thumbnail">
            <?php $image = !is_null($personal->image) ? $personal->image : 'default.png' ?>
            {!! Html::image('uploads/personal_images/' . $image, $personal->name, ['class'=>'media-object', 'width'=>'100', 'height'=>'100']) !!}
          </a>
        </div>
        <div class="col-md-5 text-left">
          <div class="row">
            <div class="col-md-3 col-xs-3">
              <label for="name">အမည်</label>
            </div>
            <div class="col-md-9 col-xs-9">
              <a href="{{route('personals.show', ['id'=>$personal->id])}}" >
                - <strong>{{$personal->name}}</strong>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-xs-3">
              <label for="name">ရာထူး</label>
            </div>
            <div class="col-md-9 col-xs-9">
              @foreach ($personal->positions as $key => $position)
                @if ($loop->last)
                  - {{ $position->position_type->name}}
                  {{-- @if ($position->position_type_id == App\Models\Personals\PositionType::find($position->position_type_id))
                    {{ $position->psoitin_type->name }}
                  @endif
                    <p class="text-danger"><strong>ရာထူး စာရင်းမှ ပယ်ဖျက်ထားပါသည် !</strong></p> --}}
                @endif
              @endforeach
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-xs-3">
              <label for="name">ဌာန</label>
            </div>
            <div class="col-md-9 col-xs-9">
              @foreach ($personal->positions as $key => $position)
                @if ($loop->last)
                  {{-- @if ($position->dept_id == App\Models\Personals\Dept::find($position->dept_id)) --}}
                    - {{ $position->dept->name }}
                  {{-- @endif --}}
                    {{-- <p class="text-danger"><strong>ဌာန စာရင်းမှ ပယ်ဖျက်ထားပါသည် !</strong></p> --}}
                @endif
              @endforeach
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-xs-5">
              <label for="name">အခြေခံလစာ</label> :
            </div>
            <div class="col-md-9 col-xs-7">
              @foreach ($personal->positions as $key => $position)
                @if ($loop->last)
                  {{-- @if ($position->dept_id == App\Models\Personals\Dept::find($position->dept_id)) --}}
                    - {{ number_format($position->basic_salary) }}
                  {{-- @endif --}}
                    {{-- <p class="text-danger"><strong>ဌာန စာရင်းမှ ပယ်ဖျက်ထားပါသည် !</strong></p> --}}
                @endif
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row" style="margin-top:15px;">
            <div class="col-md-12 text-center">
              <a href="{{route('positions.index', ['id'=>$personal->id])}}" data-toggle="hover" title="ရာထူး တာ၀န်များ" class="btn btn-success btn-fab btn-fab-mini btn-round">
                <i class="material-icons">person_pin</i>
              </a>
              {{-- <a href="{{ route('leaves.index', $personal->id) }}" data-toggle="hover" title="ခွင့်မှတ်တမ်း" class="btn btn-success btn-fab btn-fab-mini btn-round">
                <i class="material-icons">perm_contact_calendar</i>
              </a> --}}
              <a href="{{ route('payments.index', $personal->id) }}" data-toggle="hover" title="လစာပေး/ခွင့် မှတ်တမ်း" class="btn btn-success btn-fab btn-fab-mini btn-round">
                <i class="material-icons">assignment</i>
              </a>
          		@foreach (Auth::user()->roles as $key => $user_role)
          			@if ($user_role->name == "Administrator")
          				@include('personals.role.personal-edit')
          			@elseif ($user_role->name == "Personal Manager")
          				@include('personals.role.personal-edit')
          			@elseif($user_role->name == "Personal Write")
          				@include('personals.role.personal-edit')
          			@endif
          		@endforeach
            </div>
          </div>
          @foreach (Auth::user()->roles as $key => $user_role)
            @if ($user_role->name == "Administrator")
              @include('personals.role.personal-remark')
            @elseif ($user_role->name == "Personal Manager")
              @include('personals.role.personal-remark')
            @elseif($user_role->name == "Personal Write")
              @include('personals.role.personal-remark')
            @endif
          @endforeach
      </div>
    </div>
  @endforeach
</div>

@section('additional')
@foreach($personals as $personal)
  @include('personals.modals.transfer')
  @include('personals.modals.resign')
  @include('personals.modals.pension')
  @include('personals.modals.delete')
@endforeach
@endsection
