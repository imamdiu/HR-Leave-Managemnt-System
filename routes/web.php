<?php
Route::get('/', function () {
    return redirect()->route('admin.login');
});

// Route::group(['namespace' => 'Admin'], function () {
// 	Route::resource('admin/post','PostContoller');
// 	// //Post routes
//  //    Route::resource('admin/post', 'PostController');
// });

Route::get('admin/home', function () {
    return view('admin.home');
});

Route::group(['namespace' => 'Admin'], function () {
	
	Route::get('admin/home','HomeController@index')->name('admin.home');
	//Post Routes
	Route::resource('admin/post', 'PostController');
	//User Routes
	Route::resource('admin/user', 'UserController');
	//Role Routes
	Route::resource('admin/role', 'RoleController');

	//PersonalInfo Routes
	Route::resource('admin/personalInfo', 'PersonalInfoController');
	//ContactlInfo Routes
	Route::resource('admin/contactInfo', 'ContactInfoController');
	//ContactlInfo Routes
	Route::resource('admin/imageInfo', 'ImageInfoController');

	// Admin Login...
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
