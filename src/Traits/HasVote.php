<?php

namespace DraperStudio\Voteable\Traits;

use DraperStudio\Voteable\Models\Vote;

/**
 * Class HasVote.
 */
trait HasVote
{
    /**
     * @return mixed
     */
    public function votes()
    {
        return $this->morphMany(Vote::class, 'voteable');
    }
}
