<?php
Route::post('queue/post', function () {return Queue::marshal();});

Route::api(['version'=>'v1','prefix'=>'api'],function() {
    include('routes/api_routes.php');
});
Route::group(['prefix' => 'admin'], function () {
    include('routes/admin_routes.php');
});
Route::group(['namespace'=>'Controllers\Frontend'],function(){
    include('routes/frontend_routes.php');
});