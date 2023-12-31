<?php

namespace App\Policies;

use App\Models\User;

class CategoryPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
        
    }
    public function create(User $user):bool {
        return $user->is_admin;
    }
    public function update(User $user):bool {
        return $user->is_admin;
    }
    public function delete(User $user):bool {
        return $user->is_admin;
    }
    // public function create(User $user):bool {
    //     return $user->is_admin;
    // }
}
