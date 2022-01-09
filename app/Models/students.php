<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'password', 'studentID', 'faculty', 'course', 'sem_year', 'address', 'phone', 'email', 'sv_name'
    ];
}
