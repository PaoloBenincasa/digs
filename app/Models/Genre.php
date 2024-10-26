<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function disks(){
        return $this->belongsToMany(Disk::class);
    }
}
