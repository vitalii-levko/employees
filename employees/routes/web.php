<?php

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

Route::get('/', 'PagesController@home');

Route::get('/details', 'PagesController@details')->middleware('auth');

Route::get('/contact', 'PagesController@contact');

Route::resource('companies', 'CompaniesController');

Route::resource('employees', 'EmployeesController');
// Route::get('/companies', 'CompaniesController@index');

// Route::get('/', function () {
// 	$tasks = [
// 		'Foo',
// 		'Bar',
// 		'Baz'
// 	];

// 	return view('welcome')->with([
// 		'tasks' => $tasks,
// 		'foo' => 'FOO'
// 	]);

// 	// return view('welcome')->withTasks($tasks)->withFoo('FOO');

// 	// return view('welcome', [
// 	// 	'tasks' => $tasks,
// 	// 	'foo' => 'FOO'
// 	// ]);
// });

// Route::get('/contact', function () {
// 	return view('contact');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
