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

Route::get('/', [
    'as'   => 'root_path',
    'uses' => 'HomeController@index'
]);

Route::get('{rubrics}', [
    'as'   => 'rubric.all',
    'uses' => 'RubricController@all'
]);

Route::get('{rubrics}/{start_at}/{id}-{slug}', [
    'as'   => 'rubric.show',
    'uses' =>'RubricController@show'
])->where(['id' => '[0-9]+', 'slug' => '[a-zA-Z0-9- ]+', 'start_at' => '[0-9-]+']);


Route::group(['prefix' => 'auth'], function (){

    Route::get('{login}', [
        'as'   => 'authentic',
        'uses' => "AuthenticController@authentic"
    ]);
});

Route::group(['domain' => '127.0.0.1/abonnement.laRoyaleNews/public'], function (){

    Route::group(['prefix' => 'members'], function(){

<<<<<<< HEAD
    Route::get('checkoutStandard', [
        'as'   => 'members.checkoutStandard',
        'uses' => 'MemberController@checkoutStandard'
    ]);

    Route::get('checkoutPremium', [
        'as'   => 'members.checkoutPremium',
        'uses' => 'MemberController@checkoutPremium'
    ]);
=======
        Route::get('abonnement', [
            'as'   => 'members.abonnement',
            'uses' => 'MemberController@abonnement'
        ]);

        Route::get('checkout_standard', [
            'as'   => 'members.checkout_standard',
            'uses' => 'MemberController@checkout_standard'
        ]);

        Route::get('checkout_premium', [
            'as'   => 'members.checkout_premium',
            'uses' => 'MemberController@checkout_premium'
        ]);

        Route::get('contacts', [
            'as'   => 'members.contacts',
            'uses' => 'MemberController@contacts'
        ]);
>>>>>>> 8c3e51fedab6bd01e3dd4e367bc96993bb1a2be6


    });

});








