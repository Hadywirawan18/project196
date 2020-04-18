<?php

use Illuminate\Database\Seeder;
use App\Posts; //namespace dari Posts.php

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array (

        'gambar' => 'gambar.jpeg',
    	'penulis' => 'Diiy',
    	'slug' => 'judul-pertama',
    	'judul' => 'Judul Pertama',
    	'isi' => 'Percobaan Menggunakan Seeder'
        );

        Posts::create($data);
    }
}
