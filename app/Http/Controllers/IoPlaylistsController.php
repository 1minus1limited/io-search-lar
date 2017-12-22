<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IoPlaylist;

class IoPlaylistsController extends Controller
{

  public function index (IoPlaylist $playlist)
  {
    $playlists = $playlist::get();
    return response()->json(['playlists' => $playlists]);
  }

  public function playlist (Request $request, $id, IoPlaylist $playlist)
  {
    $playlist = $playlist::with('Videos')->find($id);
    return response()->json($playlist);
  }

  public function create (Request $request)
  {
    $playlist = new IoPlaylist;
    $playlist->title = $request->title;
    $playlist->save();
    return response()->json(['response' => 'Playlist added']);
  }

}
