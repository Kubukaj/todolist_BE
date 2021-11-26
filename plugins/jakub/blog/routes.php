<?php

use Jakub\Blog\Controllers\Posts;

Route::group(['prefix' => '/api/v1'], function () {
    Route::apiResource('posts', Posts::class);
});

/*Route::post('/create', function() {
        $data = input();
        return post::create($data);
    });
    
    Route::get('/all', function() {
        return post::all();
    });
    
    Route::delete('/delete/{id}', function($id) {
        $post = post::findOrFail($id);
        $post->delete();
        return response('Vsetko bezi', 200);
    });





/*Route::post('/api/posts/create', function() {
    $data = input();
    return post::create($data);
});

Route::get('/api/posts/all', function() {
    return post::all();
});

Route::delete('/api/delete/{id}', function($id) {
    $post = post::findOrFail($id);
    $post->delete();
    return response('Vsetko bezi', 200);
});