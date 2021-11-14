<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function fields()
    {
        return $this->belongsToMany(Field::class);
    }
}
