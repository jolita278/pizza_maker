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


Route::group(['prefix' => 'pizza'], function () {
    Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);
    Route::post('/create', ['as' => 'app.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@store']);
    Route::get('/{id}', ['uses' => 'PMPizzaOrderController@show']);
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'pizzaOrders'], function () {
        Route::get('/', ['as' => 'app.pizzaOrders.index', 'uses' => 'PMPizzaOrderController@index']);
        Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);
        Route::post('/create', ['as' => 'app.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@store']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPizzaOrderController@show']);
            Route::get('/edit', ['as' => 'app.pizzaOrders.edit', 'uses' => 'PMPizzaOrderController@edit']);
            Route::post('/edit', ['uses' => 'PMPizzaOrderController@update']);
            Route::delete('/', ['as' => 'app.pizzaOrders.delete', 'uses' => 'PMPizzaOrderController@destroy']);
        });
    });
    Route::group(['prefix' => 'cheese'], function () {
        Route::get('/', ['as' => 'app.cheese.index', 'uses' => 'PMCheeseController@index']);
        Route::get('/create', ['uses' => 'PMCheeseController@create']);
        Route::post('/create', ['as' => 'app.cheese.create', 'uses' => 'PMCheeseController@store']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMCheeseController@show']);
            Route::get('/edit', ['as' => 'app.cheese.edit', 'uses' => 'PMCheeseController@edit']);
            Route::post('/edit', ['uses' => 'PMCheeseController@update']);
            Route::delete('/', ['as' => 'app.cheese.delete', 'uses' => 'PMCheeseController@destroy']);
        });
    });
    Route::group(['prefix' => 'ingredients'], function () {
        Route::get('/', ['as' => 'app.ingredients.index', 'uses' => 'PMIngredientsController@index']);
        Route::get('/create', ['uses' => 'PMIngredientsController@create']);
        Route::post('/create', ['as' => 'app.ingredients.create', 'uses' => 'PMIngredientsController@store']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMIngredientsController@show']);
            Route::get('/edit', ['as' => 'app.ingredients.edit', 'uses' => 'PMIngredientsController@edit']);
            Route::post('/edit', ['uses' => 'PMIngredientsController@update']);
            Route::delete('/', ['as' => 'app.ingredients.delete', 'uses' => 'PMIngredientsController@destroy']);
        });
    });
    Route::group(['prefix' => 'pad'], function () {
        Route::get('/', ['as' => 'app.pad.index', 'uses' => 'PMPadController@index']);
        Route::get('/create', ['as' => 'app.pad.create', 'uses' => 'PMPadController@create']);
        Route::post('/create', ['uses' => 'PMPadController@store']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPadController@show']);
            Route::get('/edit', ['as' => 'app.pad.edit', 'uses' => 'PMPadController@edit']);
            Route::post('/edit', ['uses' => 'PMPadController@update']);
            Route::delete('/', ['as' => 'app.pad.delete', 'uses' => 'PMPadController@destroy']);
        });
    });
    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', ['as' => 'app.permissions.index', 'uses' => 'PMPermissionsController@index']);
        Route::get('/create', ['as' => 'app.permissions.create', 'uses' => 'PMPermissionsController@create']);
        Route::post('/create', ['uses' => 'PMPermissionsController@store']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPermissionsController@show']);
            Route::get('/edit', ['as' => 'app.permissions.edit', 'uses' => 'PMPermissionsController@edit']);
            Route::post('/edit', ['uses' => 'PMPermissionsController@update']);
            Route::delete('/', ['as' => 'app.permissions.delete', 'uses' => 'PMPermissionsController@destroy']);
        });
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['as' => 'app.roles.index', 'uses' => 'PMRolesController@index']);
        Route::get('/create', ['as' => 'app.roles.create', 'uses' => 'PMRolesController@create']);
        Route::post('/create', ['uses' => 'PMRolesController@store']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMRolesController@show']);
            Route::get('/edit', ['as' => 'app.roles.edit', 'uses' => 'PMRolesController@edit']);
            Route::post('/edit', ['uses' => 'PMRolesController@update']);
            Route::delete('/', ['as' => 'app.roles.delete', 'uses' => 'PMRolesController@destroy']);
        });
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'app.user.index', 'uses' => 'PMUsersController@index']);
        Route::get('/create', ['as' => 'app.user.create', 'uses' => 'PMUsersController@create']);
        Route::post('/create', ['uses' => 'PMUsersController@store']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMUsersController@show']);
            Route::get('/edit', ['as' => 'app.user.edit', 'uses' => 'PMUsersController@edit']);
            Route::post('/edit', ['uses' => 'PMUsersController@update']);
            Route::delete('/', ['as' => 'app.user.delete', 'uses' => 'PMUsersController@destroy']);
        });
    });
});


