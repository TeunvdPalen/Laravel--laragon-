<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inschrijving extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function honden()
    {
        return $this->belongsToMany(Hond::class);
    }

    public function cursus()
    {
        return $this->hasMany(Cursus::class);
    }
}