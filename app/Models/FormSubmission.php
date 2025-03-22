<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'form_submissions';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'gender',
        'address',
        'skills',
        'resume',
        'profile_picture',
        'website',
        'password',
        'subscribe',
        'contact_method',
        'preferred_time',
        'user_id',
    ];
}
