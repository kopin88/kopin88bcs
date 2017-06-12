<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    protected $fillable = ['description', 'personal_id', 'country', 'from_date', 'to_date'];

    protected $table = 'knowledges';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
