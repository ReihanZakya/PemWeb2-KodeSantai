<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Module;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    // Buat Admin
    User::create([
        'name' => 'Admin1',
        'role' => 'admin',
        'email' => 'admin1@gmail.com',
        'password' => bcrypt('admin12345')
    ]);

    // Buat Kategori (Frontend, Backend, Fullstack)
    $frontend = Category::create(['name' => 'Frontend']);
    $backend = Category::create(['name' => 'Backend']);
    $fullstack = Category::create(['name' => 'Fullstack']);

    // Buat Modul sesuai kategori
    Module::create([
        'category_id' => $frontend->id,
        'title' => 'JavaScript',
        'description' => 'Belajar dasar JavaScript untuk frontend'
    ]);

    Module::create([
        'category_id' => $fullstack->id,
        'title' => 'PHP',
        'description' => 'Dasar PHP untuk pengembangan fullstack'
    ]);

    Module::create([
        'category_id' => $backend->id,
        'title' => 'Java',
        'description' => 'OOP dengan Java untuk backend service'
    ]);

    // Tambahkan 21 modul dummy menggunakan factory
    Module::factory(21)->create();
}
}
