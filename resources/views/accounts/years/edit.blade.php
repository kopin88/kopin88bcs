<td class="text-center">
<button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#FinancialYearEdit{{ $financial_year->id }}">
    <i class="fa fa-edit text-success"></i>
</button>
@include('accounts.years._edit')
</td>
<td class="text-center">
<button type="button" rel="tooltip" title="ပြင်ရန်" class="btn btn-white btn-round btn-circle btn-xs" style="padding:3px 3px;"  data-toggle="modal" data-target="#FinancialYearDel{{ $financial_year->id }}">
    <i class="fa fa-trash text-danger"></i>
</button>
  @include('accounts.years._delete')
</td>
</tr>
