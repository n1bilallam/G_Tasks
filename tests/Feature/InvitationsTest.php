<?php

namespace Tests\Feature;

use Birdbord\User;
use Tests\TestCase;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvitationsTest extends TestCase
{

    /** @test */
    function now_owners_may_not_invite_users(){
        $project = ProjectFactory::create();
        $user = factory(User::class)->create();
        $assertInvitationForbidden = function () use ($user, $project) {
            $this->actingAs($user)
                ->post($project->path() . '/invitations')
                ->assertStatus(403);
        };
        $assertInvitationForbidden();
        $project->invite($user);
        $assertInvitationForbidden();

    }


    /** @test */
    function a_project_owner_can_invite_a_user()
    {
        $project = ProjectFactory::create();
        $userToInvite = factory(User::class)->create();
        $this->actingAs($project->owner)
            ->post($project->path() . '/invitations', [
                'email' => $userToInvite->email
            ])
            ->assertRedirect($project->path());
        $this->assertTrue($project->members->contains($userToInvite));
    }


    /** @test */
    function the_email_address_must_be_associated_with_a_valide_birdbord_account(){
        $project = ProjectFactory::create();
        $this->actingAs($project->owner)
            ->post($project->path() . '/invitations', [
                'email' => 'notuser@example.com'
            ])
            ->assertSessionHasErrors([
                'email' =>'the user you are inviting must have a birdbord account.'
            ],null,'invitations');
    }

    /** @test */
    function invited_users_may_update_project_details()
    {
        $project = ProjectFactory::create();
        $project->invite($newUser = factory(User::class)->create());
        $this
            ->actingAs($newUser)
            ->post(action('ProjectTasksController@store', $project), $task = ['body' => 'Foo task']);
        $this->assertDatabaseHas('tasks', $task);
    }
}
