<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
	/**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get a string path for the circle.
     *
     * @return string
     */
    public function path()
    {
        return "/quotes/authors/circles/{$this->slug}";
    }

    /**
     * The authors that belong to the circle.
     */
    public function authors()
    {
        return $this->belongsToMany('App\QuoteAuthor', 'author_circle', 'circle_id', 'author_id');
    }

    /**
     * A circle has a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * A circle has children circles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function children() {
	    return $this->hasMany(Circle::class, 'primary');
	}
	public function parent() {
	    return $this->belongsTo(Circle::class, 'primary');
	}
}
