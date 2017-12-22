<?php

Route::get('/playlists', 'IoPlaylistsController@index');
Route::get('/playlist/{id}', 'IoPlaylistsController@playlist');
Route::post('/playlist', 'IoPlaylistsController@create');
