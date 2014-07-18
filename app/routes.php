<?php
Route::get('login', function()
{
    return View::make('login');
});

Route::get('bills', 'AuthController@bills');
Route::post('login','AuthController@login');
Route::get('logout','AuthController@logout');
Route::get('register', function()
{
    return View::make('register');
});
Route::post('register','AuthController@register');

Route::get('/', ['as' => 'home', function()
{
	return View::make('index')->with('year',\Carbon\Carbon::now()->year) ;
}])->before('auth');

Route::resource('LocalPurchases', 'LocalPurchasesController');
Route::get('/LocalPurchases/{id}/delete','LocalPurchasesController@destroy');


Route::post('generatexml','XmlController@process');


Route::resource('creditNotes', 'CreditNotesController');
Route::get('/creditNotes/{id}/delete','CreditNotesController@destroy');

Route::resource('DebitNotes', 'DebitNotesController');
Route::get('/DebitNotes/{id}/delete','DebitNotesController@destroy');
