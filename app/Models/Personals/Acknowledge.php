<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Acknowledge extends Model
{
    protected $fillable = ['description', 'action', 'remark'];

    protected $table = 'acknowledges';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
