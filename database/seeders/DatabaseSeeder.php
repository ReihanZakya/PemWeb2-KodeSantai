<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Module;
use App\Models\Category;
use App\Models\Material;

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

    // MATERIALS
     // Ambil 1 module random sebagai referensi
     $module = Module::inRandomOrder()->first();

     Material::create([
         'module_id' => $module->id,
         'title' => 'Pengenalan HTML',
         'content' => 'Materi dasar tentang struktur HTML.',
         'video_url' => 'https://youtube.com/example1'
     ]);
 
     Material::create([
         'module_id' => $module->id,
         'title' => 'Dasar CSS',
         'content' => 'Belajar bagaimana men-style elemen dengan CSS.',
         'video_url' => 'https://youtube.com/example2'
     ]);
 
     Material::create([
         'module_id' => $module->id,
         'title' => 'Mengenal Flexbox',
         'content' => 'Layout responsif dengan CSS Flexbox.',
         'video_url' => 'https://youtube.com/example3'
     ]);
}
}
