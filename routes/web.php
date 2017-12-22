<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playlists', 'IoPlaylistsController@index');

Route::get('/playlist/{id}', 'IoPlaylistsController@playlist');

Route::post('/playlist', 'IoPlaylistsController@create');
