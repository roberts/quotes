<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use Commentable;
    use Recommendable;
    
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
        return "/books/titles/{$this->id}";
    }

    /**
     * A book is assigned to an author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsToMany(BookAuthor::class, 'author_id');
    }

    /**
     * A book belongs to a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
