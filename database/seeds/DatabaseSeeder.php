<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DeptTableSeeder::class);
        $this->call(AccountHeadTableSeeder::class);
        $this->call(PositionTypeTableSeeder::class);
        $this->call(YearTableSeeder::class);
        $this->call(PersonalTableSeeder::class);
    }
}
