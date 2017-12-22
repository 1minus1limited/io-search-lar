<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IoPlaylist extends Model
{

    public function videos()
    {
      return $this->hasMany('App\Video');
    }

    public function thumbnails()
    {
      return $this->hasMany('App\Thumbail');
    }

}
