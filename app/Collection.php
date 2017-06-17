<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
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
     * Get a string path for the collection.
     *
     * @return string
     */
    public function path()
    {
        return "{$this->creator->path}/collections/{$this->slug}";
    }

    /**
     * A collection has a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
