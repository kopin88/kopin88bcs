<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Heir extends Model
{
    protected $fillable = ['personal_id', 'name', 'related', 'nrc', 'remark'];

    protected $table = 'heirs';

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'personal_id');
    }
}
