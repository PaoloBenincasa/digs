<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;

class Disk extends Model
{
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
