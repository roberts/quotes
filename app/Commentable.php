<?php
namespace App;
trait Commentable
{
    /**
     * Fetch all comments for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    /**
     * Have the authenticated user comment the model.
     *
     * @return void
     */
    public function comment()
    {
        $this->comments()->save(
            new Comment(['user_id' => auth()->id()])
        );
    }
}