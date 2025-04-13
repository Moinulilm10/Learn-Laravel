<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_list_get_with_values()
    {
        // Arrange: Create some users
        User::factory()->count(5)->create();

        // Act: Call the /users route
        $response = $this->get('/users');

        // Assert: Check if the view receives the correct count
        $response->assertStatus(200);
        $response->assertViewHas('usersCount', 5);
    }
}
