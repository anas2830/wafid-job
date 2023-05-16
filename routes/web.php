<?php
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\IndexController;

//password reset
Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');


Route::get('/', 'IndexController@index');
Route::get('processing-candidate', [IndexController::class, 'processingCandidate'])->name('processing-candidate');
Route::get('successfull-candidate', [IndexController::class, 'successfullCandidate'])->name('successfull-candidate');
Route::get('/about', function(){
    return view('website.about');
});

Route::get('/register', 'Auth\RegisterController@create')->name('register');
Route::post('/sign-up', 'Auth\RegisterController@signUp')->name('sign-up');
// user after login
Auth::routes([
    'verify' => true
]);

Route::get('/home', 'IndexController@index')->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

    Route::group(['middleware' => ['verified']], function() {
        Route::get('/user-dashboard', 'HomeController@dashboard')->name('user-dashboard');
        Route::post('/user-dashboard', 'HomeController@dashboardUpdate')->name('user-dashboard');

        Route::get('/user-profile', 'HomeController@userProfile')->name('user-profile');
        Route::post('/profileUpdate', 'HomeController@profileUpdate')->name('profileUpdate');
    });
});



Route::get('/login/admin', 'AdminLoginController@showAdminLoginForm');
Route::post('/login/admin', 'AdminLoginController@adminLogin');
//after admin login
Route::group(['middleware' => 'auth:admin'], function () {
    //Route::view('/admin', 'admin');
    Route::get('/admin', 'SuperAdmin\HomeController@index')->name('admin');
    Route::get('/dashboard', 'SuperAdmin\HomeController@index')->name('dashboard');

    Route::get('/user-list', 'SuperAdmin\HomeController@userList')->name('user-list');
    Route::delete('/delete-user/{id}', 'SuperAdmin\HomeController@deleteUser')->name('delete-user');
    Route::get('/user-document/{id}', 'SuperAdmin\HomeController@userDocument')->name('user-document');

    //website
    Route::get('/header-seetings', 'SuperAdmin\WebsiteController@headerSeetings')->name('header-seetings');
    Route::post('/header-seetings', 'SuperAdmin\WebsiteController@headerSeetingsSave')->name('header-seetings');
    Route::get('/about-us', 'SuperAdmin\WebsiteController@aboutUs')->name('about-us');
    Route::post('/about-us', 'SuperAdmin\WebsiteController@aboutUsSave')->name('about-us');
    Route::resource('offers', 'SuperAdmin\OffersController');
    Route::resource('services', 'SuperAdmin\ServiceController');
    Route::resource('easy-steps', 'SuperAdmin\EasyStepsController');

    //handle profile
    Route::get('/adminProfile', 'SuperAdmin\HomeController@adminProfile')->name('adminProfile');
    Route::post('/adminProfileUpdate', 'SuperAdmin\HomeController@adminProfileUpdate')->name('adminProfileUpdate');
});
