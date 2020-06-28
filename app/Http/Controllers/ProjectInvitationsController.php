<?php

namespace Birdbord\Http\Controllers;

use Birdbord\User;
use Birdbord\Project;
use Illuminate\Http\Request;
use Birdbord\Http\Requests\ProjectInvitationRequest;

class ProjectInvitationsController extends Controller
{
    /**
     * Invite a new user to the project.
     *
     * @param  Project                  $project
     * @param  ProjectInvitationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Project $project, ProjectInvitationRequest $request)
    {
        
        $user = User::whereEmail(request('email'))->first();
        $project->invite($user);
        return redirect($project->path());
    }
}
