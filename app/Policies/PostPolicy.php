<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function view(User $user, Post $post): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $post->user_id === $user->id;
    }

    public function update(User $user, Post $post): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $post->user_id === $user->id;
    }


    public function destroy(User $user, Post $post): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $post->user_id === $user->id;
    }
}
