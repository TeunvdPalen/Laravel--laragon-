<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hond extends Model
{
    use HasFactory;

    public function hond()
    {
        return $this->belongsTo(User::class);
    }
}