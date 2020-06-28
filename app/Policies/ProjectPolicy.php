<?php

namespace Birdbord\Policies;

use Birdbord\Project;
use Birdbord\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

 
    public function manage(User $user, Project $project){
        return $user->is($project->owner);
    }

    public function update(User $user,Project $project){
        return $user->is($project->owner) || $project->members->contains($user);
    }
}
