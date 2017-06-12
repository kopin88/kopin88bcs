  <table class="table table-hover tab kopin-font">
    <thead>
      <tr>
        <th>အခြေခံ လစာ</th>
        <th class="text-right text-primary">
          @foreach ($personal->positions as $key => $position)
            @if ($loop->last)
                {{ number_format($position->basic_salary) }}
            @endif
          @endforeach
        </th>
      </tr>
      <tr>
        <th>နှစ်တိုး</th>
        <th class="text-right text-primary">
          @foreach ($personal->positions as $key => $position)
            @if ($loop->last)
                {{ number_format($position->annual_interest) }}
            @endif
          @endforeach
        </th>
      </tr>
      <tr>
        <th>နှစ်တိုးဆုံးလစာ</th>
        <th class="text-right text-primary">
          @foreach ($personal->positions as $key => $position)
            @if ($loop->last)
                {{ number_format($position->end_salary) }}
            @endif
          @endforeach
        </th>
      </tr>
    </thead>
  </table>
