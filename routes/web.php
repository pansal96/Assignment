<?php

use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});
route::get('/login',function(){
    return view('login');
});

route::get('/location',function(){
    return view('Locationpage');

});

Route::get('/Add', function () {
 //$data=App\models\Location::all();

  return view('Addlocation');//->with('Addlocation',$data);
});




route::post('/savetask','lacationcontroller@savelocations');


route::get('/deletetask/{id}',[locationcontroller::class,'delete']);
route::get('/updatetask/{id}',[locationcontroller::class,'update']);

route::POST('/updatetasks',[locationcontroller::class,'updateslocation']);