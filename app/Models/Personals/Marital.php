<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Marital extends Model
{
    protected $fillable = ['name', 'desc', 'personal_id'];

    protected $table = 'maritals';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
