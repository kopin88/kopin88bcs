<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = ['personal_id','name', 'date'];

    protected $table = 'childrens';

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'personal_id');
    }
}
