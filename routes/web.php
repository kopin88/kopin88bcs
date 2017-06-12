<?php

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/org', 'HomeController@org');
Route::get('/documentation', 'HomeController@documentation');

Route::group(['prefix' => 'reports'], function () {
  Route::get('/', [
    'uses'=>'ReportCtrl@index',
    'as'=>'reports.index'
  ]);
  Route::post('/{user_id}', [
    'uses'=>'ReportCtrl@store',
    'as'=>'reports.store'
  ]);
  Route::PATCH('/{id}', [
    'uses'=>'ReportCtrl@update',
    'as'=>'reports.update'
  ]);
});

//User
Route::group(['prefix' => 'users'], function () {
    Route::get('/list', [
      'uses'=>'Auth\UserCtrl@index',
      'as'=>'users.index',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'User Manager']
    ]);
    Route::get('/{id}', [
      'uses' => 'Auth\UserCtrl@show',
      'as' => 'users.show',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'User Manager']
    ]);
    Route::post('/assign', [
      'uses'=>'Auth\UserCtrl@AdminAssignRoles',
      'as'=>'assign',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'User Manager']
    ]);
});

Route::post('/changepass', [
  'uses'=>'Auth\UserCtrl@changepass',
  'as'=>'changepass'
]);

Route::put('/delete/{id}', [
  'uses'=>'Auth\UserCtrl@delete',
  'as'=>'user.delete'
]);

Route::get('user/help', 'Auth\UserCtrl@help');
Route::get('rolelist', 'Auth\UserCtrl@role_list');
Route::get('profile', 'Auth\UserCtrl@profile');
Route::post('profile', 'Auth\UserCtrl@update_avatar');


//Dept
Route::group(['prefix' => 'depts'], function () {
  Route::get('/', [
    'uses' => 'Personals\DeptCtrl@index',
    'as' => 'depts.index',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager']
  ]);
  Route::post('/', [
    'uses' => 'Personals\DeptCtrl@store',
    'as' => 'depts.store',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager']
  ]);
  Route::patch('/{id}', [
    'uses' => 'Personals\DeptCtrl@update',
    'as' => 'depts.update',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager']
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\DeptCtrl@delete',
    'as' => 'depts.delete',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager']
  ]);
});

//Personal
Route::resource('personals', 'Personals\PersonalCtrl');
Route::get('personal/help', 'Personals\PersonalCtrl@help');


Route::group(['prefix' => 'personals'], function () {
  Route::get('/autocomplete', [
    'uses'=>'Personals\PersonalCtrl@autocomplete',
    'as'=>'personals.autocomplete'
  ]);
  Route::get('/{id}/detail', [
    'uses'=>'Personals\PersonalCtrl@detail',
    'as'=>'personals.detail',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
  ]);
});

// Personal Remark
Route::group(['prefix' => 'personals'], function () {

    Route::post('/{personal}/transfer', [
      'uses'=>'Personals\RemarkCtrl@store',
      'as'=>'remarks.store',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
    ]);

    Route::patch('/{id}/delete', [
      'uses'=>'Personals\RemarkCtrl@delete',
      'as'=>'personals.delete',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
    ]);

    Route::patch('/{id}/transfer', [
      'uses'=>'Personals\RemarkCtrl@transfer',
      'as'=>'personals.transfer',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
    ]);

    Route::patch('/{id}/resign', [
      'uses'=>'Personals\RemarkCtrl@resign',
      'as'=>'personals.resign',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
    ]);

    Route::patch('/{id}/pension', [
      'uses'=>'Personals\RemarkCtrl@pension',
      'as'=>'personals.pension',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
    ]);

    Route::get('/transfer/list', [
      'uses'=>'Personals\RemarkCtrl@transferList',
      'as'=>'personals.transferlist',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write', 'Personal Read']
    ]);

    Route::get('/resign/list', [
      'uses'=>'Personals\RemarkCtrl@resignList',
      'as'=>'personals.resignlist',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write', 'Personal Read']
    ]);

    Route::get('/pension/list', [
      'uses'=>'Personals\RemarkCtrl@pensionList',
      'as'=>'personals.pensionlist',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager', 'Personal Write', 'Personal Read']
    ]);
});

