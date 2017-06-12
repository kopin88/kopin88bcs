<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class IncomeHead extends Model
{
    protected $fillable = ['name'];

    protected $table = 'income_heads';

    public function incomes()
    {
      return $this->hasMany(IncomeHead::class);
    }
}
