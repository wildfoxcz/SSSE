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

    public function getShortDescriptionAttribute()
    {
        $result = "";
        $input = strip_tags($this->description);
        if(strlen( $input) > 50) {
            $result = explode( "\n", wordwrap( $input, 50));
            $result = $result[0] . '...';
        }
        return $result;
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
