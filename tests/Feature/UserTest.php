<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_check_if_user_can_see_products()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/products');
        $response->assertStatus(200);
    }

    public function test_check_if_user_can_edit_users()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/admin/users');
        $response->assertStatus(200);
    }
}
