<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class ExpenseHead extends Model
{
    protected $fillable = ['name'];

    protected $table = 'expense_heads';

    public function expenses()
    {
      return $this->hasMany(ExpenseHead::class);
    }
}
