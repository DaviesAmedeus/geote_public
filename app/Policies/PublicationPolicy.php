<?php

namespace App\Policies;

use App\Models\Publication;
use App\Models\User;

class PublicationPolicy
{

    public function view(User $user, Publication $post): bool
    {
        // Allow if the user is an admin or the publication owner
        return $user->is_admin || $post->user_id === $user->id;
    }

    public function update(User $user, Publication $post): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $post->user_id === $user->id;
    }


    public function destroy(User $user, Publication $post): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $post->user_id === $user->id;
    }
}
