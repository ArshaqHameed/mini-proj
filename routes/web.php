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

use App\Http\Controllers\NewapkController;
use App\Newapk;

Route::get('/', function () {
    return view('welcome');
});

Route::get('newapk', function () {
    return view('newapk');
});

Route::get('appealapk', function () {
    return view('appealapk');
});

Route::get('editapk', function () {
    return view('editapk');
});


Route::get('newbill', function () {
    return view('newbill');
});

Route::get('updateapk', function () {
    return view('updateapk');
});

Route::get('appealfornewapk', function () {
    return view('appealfornewapk');
});

Route::get('billapk', function () {
    return view('billapk');
});

Route::get('appealbill', function () {
    return view('appealbill');
});

Route::get('secbill', function () {
    return view('secbill');
});
//Route::get('editapk','ViewController@index')->name('view');

Route::get('admin',['middleware' => 'isadmin', function () {
    return view('admin');
}]);

Route::get('user',['middleware' => 'auth', function () {
    return view('user');
}]);

Auth::routes(['register' => false]);


Route::post('/newapks/store', 'NewapkController@store');

Route::get('/newapk/datacollection','NewapkController@index')->name('newapk.store');
Route::post('/newapk/check','NewapkController@check')->name('newapk.check');

//Route::post('/newapk/checkmobile','NewapkController@checkmobile')->name('newapk.checkmobile');

Route::get('newapk','DynamicController@index');

Route::get('/newapk/fetch','DynamicController@fetch')->name('DynamicController.fetch');
Route::get('newapk','Newapk@Controller@create')->name('newapk');

Route::get('/newapk/create', 'NewapkController@create')->name('newapk.create');
Route::post('newapk', 'NewapkController@store')->name('newapk.store');

Route::get('editapk','NewapkController@index');

Route::get('editapk','NewapkController@index')->name('newapk.edit');
Route::get('updateapk/{ration}','NewapkController@edit')->name('newapk.edit');
//Route::resource('billapk', 'BillController');
//Route::get('billapk/{ration}','BillController@show')->name('billapk.show');
Route::get('billapk','BillController@index')->name('bill.index');
Route::get('/billapk/storebill/{ration}', 'BillController@storebill')->name('billapk.storebill');
Route::get('gen','BillController@viewbill')->name('billapk.gen');
Route::get('/billapk/pdf', 'BillController@pdf');

// Route::any ( '/billapk', function () {
//     $q = Input::get ( 'q' );
//     $user = Newapk::where ( 'ration', 'LIKE', '%' . $q . '%' )->orWhere ( 'name', 'LIKE', '%' . $q . '%' )->get ();
//     if (count ( $user ) > 0)
//         return view ( 'billapk' )->withDetails ( $user )->withQuery ( $q );
//     else
//         return view ( 'billapk' )->withMessage ( 'No Details found. Try to search again !' );
// } );

Route::get('user','BillController@de');
Route::resource('newapk', 'NewapkController');

Route::get('search','AppealController@search');
Route::get('appealfornewapk','AppealController@store')->name('appeal.store');
Route::get('appealbill','AppealController@view')->name('appeal.view');
Route::get('billappeal.index','AppealController@index')->name('billappeal.index');
Route::get('/billappeal/storebill/{ration}', 'AppealController@storebill')->name('billappeal.storebill');

Route::get('secbill','AppealController@viewdata')->name('appealbill.gen');

Route::get('/billappeal/pdf1', 'AppealController@pdf1')->name('secpdf');
Route::resource('appeal', 'AppealController');




