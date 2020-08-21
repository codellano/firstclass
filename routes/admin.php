<?php

Auth::routes();


Route::namespace('Admin')
    ->prefix('admin')
    ->group(function() {

    Route::get('/posts/index', 'PostsController@index')->name('admin.posts.index');

});
