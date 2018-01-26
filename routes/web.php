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

Route::get('/', function () {
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', function () {
	// hardcoded
	// $tasks = [
	// 	'Clean the house',
	// 	'Finish my screencast',
	// 	'Go to the store'
	// ];
	
	// Get from DB
	$tasks = DB::table('tasks')->latest()->get(); 
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id) {
	$task = DB::table('tasks')->find($id); 
    return view('tasks.show', compact('task'));
});

Route::get('about', function () {
    return view('about');
});