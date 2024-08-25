<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'nim', 'password', 'profile_picture'];

    public function newsComments(): HasMany
    {
        return $this->hasMany(NewsComment::class, 'student_id', 'id');
    }
}
