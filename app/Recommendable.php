<?php
namespace App;
trait Recommendable
{
    /**
     * Fetch all recommendations for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function recommendations()
    {
        return $this->morphMany(Recommendation::class, 'recommendable');
    }
    /**
     * Scope a query to records recommended by the given user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  User                                  $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRecommendedBy($query, User $user)
    {
        return $query->whereHas('recommendations', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });
    }
    /**
     * Determine if the model is recommended by the given user.
     *
     * @param  User $user
     * @return boolean
     */
    public function isRecommendedBy(User $user)
    {
        return $this->recommendations()
            ->where('user_id', $user->id)
            ->exists();
    }
    /**
     * Have the authenticated user recommend the model.
     *
     * @return void
     */
    public function recommend()
    {
        $this->recommendations()->save(
            new Recommendation(['user_id' => auth()->id()])
        );
    }
}