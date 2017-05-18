<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuoteAuthor extends Model
{
	public $table = "authors";
    
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
        return "/quotes/authors/{$this->slug}";
    }

    /**
     * A reply has an owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * An author may have many quotes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    /**
     * Add a quote to the author.
     *
     * @param $reply
     */
    public function addQuote($quote)
    {
        $this->quotes()->create($quote);
    }
    
}
