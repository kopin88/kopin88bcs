<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;
use App\Models\Personals\Personal;

class Account extends Model
{
        protected $fillable = ['month_id', 'date', 'description', 'acc_head_id', 'amount', 'remark'];

      protected $table = 'accounts';

      public function acc_head()
      {
        return $this->belongsTo(AccHead::class, 'acc_head_id');
      }

      public function month()
      {
        return $this->belongsTo(Month::class, 'month_id');
      }

      public function personal()
      {
        return $this->belongsTo(Personal::class, 'personal_id');
        // return $this->belongsTo('App\Models\Perosnals\Personal', 'personal_id');
      }
}
