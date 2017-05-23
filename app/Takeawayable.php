<?php
namespace App;
trait Takeawayable
{
    /**
     * Fetch all takeaways for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function takeaways()
    {
        return $this->morphMany(Takeaway::class, 'takeawayable');
    }
    /**
     * Have the authenticated user leave a takeaway for the model.
     *
     * @return void
     */
    public function takeaway()
    {
        $this->takeaways()->save(
            new Takeaway(['user_id' => auth()->id()])
        );
    }
}