// Position Types
  Route::group(['prefix' => 'position_types'], function () {
    Route::get('/', [
      'uses' => 'Personals\PositionTypeCtrl@index',
      'as' => 'position_types.index',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager']
    ]);
    Route::post('/', [
      'uses' => 'Personals\PositionTypeCtrl@store',
      'as' => 'position_types.store',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager']
    ]);
    Route::patch('/{id}', [
      'uses' => 'Personals\PositionTypeCtrl@update',
      'as' => 'position_types.update',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager']
    ]);
    Route::put('/{id}', [
      'uses' => 'Personals\PositionTypeCtrl@delete',
      'as' => 'position_types.delete',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Personal Manager']
    ]);
  });


//  Position
Route::group(['prefix' => 'positions'], function () {
  Route::get('/{personal_id}',[
    'uses' => 'Personals\PositionCtrl@index',
    'as' => 'positions.index',
    'middleware'=>'roles',
    'roles'=>['Administrator', 'Personal Write', 'Personal Manager', 'Personal Read']
  ]);
  Route::post('/{personal_id}', [
    'uses' => 'Personals\PositionCtrl@store',
    'as' => 'positions.store',
    'middleware'=>'roles',
    'roles'=>['Administrator', 'Personal Write', 'Personal Manager']
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\PositionCtrl@edit',
    'as' => 'positions.edit',
    'middleware'=>'roles',
    'roles'=>['Administrator', 'Personal Write', 'Personal Manager']
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\PositionCtrl@update',
    'as' => 'positions.update',
    'middleware'=>'roles',
    'roles'=>['Administrator', 'Personal Write', 'Personal Manager']
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\PositionCtrl@destory',
    'as' => 'positions.destory',
    'middleware'=>'roles',
    'roles'=>['Administrator', 'Personal Write', 'Personal Manager']
  ]);
});

// Salary Payment (Remark)
Route::group(['prefix' => 'payments'], function () {
  Route::get('/{id}/financialyear', [
    'uses'=>'Personals\PaymentCtrl@index',
    'as' => 'payments.index'
  ]);
  Route::get('/{id}/{fyear_id}', [
    'uses'=>'Personals\PaymentCtrl@show',
    'as' => 'payments.show'
  ]);
});

// LeaveYear
Route::resource('LeaveYears', 'Personals\LeaveYearCtrl', ['except' => [
    'create', 'edit', 'destroy'
]]);
Route::put('LeaveYears\{id}', [
  'uses'=>'Personals\LeaveYearCtrl@delete',
  'as'=>'LeaveYears.delete',
  'middleware'=>'roles',
  'roles'=>['Administrator',  'Personal Manager']
]);

// Leave Types
Route::resource('leave_types', 'Personals\LeaveTypeCtrl', ['except' => [
    'create', 'edit', 'show'
]]);
Route::put('leave_types\{id}', [
  'uses'=>'Personals\LeaveTypeCtrl@delete',
  'as'=>'leave_types.delete',
  'middleware'=>'roles',
  'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
]);

//  Leaves ၁၇။ ခွင့်ယူခြင်းများ
Route::group(['prefix' => 'leaves'], function () {
  Route::get('/{personal_id}/list', [
    'uses'=>'Personals\LeaveCtrl@index',
    'as'=>'leaves.index',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager', 'Personal Write', 'Personal Read']
  ]);
  Route::get('/{personal_id}/{year_id}', [
    'uses'=>'Personals\LeaveCtrl@show',
    'as'=>'leaves.show',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager', 'Personal Write', 'Personal Read']
  ]);
  Route::post('/{personal_id}/{year_id}', [
    'uses' => 'Personals\LeaveCtrl@store',
    'as' => 'leaves.store',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
  ]);

  Route::put('/{id}', [
    'uses' => 'Personals\LeaveCtrl@update',
    'as' => 'leaves.update',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\LeaveCtrl@destroy',
    'as' => 'leaves.destroy',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager', 'Personal Write']
  ]);
  // Route::get('/{personal_id}/leaves', [
  //   'uses'=>'Personals\LeaveCtrl@leaves',
  //   'as'=>'leaves.leaves'
  // ]);

  Route::get('/{personal_id}/leaves/{year_id}', [
    'uses'=>'Personals\LeaveCtrl@detail',
    'as'=>'leaves.detail',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Personal Manager', 'Personal Write', 'Personal Read']
  ]);
});

