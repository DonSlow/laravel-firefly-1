<?php

namespace Firefly\Policies;

use Firefly\Discussion;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiscussionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function view($user, Discussion $discussion)
    {
        return true;
    }

    /**
     * Determine whether the user can create discussions.
     *
     * @param  $user
     * @return mixed
     */
    public function create($user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function update($user, Discussion $discussion)
    {
        return $user->id == $discussion->user_id;
    }

    /**
     * Determine whether the user can delete the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function delete($user, Discussion $discussion)
    {
        return $user->id == $discussion->user_id;
    }

    /**
     * Determine whether the user can restore the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function restore($user, Discussion $discussion)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function forceDelete($user, Discussion $discussion)
    {
        return true;
    }

    /**
     * Determine whether the user can lock the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function lock($user, Discussion $discussion)
    {
        return is_null($discussion->locked_at);
    }

    /**
     * Determine whether the user can unlock the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function unlock($user, Discussion $discussion)
    {
        return ! is_null($discussion->locked_at);
    }

    /**
     * Determine whether the user can pin the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function pin($user, Discussion $discussion)
    {
        return is_null($discussion->pinned_at);
    }

    /**
     * Determine whether the user can unpin the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function unpin($user, Discussion $discussion)
    {
        return ! is_null($discussion->pinned_at);
    }

    /**
     * Determine whether the user can reply the discussion.
     *
     * @param  $user
     * @param  \Firefly\Discussion  $discussion
     * @return mixed
     */
    public function reply($user, Discussion $discussion)
    {
        return is_null($discussion->locked_at);
    }
}
