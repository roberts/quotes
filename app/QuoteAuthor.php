<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\QuoteSubmission;

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
     * An author may have many deatils (only use the recent one).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany(AuthorDetail::class, 'author_id');
    }

    /**
     * Add bio and other details to the author.
     *
     * @param $reply
     */
    public function addDetail($request)
    {
        $this->details()->create([
                'full_name' => $request->full_name,
                'birth' => $request->birth ?: null,
                'death' => $request->death ?: null,
                'wikipedia' => $request->wikipedia ?: null,
                'twitter' => $request->twitter ?: null,
                'facebook' => $request->facebook ?: null,
                'instagram' => $request->instagram ?: null,
                'linkedin' => $request->linkedin ?: null,
                'intro' => $request->intro ?: null,
                'known_for' => $request->known_for ?: null,
                'bio' => $request->bio ?: null,
                'quotes_summary' => $request->quotes_summary ?: null,
                'books_summary' => $request->books_summary ?: null,
                'created_by' => auth()->id(),
                'created_at' => Carbon::now()
            ]);
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
    public function addSubmission($quote_text)
    {
        $this->quotesubmissions()->create([
                'quote_text' => $quote_text,
                'created_by' => auth()->id(),
                'created_at' => Carbon::now()
            ]);
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

    /**
     * Return 10 trending authors to display in quotes section sidebar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public static function trending()
    {
        return static::whereIn('id', [4, 5, 6, 7, 9, 10, 22])->inRandomOrder()->limit(10)->get();
    }
    
}
