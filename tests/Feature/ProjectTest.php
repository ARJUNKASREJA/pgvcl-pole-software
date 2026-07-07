<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_project_page_requires_login()
    {
        $this->get('/projects')
            ->assertRedirect('/login');
    }

    public function test_project_index_loads()
    {
        $user=User::factory()->create();

        $this->actingAs($user)
            ->get('/projects')
            ->assertStatus(200);
    }
}