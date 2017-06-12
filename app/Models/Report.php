<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Report extends Model
{
    protected $fillable = ['report', 'remark', 'user_id', 'active'];

    protected $table = 'reports';

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
