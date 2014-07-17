<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});
App::error(function(Illuminate\Database\Eloquent\ModelNotFoundException $exception, $code)
{
	return Redirect::home()->with('flash_message','Nothing Found there !!');
});
App::error(function(Laracasts\Validation\FormValidationException $exception, $code)
{
    return Redirect::back()->withInput()->withErrors($exception->getErrors());
});
App::error(function(Symfony\Component\HttpKernel\Exception\NotFoundHttpException $exception, $code)
{
    return View::make('notfound');
});

App::error(function(Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException $exception, $code)
{
    return View::make('notfound');
});
/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';
require app_path().'/helper.php';

function getMonth($number){

	
	switch($number){
	
		case 1: echo 'January'; break;
	    case 2: echo 'February'; break;
	    case 3: echo 'March'; break;
	    case 4: echo 'April'; break;
	    case 5: echo 'May'; break;
	    case 6: echo 'June'; break;
	    case 7: echo 'July'; break;
	    case 8: echo 'August'; break;
	    case 9: echo 'September'; break;
	    case 10: echo 'October'; break;
	    case 11: echo 'November'; break;
	    case 12: echo 'December'; break;
	    default : echo 'Month'; break;
	}
	
	
}


function deleteAllFiles(){
	
	$files  = File::files(public_path().'/xml');
	if($files){
		foreach($files as $file){
			File::delete($file);
	}
	}
}


