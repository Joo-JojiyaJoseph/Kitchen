<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\IngredientController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/Apilogin', [AuthController::class, 'loginUser']);
Route::group(['middleware' => ['auth:sanctum','auth.admin']], function () {
Route::post('/Apilogout', [AuthController::class, 'logoutUser']);

// ingredients
Route::get('/ViewIngredient', [IngredientController::class, 'viewingredient']);
Route::post('/AddIngredient', [IngredientController::class, 'addingredient']);
Route::post('/EditIngredient/{id}', [IngredientController::class, 'editingredient']);
Route::delete('/DeleteIngredient/{id}', [IngredientController::class, 'deleteingredient']);
Route::post('/Add_Quantity_Ingredient/{id}', [IngredientController::class, 'add_quantity_ingredient']);

// Food
Route::get('/ViewFood', [FoodController::class, 'viewfood']);
Route::post('/AddFood', [FoodController::class, 'addfood']);
Route::post('/EditFood', [FoodController::class, 'editfood']);
Route::delete('/DeleteFood', [FoodController::class, 'deletefood']);
Route::post('/Add_Quantity_food', [FoodController::class, 'add_quantity_food']);


// Order
Route::get('/ViewOrder', [OrderController::class, 'vieworder']);
Route::post('/AddOrder', [OrderController::class, 'addorder']);
Route::post('/EditOrder', [OrderController::class, 'editorder']);
Route::delete('/DeleteOrder', [OrderController::class, 'deleteorder']);

// Customer
Route::get('/ViewCustomer', [CustomerController::class, 'viewcustomer']);
Route::post('/AddCustomer', [CustomerController::class, 'addcustomer']);
Route::post('/EditCustomer', [CustomerController::class, 'editcustomer']);
Route::delete('/DeleteCustomer', [CustomerController::class, 'deletecustomer']);

 Route::post('/Apiregister', [AuthController::class, 'createUser']);
});



Route::group(['middleware' => ['auth:sanctum','auth.kitchen']], function () {
    // Your kitchen-only routes go here
});

Route::group(['middleware' => ['auth:sanctum','auth.pos']], function () {
    // Your pos-only routes go here
});
