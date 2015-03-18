<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('', function()
{
	return View::make('index');
});

Route::controller('users', 'UserController');

Route::controller('quizzes', 'QuizController');



Route::get('quizzes', function()
{
    return View::make('quizzes/quizzes');
});





/*
Route::get('quizzes/{id?}', function($quizid = 1)
{
    if (is_numeric($quizid))
    {
        $tag = Tag::find($quizid);
        return $tag->quizzes;
    }
    else
    {
        return "Quiz not found";
    }
}*/
