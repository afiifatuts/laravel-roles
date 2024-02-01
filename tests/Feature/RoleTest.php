<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCanShowRolePage()
    {
        $user = User::role('it')->get()->random();
        // dd($user);
        $this->actingAs($user);
        $this->get('/roles')
            ->assertOk();
    }
}
