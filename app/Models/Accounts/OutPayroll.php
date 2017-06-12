<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;
use App\Models\Personals\Personal;

class OutPayroll extends Model
{
    protected $fillable = [
        'month_id', 'personal_id', 'description', 'amount', 'remark'
    ];

    protected $table = 'out_payrolls';

    public function month()
    {
      return $this->belongsTo(Month::class, 'month_id');
    }

    public function personal()
    {
      return $this->belongsTo(Personal::csass, 'personal_id');
    }
}
