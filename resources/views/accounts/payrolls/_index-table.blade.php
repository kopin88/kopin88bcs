<table class="table table-bordered table-hover tab kopin-font">
  <thead>
    <tr>
      <th class="text-center"><strong>စဉ်</strong></th>
      <th class="text-center"><strong>အမည်</strong></th>
      <th class="text-center"><strong>ရာထူး</strong></th>
      <th class="text-center"><strong>ဌာန</strong></th>
      <th class="text-center"><strong>လစာ ထုတ်ငွေ</strong></th>
      <th class="text-center"><strong>လစာပေးထည့်ရန်</strong></th>
    </tr>
  </thead>

  <tbody>
    <?php $n=1 ?>
    @foreach($personals as $personal)
      <tr>
        <td class="text-center" width="80px">
          <?php $image = !is_null($personal->image) ? $personal->image : 'default.png' ?>
            {!! Html::image('uploads/personal_images/' . $image, $personal->name, ['class'=>'media-object', 'width'=>'100', 'height'=>'100']) !!}
          {{-- <img src="/uploads/personal_images/{{ $personal->image }}" alt="" style="width:40px; height:40px; border-radius:50%"/> --}}
        </td>
        <td>{{$personal->name}}</td>
        <td>
          @foreach ($personal->positions as $key => $position)
            @if ($loop->last)
                {{ $position->position_type->name }}
            @endif
          @endforeach
        </td>
        <td>
          @foreach ($personal->positions as $key => $position)
            @if ($loop->last)
                {{ $position->dept->name }}
            @endif
          @endforeach
        </td>
        <td class="text-right">

         @php
            $intotal = 0;
             foreach (App\Models\Accounts\InPayroll::get()->where('month_id', $month->id)->where('personal_id', $personal->id) as $in_payroll)
              {
                $intotal+= $in_payroll->amount;
              }
            $outtotal = 0;
             foreach (App\Models\Accounts\OutPayroll::get()->where('month_id', $month->id)->where('personal_id', $personal->id) as $out_payroll)
              {
                $outtotal+= $out_payroll->amount;
              }
            $total = $intotal-$outtotal;
         @endphp
         @if ($intotal != 0)
           {{number_format($total) }}
         @endif


        </td>
        <td class="text-center">

          <a href="{{route('payrolls.create', ['month_id'=>$month->id, 'personal_id'=>$personal->id])}}" data-toggle="hover" class="text-success" title="ထည့်ရန်">
            <i class="material-icons">add_circle</i>

            {{-- <span class="glyphicon glyphicon-plus-sign"></span> /
            <span class="glyphicon glyphicon-edit"></span> --}}
          </a>
          <a href="{{route('payrolls.create', ['month_id'=>$month->id, 'personal_id'=>$personal->id])}}" data-toggle="hover" class="text-success" title="ပြင်ရန်">
            <i class="material-icons">edit</i>
          </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
