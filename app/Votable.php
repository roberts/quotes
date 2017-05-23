<?php
namespace App;
trait Votable
{
    /**
     * Fetch all votes for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function votes()
    {
        return $this->morphMany(Vote::class, 'votable');
    }
    /**
     * Scope a query to records voted by the given user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  User                                  $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVotedBy($query, User $user)
    {
        return $query->whereHas('votes', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });
    }
    /**
     * Determine if the model is voted for by the given user.
     *
     * @param  User $user
     * @return boolean
     */
    public function isVotedBy(User $user)
    {
        return $this->votes()
            ->where('user_id', $user->id)
            ->exists();
    }
    /**
     * Have the authenticated user vote for the model.
     *
     * @return void
     */
    public function vote()
    {
        $this->votes()->save(
            new Vote(['user_id' => auth()->id()])
        );
    }
}