<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{

    // Mass Asignment is blocked by default in Laravel.
    // 👇 We can enable mass assignment for safe attributes by marking them as "fillable"
    protected $fillable = [
        'message'
    ];

    use HasFactory;
}
