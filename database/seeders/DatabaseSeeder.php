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
    User::create([
        'name' => 'Admin2',
        'role' => 'admin',
        'email' => 'admin2@gmail.com',
        'password' => bcrypt('admin12345')
    ]);

    // Buat Kategori (Frontend, Backend, Fullstack)
    $frontend = Category::create(['name' => 'Frontend']);
    $backend = Category::create(['name' => 'Backend']);
    $fullstack = Category::create(['name' => 'Fullstack']);

    // FRONTEND MODULES
    Module::create([
        'category_id' => $frontend->id,
        'title' => 'Dasar-dasar HTML, CSS, dan Struktur Web',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    Module::create([
        'category_id' => $frontend->id,
        'title' => 'Responsive Web Design & Flexbox/Grid',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    Module::create([
        'category_id' => $frontend->id,
        'title' => 'JavaScript Dasar & DOM Manipulation',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    // BACKEND MODULES
    Module::create([
        'category_id' => $backend->id,
        'title' => 'Pengenalan Backend dan REST API',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    Module::create([
        'category_id' => $backend->id,
        'title' => 'CRUD API dengan Node.js dan Express.js',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    Module::create([
        'category_id' => $backend->id,
        'title' => 'Database & Integrasi dengan Backend',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    // FULLSTACK MODULES
    Module::create([
        'category_id' => $fullstack->id,
        'title' => 'Membangun Aplikasi Fullstack Sederhana (HTML + Express + MongoDB)',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    Module::create([
        'category_id' => $fullstack->id,
        'title' => 'API + Frontend Dinamis (Fetch API + Express)',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    Module::create([
        'category_id' => $fullstack->id,
        'title' => 'Auth, Deployment, dan Integrasi Fullstack',
        'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]);

    // Tambahkan 21 modul dummy menggunakan factory
    // Module::factory(10)->create();

    // MATERIALS
     // Ambil 1 module random sebagai referensi
    //  $module = Module::inRandomOrder()->first();

    

     Material::create([
         'module_id' => 1,
         'title' => 'Pengenalan web',
         'content' => 'Apa itu frontend? Cara kerja browser dan server',
         'video_url' => 'https://youtu.be/CsSyelw7QSM?si=FonVO5yfFdzunxS7'
     ]);
 
     Material::create([
         'module_id' => 1,
         'title' => 'HTML',
         'content' => 'Struktur dasar HTML, elemen, atribut, dan tag dasar.',
         'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
     ]);
 
     Material::create([
         'module_id' => 2,
         'title' => 'Responsive Design',
         'content' => 'viewport, media queries, dan teknik responsive design.',
         'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
     ]);
     Material::create([
         'module_id' => 2,
         'title' => 'Flexbox Layout',
         'content' => 'display: flex, flex-direction, justify-content, align-items.',
         'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
     ]);
    Material::create([
        'module_id' => 3,
        'title' => 'JavaScript Dasar',
        'content' => 'Variabel, tipe data, operator, dan struktur kontrol.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 3,
        'title' => 'DOM Manipulation',
        'content' => 'Mengakses dan memanipulasi elemen HTML dengan JavaScript.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 4,
        'title' => 'Pengenalan Backend',
        'content' => 'Apa itu backend? Peran backend dalam aplikasi web.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 4,
        'title' => 'REST API',
        'content' => 'Konsep dasar REST API, HTTP methods, dan status codes.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 5,
        'title' => 'Node.js dan Express.js',
        'content' => 'Pengenalan Node.js, Express.js, dan cara membuat server.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 5,
        'title' => 'CRUD API',
        'content' => 'Membuat API untuk operasi Create, Read, Update, Delete.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 6,
        'title' => 'Database',
        'content' => 'Pengenalan database, jenis-jenis database, dan cara menghubungkan dengan backend.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 6,
        'title' => 'Integrasi Database',
        'content' => 'Menggunakan database dengan Node.js dan Express.js.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 7,
        'title' => 'Aplikasi Fullstack Sederhana',
        'content' => 'Membangun aplikasi sederhana dengan HTML, Express, dan MongoDB.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 8,
        'title' => 'Fetch API',
        'content' => 'Menggunakan Fetch API untuk mengambil data dari backend.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 9,
        'title' => 'Auth',
        'content' => 'Implementasi otentikasi pengguna di aplikasi fullstack.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
    Material::create([
        'module_id' => 9,
        'title' => 'Deployment',
        'content' => 'Cara mendepoy aplikasi fullstack ke server.',
        'video_url' => 'https://youtu.be/xvFZjo5PgG0?si=vID89rFacBRF8R5E'
    ]);
}
}
