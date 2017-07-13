<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuoteAuthor;

class QuoteSubmission extends Model
{
	public $timestamps = false;
	
    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * A quote submission is assigned to an author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(QuoteAuthor::class, 'author_id');
    }

    /**
     * A quote submission belongs to a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }


}
