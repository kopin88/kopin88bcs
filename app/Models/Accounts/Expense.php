<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
      'month_id', 'date', 'name', 'description', 'expense_head_id', 'amount', 'remark'
    ];

  protected $table = 'expenses';

  public function month()
  {
    return $this->belongsTo(Month::class, 'month_id');
  }

  public function expense_head()
  {
    return $this->belongsTo(ExpenseHead::class, 'expense_head_id');
  }
}
