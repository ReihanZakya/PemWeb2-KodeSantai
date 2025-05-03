<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Module;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin12345')
        ]);

        Module::create([
            'category' => 'Frontend',
            'module' => 'Javascript'
        ]);
        Module::create([
            'category' => 'Fullstack',
            'module' => 'PHP'
        ]);
        Module::create([
            'category' => 'Backend',
            'module' => 'Java'
        ]);

        Module::factory(21)->create();
    }
}
