<?php

use Jakub\Todolist\Controllers\Tasks;
use Jakub\Todolist\Controllers\Zoznams;

Route::group(['prefix' => 'api/v2'], function () {
    Route::apiResource('tasks', Tasks::class);
    Route::apiResource('zoznams', Zoznams::class);
});

    /*Route::post('/create', function() {
        $data = input();
        return post::create($data);
    });
    
    Route::get('/all', function() {
        return post::all();
    });
    
    Route::delete('/delete/{id}', function($id) {
        $task = post::findOrFail($id);
        $task->delete();
        return response('Vsetko bezi', 200);
    });