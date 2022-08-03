<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_check_if_user_is_admin()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'phone' => '11988884446',
            'birth_date' => '1990/05/15',
            'cpf' => '45' . random_int(000000000, 999999999),
            'zipcode' => '05426200',
            'zipcode' => "17560246",
            'address' => "Avenida Brigadeiro Faria Lima",
            'number_house' => "1014",
            'district' => "Pinheiros",
            'city' => "São Paulo",
            'state' => "SP",
            'password' => '12345678',
            'is_admin' => 1


        ]);

        $this->assertTrue($admin->is_admin == 1);
    }

    public function test_check_if_admin_can_see_users_list()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'phone' => '11988884446',
            'birth_date' => '1990/05/15',
            'cpf' => '45' . random_int(000000000, 999999999),
            'zipcode' => '05426200',
            'zipcode' => "17560246",
            'address' => "Avenida Brigadeiro Faria Lima",
            'number_house' => "1014",
            'district' => "Pinheiros",
            'city' => "São Paulo",
            'state' => "SP",
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $response = $this->get("/admin/users");
        $response->assertStatus(200);
    }


    public function test_check_if_admin_can_edit_users()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'phone' => '11988884446',
            'birth_date' => '1990/05/15',
            'cpf' => '45' . random_int(000000000, 999999999),
            'zipcode' => '05426200',
            'zipcode' => "17560246",
            'address' => "Avenida Brigadeiro Faria Lima",
            'number_house' => "1014",
            'district' => "Pinheiros",
            'city' => "São Paulo",
            'state' => "SP",
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $id = User::all()->random()->id;
        $response = $this->get("/admin/users/{$id}/edit");
        $response->assertStatus(200);
    }

    public function test_check_if_admin_can_delete_users()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'phone' => '11988884446',
            'birth_date' => '1990/05/15',
            'cpf' => '45' . random_int(000000000, 999999999),
            'zipcode' => '05426200',
            'zipcode' => "17560246",
            'address' => "Avenida Brigadeiro Faria Lima",
            'number_house' => "1014",
            'district' => "Pinheiros",
            'city' => "São Paulo",
            'state' => "SP",
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $id = User::all()->random()->id;

        $response = $this->actingAs($admin)
            ->delete("/admin/users/$id");

        $response->assertRedirect('/admin/users');
    }
}
