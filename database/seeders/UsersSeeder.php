<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrador Jade Shopp',
            'email' => 'js.admin@jadeshopp.com',
            'password' => bcrypt('JadeAdmin'),
            'is_admin' => 1,
            'phone' => "11988884444",
            'birth_date' => "1990-01-01",
            'cpf' =>  "44455566612",
            'zipcode' => "17560246",
            'address' => "Avenida Brigadeiro Faria Lima",
            'number_house' => "1014",
            'district' => "Pinheiros",
            'city' => "São Paulo",
            'state' => "SP",
        ]);

        \App\Models\User::factory(10)->create();
    }
}
