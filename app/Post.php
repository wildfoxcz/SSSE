<?php

namespace App;

use App\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    // --- Traits ---
    use Sluggable;

    // --- Laravel settings ---
    protected $guarded = ['id'];

    // --- Eloquent relationships ---
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ---
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
