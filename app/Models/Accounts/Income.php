<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
      'month_id', 'date', 'name', 'description', 'income_head_id', 'amount', 'remark'
    ];

  protected $table = 'incomes';

  public function month()
  {
    return $this->belongsTo(Month::class, 'month_id');
  }

  public function income_head()
  {
    return $this->belongsTo(IncomeHead::class, 'income_head_id');
  }
}
