<?php

use Illuminate\Database\Seeder;

use App\Models\Personals\Personal;
// use Faker\Factory as Faker;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // $faker = factory(App\Models\Personals\Personal::class, 50)->make([
      //             'name' => $faker->name,
      //             'serial' => $faker->personalIdentityNumber,
      //             'on_date' => $faker->start_date,
      //             'nationality' => $faker->country,
      //             'nrc' => $faker->unique()->safeEmail,
      //             'dob' => $faker->birthDate;
      //             'pob' => $faker->address;
      //             'address' => $faker->address;
      //             'paddress' => $faker->address;
      //             'edu' => $faker->company;
      //         ]);


            $personal = factory(App\Models\Personals\Personal::class, 50)->make([
                    'name' => $faker->name;
                    'serial' => $faker->personalIdentityNumber;
                    'on_date' => $faker->start_date;
                    'nationality' => $faker->country;
                    'nrc' => $faker->unique()->safeEmail;
                    'dob' => $faker->birthDate;
                    'pob' => $faker->address;
                    'address' => $faker->address;
                    'paddress' => $faker->address;
                    'edu' => $faker->company;

      ]);
    }
}
