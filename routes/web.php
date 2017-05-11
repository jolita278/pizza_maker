<?php


Route::group(['prefix' => 'pizza'], function () {
    Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);
    Route::post('/create', ['as' => 'app.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@store']);
    Route::get('/{id}', ['uses' => 'PMPizzaOrderController@show']);
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'pizzaOrders'], function () {
        Route::get('/', ['as' => 'app.admin.pizzaOrders.index', 'uses' => 'PMPizzaOrderController@adminIndex']);
        Route::get('/create', ['uses' => 'PMPizzaOrderController@adminCreate']);
        Route::post('/create', ['as' => 'app.admin.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPizzaOrderController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.pizzaOrders.edit', 'uses' => 'PMPizzaOrderController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPizzaOrderController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.pizzaOrders.delete', 'uses' => 'PMPizzaOrderController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'cheese'], function () {
        Route::get('/', ['as' => 'app.admin.admin.cheese.index', 'uses' => 'PMCheeseController@adminIndex']);
        Route::get('/create', ['uses' => 'PMCheeseController@adminCreate']);
        Route::post('/create', ['as' => 'app.admin.admin.cheese.create', 'uses' => 'PMCheeseController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMCheeseController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.cheese.edit', 'uses' => 'PMCheeseController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMCheeseController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.cheese.delete', 'uses' => 'PMCheeseController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'ingredients'], function () {
        Route::get('/', ['as' => 'app.admin.ingredients.index', 'uses' => 'PMIngredientsController@adminIndex']);
        Route::get('/create', ['uses' => 'PMIngredientsController@adminCreate']);
        Route::post('/create', ['as' => 'app.admin.ingredients.create', 'uses' => 'PMIngredientsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMIngredientsController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.ingredients.edit', 'uses' => 'PMIngredientsController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMIngredientsController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.ingredients.delete', 'uses' => 'PMIngredientsController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'pad'], function () {
        Route::get('/', ['as' => 'app.admin.pad.index', 'uses' => 'PMPadController@adminIndex']);
        Route::get('/create', ['as' => 'app.admin.pad.create', 'uses' => 'PMPadController@adminCreate']);
        Route::post('/create', ['uses' => 'PMPadController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPadController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.pad.edit', 'uses' => 'PMPadController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPadController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.pad.delete', 'uses' => 'PMPadController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', ['as' => 'app.admin.permissions.index', 'uses' => 'PMPermissionsController@adminIndex']);
        Route::get('/create', ['as' => 'app.admin.permissions.create', 'uses' => 'PMPermissionsController@adminCreate']);
        Route::post('/create', ['uses' => 'PMPermissionsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPermissionsController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.permissions.edit', 'uses' => 'PMPermissionsController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPermissionsController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.permissions.delete', 'uses' => 'PMPermissionsController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['as' => 'app.admin.roles.index', 'uses' => 'PMRolesController@adminIndex']);
        Route::get('/create', ['as' => 'app.admin.roles.create', 'uses' => 'PMRolesController@adminCreate']);
        Route::post('/create', ['uses' => 'PMRolesController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMRolesController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.roles.edit', 'uses' => 'PMRolesController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMRolesController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.roles.delete', 'uses' => 'PMRolesController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'app.admin.user.index', 'uses' => 'PMUsersController@adminIndex']);
        Route::get('/create', ['as' => 'app.admin.user.create', 'uses' => 'PMUsersController@adminCreate']);
        Route::post('/create', ['uses' => 'PMUsersController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMUsersController@adminShow']);
            Route::get('/edit', ['as' => 'app.user.edit', 'uses' => 'PMUsersController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMUsersController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.user.delete', 'uses' => 'PMUsersController@adminDestroy']);
        });
    });
});


