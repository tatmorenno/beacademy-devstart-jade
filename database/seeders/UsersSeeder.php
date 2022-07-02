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
            'password' => bcrypt('Jade@aDm1n!'),
            'is_admin' => 1,
        ]);

        \App\Models\User::factory(10)->create();
    }
}
