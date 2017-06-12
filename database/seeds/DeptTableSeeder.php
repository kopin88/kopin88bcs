<?php

use Illuminate\Database\Seeder;
use App\Models\Personals\Dept;

class DeptTableSeeder extends Seeder
{
    public function run()
    {
      $dept = new Dept();
      $dept->name = 'Admin';
      $dept->description = 'Administration Department';
      $dept->save();

      $dept = new Dept();
      $dept->name = 'Operation';
      $dept->description = 'Operation Department';
      $dept->save();

      $dept = new Dept();
      $dept->name = 'Warehouse';
      $dept->description = 'Store Department';
      $dept->save();

      $dept = new Dept();
      $dept->name = 'Account';
      $dept->description = 'accounts Department';
      $dept->save();
    }
}
