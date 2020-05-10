<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'PagesController@index');


//ABOUT PAGE ROUTES STARTS HERE
Route::get('/about/{about}/edit', 'AdminPanelController@EditAboutProfile');

Route::patch('/about/{about}', 'AdminPanelController@UpdateAboutProfile');

//EDUCATION PAGE ROUTE STARTS  HERE
Route::get('/education/create','AdminPanelController@CreateEducationProfile');
Route::post('/education', 'AdminPanelController@StoreEducationProfile');
Route::get('/education/{education}/edit', 'AdminPanelPagesController@EditEducationProfile');
Route::patch('/education/{education}', 'AdminPanelPagesController@UpdateEducationProfile');

//EXPERIENCE PAGE ROUTES STARTS HERE
Route::get('/experience/create', 'AdminPanelController@CreateExperienceProfile');
Route::post('/experience', 'AdminPanelController@StoreExperienceProfile');
Route::get('/experience/{experience}/edit', 'AdminPanelController@EditExperienceProfile');
Route::patch('/experience/{experience}', 'AdminPanelController@UpdateExperienceProfile');


// PORTFOLIO PAGE ROUTES START HERE
Route::get('/portfolio/create', 'AdminPanelController@CreatePortfolioProfile');
Route::post('/portfolio', 'AdminPanelController@StorePortfolioProfile');


// CONTACT PAGE ROUTES START HERE
Route::get('/contactinfo', 'PagesController@ContactInfo');
Route::post('/contact', 'PagesController@StoreContact');



// ADMIN PANEL ROUTES START HERE
Route::get('/dashboard', 'AdminPanelController@adminindex');
Route::get('/admin', 'AdminPanelController@admin')->name('admin');
Route::post('/admin', 'AdminPanelController@AdminLogin');
Route::get('/dashboard', 'AdminPanelController@dashboard')->name('dashboard');
Route::post('/signout', 'AdminPanelController@AdminSignout');
Route::get('/editprofile', 'AdminPanelController@AdminEditProfile');



