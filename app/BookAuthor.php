<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    public $table = "authors";

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
     * Get a string path for the quote.
     *
     * @return string
     */
    public function path()
    {
        return "/books/{$this->slug}";
    }

    /**
     * An author may have many quotes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
    	return $this->hasManyThrough('App\Book', 'App\BookAuthorPivot'
            'author_id', 'book_id', 'id'
		);
    }

    //How to add a book to an author?
}
