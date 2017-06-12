<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Congrat extends Model
{
    protected $fillable = ['description', 'year'];

    protected $table = 'congrats';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
