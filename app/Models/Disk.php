<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Format;
use Illuminate\Database\Eloquent\Model;

class Disk extends Model
{
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function format(){    
        return $this->belongsTo(Format::class);
    }
}
