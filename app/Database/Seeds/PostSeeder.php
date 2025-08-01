<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $posts_data = [
            [
                'title' => 'Mulai Nyobain Codeigniter',
                'slug' => 'codeigniter-starter',
                'content' => 'CodeIgniter adalah framework PHP yang ringan dan cepat. Cocok untuk pemula yang ingin belajar pengembangan web dengan struktur yang jelas dan rapi.'
            ],
            [
                'title' => 'Cara Mudah Buat Hello World',
                'slug' => 'hello-world',
                'content' => 'Langkah pertama dalam belajar pemrograman web adalah menampilkan tulisan "Hello World". Artikel ini menjelaskan cara mudah melakukannya di CodeIgniter.'
            ],
            [
                'title' => 'Meetup Komunitas Kelas Koding',
                'slug' => 'meetup-comunity',
                'content' => 'Kelas Koding mengadakan meetup bulanan untuk berbagi ilmu seputar pengembangan aplikasi dan teknologi terbaru. Jangan lewatkan kesempatan untuk belajar dan networking!'
            ]
        ];

        foreach ($posts_data as $data) {
            // insert semua data ke tabel
            $this->db->table('posts')->insert($data);
        }
    }
}
