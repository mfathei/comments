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

/**
 * we don't need to use Laravel Blade
 * we will reaturn a PHP file that will hold ALL of our Angular content
 * see The "Where to Place Your Angular Files" below to see ideas on how to structure your app
 */
Route::get('/', function () {
    return view('index');
});


// API Routes
Route::group(array('prefix' => 'api'), function () {
    /**
     * since we will be using this just for CRUD, we don't need create and edit
     * Angular will handle both of those forms
     * this ensures a user can't access api/create or api/edit when there's nothing
     */
    Route::resource('comments', 'CommentController', array('only' => array('index', 'store', 'destroy')));
}
);


// CATCH ALL ROUTES
/**
 * All routes that are not home or api will be redirected to the frontend
 * This will allow angular to route them
 */
// in Handler.php