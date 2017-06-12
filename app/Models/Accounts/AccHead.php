<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class AccHead extends Model
{
    protected $fillable = ['name'];

    protected $table = 'acc_heads';

    public function accounts()
    {
      return $this->hasMany(Account::class);
    }
}
