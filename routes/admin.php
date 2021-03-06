<?php

Route::group(['prefix' => 'admin'], function () {
    // 首页
    Route::get('/', 'Admin\HomeController@index');
    // 登录注册模块
//    Route::get('/login', 'Admin\LoginController@index')->name('login');
//    Route::post('/login', 'Admin\LoginController@login');
//    Route::get('/logout', 'Admin\LoginController@logout');
//    Route::get('/register', 'Admin\RegisterController@index');
//    Route::post('/register', 'Admin\RegisterController@register');
    // 管理人员模块
    Route::get('/users', 'Admin\UserController@index');
    Route::get('/users/create', 'Admin\UserController@create');
    Route::post('/users/store', 'Admin\UserController@store');
    Route::get('/users/{user}/role', 'Admin\UserController@role');
    Route::post('/users/{user}/role', 'Admin\UserController@storeRole');
    Route::get('/users/upload', 'Admin\UserController@upload');
    Route::get('/users/import', 'Admin\UserController@import');
    Route::get('/users/export', 'Admin\UserController@export');

    // 角色模块
     Route::get('/roles', 'Admin\RoleController@index');
     Route::get('/roles/create', 'Admin\RoleController@create');
     Route::post('/roles/store', 'Admin\RoleController@store');
     Route::get('/roles/{role}/permission', 'Admin\RoleController@permission');
     Route::post('/roles/{role}/permission', 'Admin\RoleController@storePermission');
    // 权限模块
     Route::get('/permissions', 'Admin\PermissionController@index');
     Route::get('/permissions/create', 'Admin\PermissionController@create');
     Route::post('/permissions/store', 'Admin\PermissionController@store');
    // 签到系统
    Route::get('/signin', 'Admin\SigninController@index');
    Route::post('/signin', 'Admin\SigninController@store');
    Route::get('/signin/upload', 'Admin\SigninController@upload');
    Route::get('/signin/import', 'Admin\SigninController@import');
    Route::get('/signin/export', 'Admin\SigninController@export');
    // 日程安排
    Route::get('/schedule', 'Admin\ScheduleController@index');
    Route::post('/schedule/store', 'Admin\ScheduleController@store');
    Route::put('/schedule/{schedule}', 'Admin\ScheduleController@update');
    Route::delete('/schedule/{schedule}', 'Admin\ScheduleController@destroy');
    // 设备使用记录
    Route::get('/usage', 'Admin\UsageController@index');
    Route::post('/usage', 'Admin\UsageController@store');
    Route::put('/usage/{usage}', 'Admin\UsageController@update');
    Route::delete('/usage/{usage}', 'Admin\UsageController@destory');
    // 工作量计算
    Route::get('/workload', 'Admin\WorkloadController@index');
    Route::post('/workload', 'Admin\WorkloadController@store');
    Route::delete('/workload', 'Admin\WorkloadController@destory');
    Route::group(['middleware' => 'auth:admin'], function () {
        
    });
});
