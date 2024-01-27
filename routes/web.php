<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController; 
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\DashboardController; 
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



route::get('/',[ItemsController::class,'ShowItemGroup'])->name('welcome');
//showproduct+addcart
route::get('/showproduct/{id}',[ItemsController::class,'Showproduct'])->name('showproduct');
route::get('/addtocart/{id}',[ItemsController::class,'AddtoCart'])->name('addtocart');

route::get('/checkout',[ItemsController::class,'Checkout'])->name('checkout');

//DashboardCpanel
route::get('/cpanel',[ItemsController::class,'DisplayItems'])->name('controlpanel');
route::get('/additem',[ItemsController::class,'displayadditems'])->name('additem');
route::get('/addgritem',[ItemsController::class,'displayadditemsgroup'])->name('addgritem');
route::get('/invoice',[ItemsController::class,'invoice'])->name('invoice');
route::get('/logout',[ItemsController::class,'logout'])->name('logout');

Auth::routes();


//itemgroup
route::get('/itemgroup',[ItemsController::class,'GetItemsGroup'])->name('itemgroup');
route::post('/save',[ItemsController::class,'SaveGroupsItems'])->name('save');
route::get('/del/{x}',[ItemsController::class,'del'])->name('del');
route::get('/edit/{x}',[ItemsController::class,'Edit'])->name('edit');
route::post('/update',[ItemsController::class,'Update'])->name('update');



//item
route::get('/item',[ItemsController::class,'GetItem'])->name('item');
route::post('/save-item',[ItemsController::class,'SaveItem'])->name('save-item');
route::get('/Delitem/{x}',[ItemsController::class,'Delitem'])->name('Delitem');
route::get('/edititems/{x}',[ItemsController::class,'Edititem'])->name('Edititem');
route::post('/Updateitem',[ItemsController::class,'Updateitem'])->name('Updateitem');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

