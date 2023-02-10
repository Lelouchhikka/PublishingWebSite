<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'=>'require',
        'experience'=>'require',
        'description'=>'require',
    ];
    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }
}
