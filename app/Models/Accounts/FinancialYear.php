<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class FinancialYear extends Model
{
    protected $fillable = ['name', 'year_balance_id', 'in_total', 'out_total', 'balance', 'open_balance', 'remark'];

    protected $table = 'financial_years';

    public function mhoth()
    {
      return $this->hasMany(Month::class);
    }
}
