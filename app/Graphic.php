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
     * Get a string path for the graphic.
     *
     * @return string
     */
    public function path()
    {
        return "https://storage.googleapis.com/pic.tipoff.com/{$this->path_prefix}/{$this->filename}";
    }

    /**
     * Get all of the owning graphicable models.
     */
    public function graphicable()
    {
        return $this->morphTo();
    }

    
}
