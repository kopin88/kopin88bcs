<?php

use Illuminate\Database\Seeder;
use App\Models\Personals\PositionType;

class PositionTypeTableSeeder extends Seeder
{
    public function run()
    {
      $position_type = new PositionType();
      $position_type->name = 'GM';
      $position_type->description = 'General Manager';
      $position_type->save();

      $position_type = new PositionType();
      $position_type->name = 'Manager';
      $position_type->description = 'Operation Department';
      $position_type->save();

      $position_type = new PositionType();
      $position_type->name = 'Super';
      $position_type->description = 'Operation Department';
      $position_type->save();

      $position_type = new PositionType();
      $position_type->name = 'Account';
      $position_type->description = 'Accounts Department';
      $position_type->save();
    }
}
