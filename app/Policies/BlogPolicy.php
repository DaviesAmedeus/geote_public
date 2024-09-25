<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;

class BlogPolicy
{

    public function view(User $user, Blog $blog): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $blog->user_id === $user->id;
    }

    public function update(User $user, Blog $blog): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $blog->user_id === $user->id;
    }


    public function destroy(User $user, Blog $blog): bool
    {
        // Allow if the user is an admin or the post owner
        return $user->is_admin || $blog->user_id === $user->id;
    }
}
