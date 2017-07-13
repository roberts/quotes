<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuoteAuthor extends Model
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
        return "/quotes/{$this->slug}";
    }

    /**
     * A reply has a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
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
        return $this->hasMany(Quote::class, 'author_id');
    }

    /**
     * An author may have many quote submissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotesubmissions()
    {
        return $this->hasMany(QuoteSubmission::class, 'author_id');
    }

    /**
     * Add a quote submission to the author.
     *
     * @param $reply
     */
    public function addSubmission($quotesubmission)
    {
        $this->quotesubmissions()->create($quotesubmission);
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
