<?php

namespace Tests\Unit;

use Tests\TestCase;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_projects()
    {
        $user = factory('Birdbord\User')->create();
        $this->assertInstanceOf(Collection::class, $user->projects);
    }

    /** @test */
    public function a_user_has_accessible_projects(){
        $admin = $this->signIn();
       ProjectFactory::ownedBy($admin)->create();
       $this->assertCount(1, $admin->accessibleProjects());

       $invited = factory('Birdbord\User')->create();
       $nick = factory('Birdbord\User')->create();

       $invitedProject = tap(ProjectFactory::ownedBy($invited)->create())->invite($admin);
       
       $this->assertCount(1, $invited->accessibleProjects());
       $invitedProject->invite($admin);

       $this->assertCount(2, $admin->accessibleProjects());
    }
  

}
