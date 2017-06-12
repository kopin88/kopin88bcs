<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class PositionType extends Model
{
    protected $fillable = ['name', 'description'];

    protected $table = 'position_types';

    public function positions()
    {
      return $this->hasMany(Position::class);
    }
}
