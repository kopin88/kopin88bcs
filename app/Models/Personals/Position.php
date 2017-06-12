<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['personal_id', 'position_type_id', 'dept_id', 'date', 'basic_salary', 'annual_interest', 'end_salary', 'remark'];

    protected $table = 'positions';

    public function position_type()
    {
      return $this->beLongsTo(PositionType::class, 'position_type_id');
    }

    public function dept()
    {
      return $this->beLongsTo(Dept::class, 'dept_id');
    }

    public function personal()
    {
      return $this->beLongsTo(Personal::class, 'personal_id');
    }
}
