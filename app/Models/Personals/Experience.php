<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['personal_id', 'org_dept', 'org_position', 'tmp_position', 'from_date', 'to_date', 'remark'];

    protected $table = 'experiences';

    public function personal()
    {
      return $this->belongsTo(Personal::class, 'personal_id');
    }
}
