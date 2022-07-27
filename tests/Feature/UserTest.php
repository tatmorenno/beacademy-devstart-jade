<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_check_if_user_can_see_users_list()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/admin/users');
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_edit_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $id = User::all()->random()->id;
        $response = $this->get("/admin/users/{$id}/edit");
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_delete_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $id = User::all()->random()->id;
        $response = $this->actingAs($user)
            ->delete("/admin/users/$id");
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_products()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/products');
        $response->assertStatus(200);
    }

    public function test_check_if_user_without_auth_can_see_products()
    {
        $response = $this->get('/products');
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_edit_products()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();
        $this->actingAs($user);
        $id = $product->id;
        $response = $this->get("/admin/users/{$id}/edit");
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_delete_products()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();
        $id = $product->id;
        $response = $this->actingAs($user)
            ->delete("/admin/products/{id}");
        $response->assertStatus(302);
    }
}
