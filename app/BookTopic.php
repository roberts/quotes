<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTopic extends Model
{
    public $table = "topics";

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
     * Get a string path for the book topic.
     *
     * @return string
     */
    public function path()
    {
        return "/books/topics/{$this->slug}";
    }

    /**
     * A topic may have many books.
     *
     * @return \Illuminate\Database\Eloquent\Relations\ManyToMany
     */
    public function books()
    {
        //
    }

}
