<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable =['personal_id', 'leave_year_id', 'leave_type_id', 'from_date', 'to_date', 'total', 'remark'];

    protected $table = 'leaves';

    public function leave_year()
    {
      return $this->beLongsTo(LeaveYear::class, 'leave_year_id');
    }

    public function leave_type()
    {
      return $this->beLongsTo(LeaveType::class, 'leave_type_id');
    }

    public function personal()
    {
      return $this->beLongsTo(Personal::class, 'personal_id');
    }
}
