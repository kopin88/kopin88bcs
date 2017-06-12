<?php

use Illuminate\Database\Seeder;
use App\Models\Personals\LeaveYear;
use App\Models\Accounts\FinancialYear;

class YearTableSeeder extends Seeder
{
    public function run()
    {
      $leave_year = new LeaveYear();
      $leave_year->name = 2015;
      $leave_year->save();
      $leave_year = new LeaveYear();
      $leave_year->name = 2016;
      $leave_year->save();
      $leave_year = new LeaveYear();
      $leave_year->name = 2017;
      $leave_year->save();
      $leave_year = new LeaveYear();
      $leave_year->name = 2018;
      $leave_year->save();


      $financial_year = new FinancialYear();
      $financial_year->name = "2015 / 2016";
      $financial_year->save();
      $financial_year = new FinancialYear();
      $financial_year->name = "2016 / 2017";
      $financial_year->save();
      $financial_year = new FinancialYear();
      $financial_year->name = "2017 / 2018";
      $financial_year->save();
      $financial_year = new FinancialYear();
      $financial_year->name = "2018 / 2019";
      $financial_year->save();
    }
}
