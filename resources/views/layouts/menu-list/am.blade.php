@foreach(Auth::user()->roles as $key => $navrole)
	@if ($navrole->name == "Administrator")
		<li class="{{ Request::is('income_heads') ? "active" : "" }} || {{ Request::is('income_heads/*') ? "active" : "" }} || {{ Request::is('expense_heads') ? "active" : "" }} || {{ Request::is('expense_heads/*') ? "active" : "" }}">
		  <a data-toggle="collapse" href="#AccountTitle">
			  <i class="material-icons">dns</i>
			  <p>ငွေစာရင်းခေါင်းစဉ်
				  <b class="caret"></b>
			  </p>
		  </a>
		  <div class="collapse" id="AccountTitle">
			  <ul class="nav">
				  <li class="{{ Request::is('income_heads') ? "active" : "" }} || {{ Request::is('income_heads/*') ? "active" : "" }}">
					  <a href="{{ url('/income_heads') }}">
						  <i class="material-icons pull-right">format_indent_increase</i>
						<p>ဝင်ငွေ</p>
					  </a>
				  </li>
				  <li class="{{ Request::is('expense_heads') ? "active" : "" }} || {{ Request::is('expense_heads/*') ? "active" : "" }}">
					  <a href="{{ url('/expense_heads') }}">
						<i class="material-icons pull-right">format_indent_decrease</i>
						<p>အသုံးစရိတ်</p>
					  </a>
				  </li>
			  </ul>
		  </div>
		</li>
	@elseif ($navrole->name == "Account Manager")
		<li class="{{ Request::is('income_heads') ? "active" : "" }} || {{ Request::is('income_heads/*') ? "active" : "" }} || {{ Request::is('expense_heads') ? "active" : "" }} || {{ Request::is('expense_heads/*') ? "active" : "" }}">
		  <a data-toggle="collapse" href="#AccountTitle">
			  <i class="material-icons">dns</i>
			  <p>ငွေစာရင်းခေါင်းစဉ်
				  <b class="caret"></b>
			  </p>
		  </a>
		  <div class="collapse" id="AccountTitle">
			  <ul class="nav">
				  <li class="{{ Request::is('income_heads') ? "active" : "" }} || {{ Request::is('income_heads/*') ? "active" : "" }}">
					  <a href="{{ url('/income_heads') }}">
						  <i class="material-icons pull-right">format_indent_increase</i>
						<p>ဝင်ငွေ</p>
					  </a>
				  </li>
				  <li class="{{ Request::is('expense_heads') ? "active" : "" }} || {{ Request::is('expense_heads/*') ? "active" : "" }}">
					  <a href="{{ url('/expense_heads') }}">
						<i class="material-icons pull-right">format_indent_decrease</i>
						<p>အသုံးစရိတ်</p>
					  </a>
				  </li>
			  </ul>
		  </div>
		</li>
	@endif
@endforeach


<li class="{{ Request::is('financial_years') ? "active" : "" }} || {{ Request::is('financial_years/*') ? "active" : "" }}">
    <a href="{{ url('/financial_years') }}">
        <i class="material-icons">monetization_on</i>
      <p>ငွေစာရင်း</p>
    </a>
</li>
