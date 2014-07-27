<?php
Blade::extend(function($value)
{
    return preg_replace('/(\s*)@(break|continue)(\s*)/', '$1<?php $2; ?>$3', $value);
});
//Event::listen('illuminate.query',function($query){
//   var_dump($query);
//});
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

Route::resource('LocalSales', 'LocalSalesController');
Route::get('/LocalSales/{id}/delete','LocalSalesController@destroy');

Route::resource('InterStatePurchases', 'InterStatePurchasesController');
Route::resource('/InterStatePurchases/{id}/delete', 'InterStatePurchasesController@destroy');

Route::resource('InterStateSales', 'InterStateSalesController');
Route::resource('/InterStateSales/{id}/delete', 'InterStateSalesController@destroy');

