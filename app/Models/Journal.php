<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description',
    ];
    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }
}
