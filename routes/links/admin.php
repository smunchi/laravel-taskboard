<?php
Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>['auth', 'admin']],function () {
    Route::get('/','DashboardController@dashboard')->name('home');
    Route::get('dashboard','DashboardController@dashboard')->name('admin-dashboard');   
    Route::get('admin_setting', 'SettingsController@getAdminSetting')->name('admin_setting');
    Route::get('card_order_report_summary', 'ReportController@card_order_report_summary')->name('card_order_report_summary');
    Route::post('save-admin-settings', 'SettingsController@saveAdminSettings')->name('save-admin-settings');
    Route::get('tasks', 'ReportController@getTasks')->name('tasks');
});