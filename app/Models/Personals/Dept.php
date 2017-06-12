<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $fillable = ['name', 'description'];

    protected $table = 'depts';

    public function positions()
    {
      return $this->hasMany(Position::class);
    }
}
