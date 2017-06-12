<?php

use Illuminate\Database\Seeder;
use App\Models\Accounts\IncomeHead;
use App\Models\Accounts\ExpenseHead;

class AccountHeadTableSeeder extends Seeder
{

    public function run()
    {
        $in_head = New IncomeHead();
        $in_head->name = "Income Title 1";
        $in_head->save();
        $in_head = New IncomeHead();
        $in_head->name = "Income Title 2";
        $in_head->save();
        $in_head = New IncomeHead();
        $in_head->name = "Income Title 3";
        $in_head->save();
        $ex_head = New ExpenseHead();
        $ex_head->name = "Expense Title 1";
        $ex_head->save();
        $ex_head = New ExpenseHead();
        $ex_head->name = "Expense Title 2";
        $ex_head->save();
        $ex_head = New ExpenseHead();
        $ex_head->name = "Expense Title 3";
        $ex_head->save();
    }
}
