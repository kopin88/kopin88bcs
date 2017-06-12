<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['name', 'period', 'place', 'remark', 'personal_id'];

    protected $table = 'trainings';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
