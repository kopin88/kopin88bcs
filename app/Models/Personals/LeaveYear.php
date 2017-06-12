<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class LeaveYear extends Model
{
    protected $fillable = ['name'];

    protected $table = 'leave_years';

    public function leaves()
    {
      return $this->hasMany(Leave::class);
    }

}
