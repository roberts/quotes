<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graphic extends Model
{

    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get all of the owning graphicable models.
     */
    public function graphicable()
    {
        return $this->morphTo();
    }

    /**
     * Get a string path for the quote.
     *
     * @return string
     */
    public function path()
    {
        return "/quotes/{$this->author->slug}/{$this->id}";
    }

    
}
