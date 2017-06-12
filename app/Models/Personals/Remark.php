<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    protected $fillable = ['personal_id', 'date', 'remark'];

    protected $table = 'remarks';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
