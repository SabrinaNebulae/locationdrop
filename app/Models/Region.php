<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }
}
