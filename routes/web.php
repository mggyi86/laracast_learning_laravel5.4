<?php



// dd(resolve('App\Billing\Stripe'));

/*use App\Task;

App::bind('App\Billing\Stripe', function() {
	return new \App\Billing\Stripe(config('services.stripe.secret'));
});

$stripe = App::make('App\Billing\Stripe');

dd($stripe);*/

/*Route::get('/tasks', function(){
	// $tasks = DB::table('tasks')->latest()->get();
	$tasks = Task::all();
	return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id){
	// $task = DB::table('tasks')->find($id);
	$task = Task::find($id);
	return view('tasks.show', compact('task'));
});*/

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/', 'PostController@index')->name('home');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{post}', 'PostController@show');

Route::post('/post/{post}/comment', 'CommentController@store');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('post/tag/{tag}', 'TagController@index');


