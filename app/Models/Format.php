<?php

namespace App\Models;

use App\Models\Disk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Format extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected function disks(){
        return $this->hasMany(Disk::class);
    }
    
}
