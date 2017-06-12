<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class SpecialPost extends Model
{
    protected $fillable = ['description', 'from_date', 'to_date', 'remark'];

    protected $table = 'special_posts';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
