<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Division; 
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
  
    public function run(): void
    {
       
        $division = Division::first();

        News::create([
            'title' => 'AContoh berita',
            'slug' => Str::slug('contoh'),
            'excerpt' => 'Ini adalah ringkasan singkat dari berita ',
            'content' => '<p>Hai guyss, ini contoh konten berita.</p><p>Ini adalah paragraf kedua.</p>',
            'thumbnail' => 'placeholders/news/fotonews.png',
            'division_id' => $division ? $division->id : null, 
        ]);

     
        News::create([
            'title' => 'TES NEWS',
            'slug' => Str::slug('TES NEWS'),
            'excerpt' => 'Ringkasan untuk berita TES NEWS.',
            'content' => '<p>Hai guyss, keren bgt nih fitur</p>', 
            'thumbnail' => 'placeholders/news/fotonews.png',
            'division_id' => $division ? $division->id : null, 
        ]);
    }
}