<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    protected $fillable = [
      'financial_year_id', 'name', 'title', 'month_balance_id', 'in_total', 'out_total', 'balance', 'open_balance', 'remark'
    ];

    protected $table = 'months';

    public function financial_year()
    {
      return $this->belongsTo(FinancialYear::class, 'financial_year_id');
    }

    public function accounts()
    {
      return $this->hasMany(Account::class);
    }

    public function incomes()
    {
      return $this->hasMany(Income::class);
    }

    public function expenses()
    {
      return $this->hasMany(Expense::class);
    }

    public function in_payrolls()
    {
      return $this->hasMany(InPayroll::class);
    }

    public function out_payrolls()
    {
      return $this->hasMany(OutPayroll::class);
    }

}
