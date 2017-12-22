<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IoPlaylistTest extends TestCase
{
  public function testItFetchesAllPlaylists()
  {
    $this->get('/playlists')->assertStatus(200);
    $this->json('GET', '/playlists')
         ->assertJsonStructure([
           'playlists' => [
             '*' => [
               'id',
               'title',
               'created_at',
               'updated_at'
             ]
           ]
         ]);
  }

  public function testItFetchesASinglePlaylist()
  {
    $response = $this->get('/playlist/61')->assertStatus(200);
    $this->json('GET', '/playlist/61')
         ->assertJsonStructure([
           'id',
           'title',
           'created_at',
           'updated_at',
           'videos' => [
             '*' => [
               'id',
               'title',
               'video_id',
               'duration',
               'io_playlist_id',
               'created_at',
               'updated_at'
             ]
           ]
         ]);
  }
}
