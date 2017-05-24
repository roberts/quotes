<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAuthorPivot extends Model
{
    public $table = "book_authors";
    
    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * A row has an author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(BookAuthor::class, 'author_id');
    }

    /**
     * A row has a book.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    /**
     * A row has a book contribution type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bookcontribution()
    {
        return $this->belongsTo(BookContribution::class, 'contribution_id');
    }

    //How to add a book to an author?
}
