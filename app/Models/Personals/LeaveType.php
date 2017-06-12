<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    protected $fillable = ['name', 'day'];

    protected $table = 'leave_types';

    public function leaves()
    {
      return $this->hasMany(Leave::class);
    }
}