// ၁၀ -- Marital
Route::group(['prefix' => 'maritals'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\MaritalCtrl@store',
    'as' => 'maritals.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\MaritalCtrl@edit',
    'as' => 'maritals.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\MaritalCtrl@update',
    'as' => 'maritals.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\MaritalCtrl@destory',
    'as' => 'maritals.destory'
  ]);
});

//Children
Route::group(['prefix' => 'childrens'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\ChildrenCtrl@store',
    'as' => 'childrens.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\ChildrenCtrl@edit',
    'as' => 'childrens.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\ChildrenCtrl@update',
    'as' => 'childrens.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\ChildrenCtrl@destory',
    'as' => 'childrens.destory'
  ]);
});

// Heir ၁၁။ အမွေစားအမွေခံ
Route::group(['prefix' => 'heirs'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\HeirCtrl@store',
    'as' => 'heirs.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\HeirCtrl@edit',
    'as' => 'heirs.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\HeirCtrl@update',
    'as' => 'heirs.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\HeirCtrl@destory',
    'as' => 'heirs.destory'
  ]);
});

// Training ၁၂။ တက်ရောက်ခဲ့သည့်သင်တန်းများ (ပြည်တွင်း/ပြည်ပ)
Route::group(['prefix' => 'trainings'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\TrainingCtrl@store',
    'as' => 'trainings.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\TrainingCtrl@edit',
    'as' => 'trainings.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\TrainingCtrl@update',
    'as' => 'trainings.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\TrainingCtrl@destory',
    'as' => 'trainings.destory'
  ]);
});

// Experience ၁၃။ တာ၀န်ထမ်းဆောင်ခဲ့သည့်နေ့မှစ၍ ထမ်းဆောင်ခဲ့သော တာ၀န်များ
Route::group(['prefix' => 'experiences'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\ExperienceCtrl@store',
    'as' => 'experiences.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\ExperienceCtrl@edit',
    'as' => 'experiences.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\ExperienceCtrl@update',
    'as' => 'experiences.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\ExperienceCtrl@destory',
    'as' => 'experiences.destory'
  ]);
});

//  Acknowledge ၁၄။ ပြစ်မှု
Route::group(['prefix' => 'acknowledges'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\AcknowledgeCtrl@store',
    'as' => 'acknowledges.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\AcknowledgeCtrl@edit',
    'as' => 'acknowledges.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\AcknowledgeCtrl@update',
    'as' => 'acknowledges.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\AcknowledgeCtrl@destory',
    'as' => 'acknowledges.destory'
  ]);
});

//  Congrat ၁၅။ ဘွဲ့ တံဆိပ်များ
Route::group(['prefix' => 'congrats'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\CongratCtrl@store',
    'as' => 'congrats.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\CongratCtrl@edit',
    'as' => 'congrats.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\CongratCtrl@update',
    'as' => 'congrats.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\CongratCtrl@destory',
    'as' => 'congrats.destory'
  ]);
});

//  Knowledge ၁၆။ နိုင်ငံခြား ဗဟုသုတ
Route::group(['prefix' => 'knowledges'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\KnowledgeCtrl@store',
    'as' => 'knowledges.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\KnowledgeCtrl@edit',
    'as' => 'knowledges.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\KnowledgeCtrl@update',
    'as' => 'knowledges.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\KnowledgeCtrl@destory',
    'as' => 'knowledges.destory'
  ]);
});

//  SpecialPost ၁၈။ အထူး ပြင်ပ တာ၀န် ထမ်းဆောင်ခြင်းများ
Route::group(['prefix' => 'specialposts'], function () {
  Route::post('/{personal_id}', [
    'uses' => 'Personals\SpecialPostCtrl@store',
    'as' => 'specialposts.store'
  ]);
  Route::get('/{id}/edit', [
    'uses' => 'Personals\SpecialPostCtrl@edit',
    'as' => 'specialposts.edit'
  ]);
  Route::put('/{id}', [
    'uses' => 'Personals\SpecialPostCtrl@update',
    'as' => 'specialposts.update'
  ]);
  Route::delete('/{id}', [
    'uses' => 'Personals\SpecialPostCtrl@destory',
    'as' => 'specialposts.destory'
  ]);
});

