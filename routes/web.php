<?php

use App\Task;

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
	//$tasks = DB::table('tasks')->latest()->get();
	
	$tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id) {
	$task = Task::find($id);
    return view('tasks.show', compact('task'));
});

Route::get('about', function () {
    return view('about');
});