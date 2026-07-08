<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_project_page_requires_login(): void
    {
        $this->get('/projects')
            ->assertRedirect('/login');
    }

    public function test_project_index_loads(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/projects')
            ->assertStatus(200);
    }

    public function test_project_creation_assigns_auto_generated_code_and_status(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post('/projects', [
                'project_name' => 'Pole Survey Project',
                'division' => 'North Division',
                'subdivision' => 'Sub 1',
                'village' => 'Village A',
                'feeder' => 'Feeder 1',
                'dtc' => 'DTC 1',
                'description' => 'Test description',
                'status' => 1,
            ])
            ->assertRedirect('/projects')
            ->assertSessionHas('success');

        $this->assertDatabaseHas('projects', [
            'project_name' => 'Pole Survey Project',
            'project_code' => 'PRJ-000001',
            'status' => 1,
        ]);
    }

    public function test_project_deletion_soft_deletes_the_record(): void
    {
        $user = User::factory()->create();
        $project = Project::factory()->create();

        $this->actingAs($user)
            ->delete('/projects/' . $project->id)
            ->assertRedirect('/projects')
            ->assertSessionHas('success');

        $this->assertSoftDeleted($project);
    }
}