/*
 *  For Account System
 */

 // AccHeadCtrl
 // Route::resource('acc_heads', 'Accounts\AccHeadCtrl', ['except' => [
 //     'create', 'edit', 'destroy'
 // ]]);
 // IncomeHead
 Route::resource('income_heads', 'Accounts\IncomeHeadCtrl', [
   'except' => ['index', 'create', 'edit', 'destroy']
 ]);

 Route::get('income_heads', [
   'uses'=>'Accounts\IncomeHeadCtrl@index',
   'as'=>'income_heads.index',
   'middleware'=>'roles',
   'roles'=>['Administrator',  'Account Manager', 'Account Write']
 ]);
 Route::put('/income_heads/{income_head}', [
   'uses'=>'Accounts\IncomeHeadCtrl@delete',
   'as'=>'income_heads.delete',
   'middleware'=>'roles',
   'roles'=>['Administrator',  'Account Manager', 'Account Write']
 ]);

 // ExpenseHead
 Route::resource('expense_heads', 'Accounts\ExpenseHeadCtrl', ['except' => [
     'create', 'edit', 'destroy'
 ]]);
 Route::put('/expense_heads/{expense_head}', [
   'uses'=>'Accounts\ExpenseHeadCtrl@delete',
   'as'=>'expense_heads.delete',
   'middleware'=>'roles',
   'roles'=>['Administrator',  'Account Manager', 'Account Write']
 ]);

  // FinancialYear
  Route::resource('financial_years', 'Accounts\FinancialYearCtrl', ['except' => [
      'create', 'edit', 'destroy'
  ]]);
  Route::put('/financial_years/{financial_year}', [
    'uses'=>'Accounts\FinancialYearCtrl@delete',
    'as'=>'financial_years.delete',
    'middleware'=>'roles',
    'roles'=>['Administrator',  'Account Manager']
  ]);

  // // MonthCtrl
  // Route::resource('{financial_year_id}/months', 'Accounts\MonthCtrl', ['except' => [
  //     'create', 'edit', 'destroy'
  // ]]);

    // //Month
    Route::group(['prefix' => 'months'], function () {
      Route::get('/{financial_year_id}', [
        'uses' => 'Accounts\MonthCtrl@index',
        'as' => 'months.index',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Read', 'Account Write']
      ]);
      Route::post('/{financial_year_id}', [
        'uses' => 'Accounts\MonthCtrl@store',
        'as' => 'months.store',
        // 'middleware'=>'roles',
        // 'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      // Route::get('/{id}', [
      //   'uses' => 'Accounts\MonthCtrl@show',
      //   'as' => 'months.show'
      // ]);
      // Route::get('/months/{id}/edit', [
      //   'uses' => 'Accounts\MonthCtrl@edit',
      //   'as' => 'months.edit'
      // ]);
      Route::patch('/{id}', [
        'uses' => 'Accounts\MonthCtrl@update',
        'as' => 'months.update',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::put('/{id}', [
        'uses' => 'Accounts\MonthCtrl@balance',
        'as' => 'months.balance',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::delete('/months/{id}', [
        'uses' => 'Accounts\MonthCtrl@destory',
        'as' => 'months.destory',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager']
      ]);
    });

  // Income
    Route::group(['prefix' => 'incomes'], function () {
      Route::post('/{month_id}', [
        'uses' => 'Accounts\IncomeCtrl@store',
        'as' => 'incomes.store',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::get('/{id}/edit', [
        'uses' => 'Accounts\IncomeCtrl@edit',
        'as' => 'incomes.edit',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::PATCH('/{id}', [
        'uses' => 'Accounts\IncomeCtrl@update',
        'as' => 'incomes.update',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::delete('/{id}', [
        'uses' => 'Accounts\IncomeCtrl@destroy',
        'as' => 'incomes.destroy',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
    });

  // Expense
    Route::group(['prefix' => 'expenses'], function () {
      Route::post('/{month_id}', [
        'uses' => 'Accounts\ExpenseCtrl@store',
        'as' => 'expenses.store',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::get('/{id}/edit', [
        'uses' => 'Accounts\ExpenseCtrl@edit',
        'as' => 'expenses.edit',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::put('/{id}', [
        'uses' => 'Accounts\ExpenseCtrl@update',
        'as' => 'expenses.update',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::delete('/{id}', [
        'uses' => 'Accounts\ExpenseCtrl@destroy',
        'as' => 'expenses.destroy',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
    });

  // Accounts
  Route::group(['prefix' => 'accounts'], function () {
    // Route::post('/{month_id}', [
    //   'uses' => 'Accounts\ExpenseCtrl@store',
    //   'as' => 'expenses.store'
    // ]);
    Route::get('/{month_id}', [
      'uses' => 'Accounts\AccountCtrl@show',
      'as' => 'accounts.show',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Account Manager', 'Account Write', 'Account Read']
    ]);
    // Route::get('/{id}/edit', [
    //   'uses' => 'AccountCtrl@edit',
    //   'as' => 'accounts.edit'
    // ]);
    // Route::put('/{id}', [
    //   'uses' => 'AccountCtrl@update',
    //   'as' => 'accounts.update'
    // ]);
    // Route::delete('/{id}', [
    //   'uses' => 'AccountCtrl@destory',
    //   'as' => 'accounts.destory'
    // ]);
  });

  // Payroll
  Route::group(['prefix' => 'payrolls'], function () {
    // Route::post('/{month_id}', [
    //   'uses' => 'PayrollCtrl@store',
    //   'as' => 'payrolls.store'
    // ]);
    Route::get('/{month_id}', [
      'uses' => 'Accounts\PayrollCtrl@index',
      'as' => 'payrolls.index',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Account Manager', 'Account Write', 'Account Read']
    ]);

    Route::get('/{month_id}/create/{personal_id}', [
      'uses' => 'Accounts\PayrollCtrl@create',
      'as' => 'payrolls.create',
      'middleware'=>'roles',
      'roles'=>['Administrator',  'Account Manager', 'Account Write']
    ]);
    //
    // Route::get('/{id}/edit', [
    //   'uses' => 'PayrollCtrl@edit',
    //   'as' => 'payrolls.edit'
    // ]);
    // Route::put('/{id}', [
    //   'uses' => 'PayrollCtrl@update',
    //   'as' => 'payrolls.update'
    // ]);
    // Route::delete('/{id}', [
    //   'uses' => 'PayrollCtrl@destory',
    //   'as' => 'payrolls.destory'
    // ]);
  });


  // InPayroll
    Route::group(['prefix' => 'in_payrolls'], function () {
      Route::post('/{month_id}/{personal_id}', [
        'uses' => 'Accounts\InPayrollCtrl@store',
        'as' => 'in_payrolls.store',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::get('/{id}/edit', [
        'uses' => 'Accounts\InPayrollCtrl@edit',
        'as' => 'in_payrolls.edit',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::put('/{id}', [
        'uses' => 'Accounts\InPayrollCtrl@update',
        'as' => 'in_payrolls.update',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::delete('/{id}', [
        'uses' => 'Accounts\InPayrollCtrl@destory',
        'as' => 'in_payrolls.destory',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
    });


  // OutPayroll
    Route::group(['prefix' => 'out_payrolls'], function () {
      Route::post('/{month_id}/{personal_id}', [
        'uses' => 'Accounts\OutPayrollCtrl@store',
        'as' => 'out_payrolls.store',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::get('/{id}/edit', [
        'uses' => 'Accounts\OutPayrollCtrl@edit',
        'as' => 'out_payrolls.edit',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::put('/{id}', [
        'uses' => 'Accounts\OutPayrollCtrl@update',
        'as' => 'out_payrolls.update',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
      Route::delete('/{id}', [
        'uses' => 'Accounts\OutPayrollCtrl@destory',
        'as' => 'out_payrolls.destory',
        'middleware'=>'roles',
        'roles'=>['Administrator',  'Account Manager', 'Account Write']
      ]);
    });
