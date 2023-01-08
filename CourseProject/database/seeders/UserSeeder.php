<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$7TKZirK85/i25ZwHerGEQuzENju6rtO4NvpgMyGAKt6AFtn.oFzn.',
            'permissions' => [
                "platform.systems.roles" => true,
                "platform.systems.users" => true,
                "platform.systems.attachment" => true,
                "platform.index" => true
            ]
        ]);
    }
}
