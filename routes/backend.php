<?php
Route::prefix('/admin')->group(function () {

    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

    // ---------------------- Admin Guard Routes -------------------------
    Route::get('/',                 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/login',                'Auth\Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit',        'Auth\Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout',               'Auth\Admin\AdminLoginController@adminLogout')->name('admin.logout');


    // ------------------- guard/ Middleware admin --------------------------
    Route::group(['middleware' => ['auth:admin', 'permission']], function () {

        // ------------------------------- Admin Profile -------------------------------

        Route::get('profile/{admin}',          'AdminController@profileView')->name('admin.profile');
        Route::put('profile/{admin}',          'AdminController@updateProfile')->name('admin.updateprofile');

        // ------------------Backend all portion------------------
        Route::namespace('Backend')->group(function () {
            // ------------------Role------------------
            Route::resource('role',                 'RoleController');
            // ------------------Dominion------------------
            Route::resource('dominion',             'DominionController');
            // ------------------Process------------------
            Route::resource('process',              'ProcessController');
            // ------------------Permission------------------
            Route::resource('permission',           'PermissionController'); // ------------------Menu------------------
            Route::resource('menu',                 'MenuController');
            Route::post('menuprocess',              'MenuController@menuProcess')->name('menu.processondominion');

            // ------------------About------------------
            Route::resource('about',                'AboutController');
            // ------------------Parishad------------------
            Route::resource('parishad',             'ParishadController');
            Route::get('/position/parishad',         'ParishadController@position')->name('parishad.position');
            Route::post('/position/parishad',        'ParishadController@savePosition')->name('parishad.savePosition');
            // ------------------Staff------------------
            Route::resource('staff',                'StaffController');
            Route::get('/position/staff',         'StaffController@position')->name('staff.position');
            Route::post('/position/staff',        'StaffController@savePosition')->name('staff.savePosition');
            // ------------------Shava------------------
            Route::resource('shava',                'ShavaController');
            // ------------------category------------------
            Route::resource('category',             'CategoryController');

            // ------------------file------------------
            Route::resource('file',                 'FileController');
            // ------------------nptice------------------
            Route::resource('notice',               'NoticeController');
            // ------------------file------------------
            Route::resource('homesetting',          'HomeSettingController');
            Route::put('home/{id}',                 'HomeSettingController@forceUpdate')->name('homesetting.force_update');

            // ------------------gallery------------------
            Route::resource('gallery',              'GalleryController');
            Route::get('/position/gallery',         'GalleryController@position')->name('gallery.position');
            Route::post('/position/gallery',        'GalleryController@savePosition')->name('gallery.savePosition');

            // ------------------slider------------------
            Route::resource('slider',               'SliderController');
            // ------------------Structure------------------
            Route::resource('structure',               'StructureController');
        });



        //------------------------------- Admin Crud -------------------------------
        Route::resource('admin',               'AdminController');
    });
});
