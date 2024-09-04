<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model represents class, its structure is defined in create_migration
class Job extends Model {
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];
}