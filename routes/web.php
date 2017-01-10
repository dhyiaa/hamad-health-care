<?php
Route::group(['middleware' => 'on_off'], function () {
    Route::get('/', 'homecontroller@get_index')->name('home');
    Route::get('/lang/set/{lang?}', 'homecontroller@lang')->name('lang');
    Route::post('/email_menu', 'homecontroller@email')->name('email');
    Route::get('/partner', 'homecontroller@get_partner')->name('partner');
    Route::get('/med_check', 'homecontroller@get_med_check')->name('med_check');
    Route::get('/ask_doctor', 'homecontroller@get_ask_doc')->name('ask_doc');
    Route::post('/ask_doctor', 'homecontroller@post_ask_doc')->name('ask_doc');
    Route::get('/about', 'homecontroller@about')->name('about');
    Route::get('/callus', 'homecontroller@callus')->name('callus');
});

Route::group(['prefix' => '/admin'], function () {
        Route::group(['middleware' => 'guest'], function () {
            Route::get('/login','admincontroller@GET_Login')->name('admin.login');
            Route::post('/login','admincontroller@POST_Login')->name('admin.login');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/CPanal','admincontroller@GET_Profile')->name('admin.home');
            Route::get('/CPanal/user','admincontroller@GET_User')->name('admin.user_edit');
            Route::post('/CPanal/user','admincontroller@POST_User')->name('admin.user_edit');

            Route::get('/CPanal/med_asks','admincontroller@GET_med_asks')->name('admin.med_asks');
            Route::get('/CPanal/get_ask/{id}','admincontroller@GET_ask')->name('admin.get_ask');
            Route::post('/CPanal/answer','admincontroller@POST_answer')->name('admin.answer.ques');
            Route::get('/CPanal/delete_ask/{id}','admincontroller@DELETE_ask')->name('admin.del_ask');

            Route::get('/CPanal/email_list','admincontroller@GET_email_list')->name('admin.email_list');
            Route::post('/CPanal/email_list','admincontroller@POST_email_list')->name('admin.email_list');

            Route::get('/CPanal/website/enable','admincontroller@enable')->name('admin.website.on');
            Route::get('/CPanal/website/disable','admincontroller@disable')->name('admin.website.off');

            Route::get('/logout','admincontroller@GET_Logout')->name('admin.logout');
        });
});
Route::get('/errors/off_website', function (){ return view('errors.off'); })->name('error_off');


