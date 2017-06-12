<?php

namespace App\Models\Personals;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accounts\InPayroll;
use App\Models\Accounts\OutPayroll;
use App\Models\Accounts\Account;

class Personal extends Model
{
    protected $fillable = [
        'name', 'gender', 'serial', 'on_date', 'active', 'image', 'nationality', 'religion', 'nrc', 'dob', 'pob', 'edu', 'unique', 'address', 'paddress'
      ];

    protected $table = 'personals';

    public function positions()
    {
      return $this->hasMany(Position::class);
    }

    public function leaves()
    {
      return $this->hasMany(Leave::class);
    }

    public function maritals()
    {
      return $this->hasMany(Marital::class);
    }

    public function childrens()
    {
      return $this->hasMany(Children::class);
    }

    public function heirs()
    {
      return $this->hasMany(Heir::class);
    }

    public function trainings()
    {
      return $this->hasMany(Training::class);
    }

    public function experiences()
    {
      return $this->hasMany(Experience::class);
    }

    public function acknowledges()
    {
      return $this->hasMany(Acknowledge::class);
    }

    public function congrats()
    {
      return $this->hasMany(Congrat::class);
    }

    public function knowledges()
    {
      return $this->hasMany(Knowledge::class);
    }

    public function SpecialPosts()
    {
      return $this->hasMany(SpecialPost::class);
    }

    public function in_payrolls()
    {
      return $this->hasMany(InPayroll::class);
    }

    public function out_payrolls()
    {
      return $this->hasMany(OutPayroll::class);
    }

    public function accounts()
    {
      return $this->hasMany(Account::class);
    }

    public function remarks()
    {
      return $this->hasMany(Remark::class);
    }

}
