<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = [
        'name',
        'profile_picture',
        'skills',
    ];
}
