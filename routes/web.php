<?php

Route::get('/', 'PostsController@index');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('forms', function(){
    return view('forms');
});

