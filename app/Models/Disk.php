<?php

namespace App\Models;

use App\Models\User;
use App\Models\Genre;
use App\Models\Format;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Disk extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'artist', 'year', 'price', 'description', 'user_id', 'format_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function format(){    
        return $this->belongsTo(Format::class);
    }
}
