<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
//use App\Http\Controllers\RegisterController;
//use App\Http\Controllers\LoginController;
//use App\Http\Controllers\LogoutController;
//use App\Http\Controllers\PermissionsController;
//use App\Http\Controllers\PostsController;
//use App\Http\Controllers\UsersController;
//use App\Http\Controllers\RolesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    /**
     * Home Routes
    */

    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function(){
        /**
         * Register Routes
        */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
        */

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth', 'permission']], function(){
        /**
         * Logout Routes
        */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
        */
        Route::group(['prefix' => 'users'], function(){
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        /**
         * Properties Routes
        */
        Route::group(['prefix' => 'properties'], function(){
            Route::get('/', 'PropertyController@index')->name('properties.index');
            Route::get('/create', 'PropertyController@create')->name('properties.create');
            Route::post('/create', 'PropertyController@store')->name('properties.store');
            Route::get('/{property}/show', 'PropertyController@show')->name('properties.show');
            Route::get('/{property}/edit', 'PropertyController@edit')->name('properties.edit');
            Route::patch('/{property}/update', 'PropertyController@update')->name('properties.update');
            Route::delete('/{property}/delete', 'PropertyController@destroy')->name('properties.destroy');
        });

        /**
         * Facilities Routes
        */
        Route::group(['prefix' => 'facilities'], function(){
            Route::get('/', 'FacilityController@index')->name('facilities.index');
            Route::get('/create', 'FacilityController@create')->name('facilities.create');
            Route::post('/create', 'FacilityController@store')->name('facilities.store');
            Route::get('/{facility}/show', 'FacilityController@show')->name('facilities.show');
            Route::get('/{facility}/edit', 'FacilityController@edit')->name('facilities.edit');
            Route::patch('/{facility}/update', 'FacilityController@update')->name('facilities.update');
            Route::delete('/{facility}/delete', 'FacilityController@destroy')->name('facilities.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('accounts', AccountController::class);
        Route::resource('customers', CustomerController::class);
        Route::resource('vendors', VendorController::class);
        Route::resource('agents', AgentController::class);
        Route::resource('staffs', StaffController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('service_packages', ServicePackageController::class);
        Route::resource('cases', CaseController::class);
        Route::resource('quotations', QuotationController::class);
        Route::get('/submit_quotation/{id}', 'QuotationController@create_quotation')->name('quotations.submit_quotation');
        Route::resource('jobs', JobController::class);
        Route::resource('permissions', PermissionsController::class);
        Route::resource('tenants', TenantController::class);
        Route::resource('property_features', PropertyFeatureController::class);
        Route::resource('dashboard', DashboardController::class);
    });
});
