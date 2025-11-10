<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division; // <-- Pastiin ini bener
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
       
       
        $psdm = Division::create([
            'name' => 'Internal',
            'slug' => Str::slug('internal'),
            'cover' => 'placeholders/news/internak.png',
            'description' => 'Divisi Pengembangan Sumber Daya Mahasiswa (PSDM) adalah divisi yang berfokus pada pengembangan potensi dan karakter mahasiswa.'
        ]);

       
        $psdm->members()->create([
            'name' => 'Muhammad Sumbul',
            'position' => 'Ketua Divisi',
            'photo' => 'placeholders/news/divisi/fotonanggota.png'
        ]);
        $psdm->members()->create([
            'name' => 'Decoy Text',
            'position' => 'Anggota',
            'photo' => 'placeholders/news/divisi/fotonanggota.png'
        ]);
        $psdm->members()->create([
            'name' => 'Budi Setiawan',
            'position' => 'Sekretaris',
            'photo' => 'placeholders/news/divisi/fotonanggota.png'
        ]);

      
        $psdm->programs()->create([
            'name' => 'Kaderisasi',
            'description' => 'Program untuk melatih calon-calon pengurus baru HMPS MI.'
        ]);
        $psdm->programs()->create([
            'name' => 'Upgrading',
            'description' => 'Pelatihan internal untuk meningkatkan skill pengurus.'
        ]);

       
        $psdm->galleries()->create(['image_path' => 'placeholders/news/divisi/fotonanggota.png']);
        $psdm->galleries()->create(['image_path' => 'placeholders/news/divisi/fotonanggota.png']);
        $psdm->galleries()->create(['image_path' => 'placeholders/news/divisi/fotonanggota.png']);
        $psdm->galleries()->create(['image_path' => 'placeholders/news/divisi/fotonanggota.png']);

     
        $kominfo = Division::create([
            'name' => 'IPTEK',
            'slug' => Str::slug('iptek'),
            'cover' => 'placeholders/divisi/kominfo.jpg',
            'description' => 'Divisi Komunikasi dan Informasi bertanggung jawab atas penyebaran informasi dan branding organisasi.'
        ]);

        $kominfo->members()->create([
            'name' => 'Azmi',
            'position' => 'Ketua Divisi',
            'photo' => 'placeholders/news/divisi/fotonanggota.png'
        ]);
        $kominfo->members()->create([
            'name' => 'Citra Lestari',
            'position' => 'Anggota Medsos',
            'photo' => 'placeholders/news/divisi/fotonanggota.png'
        ]);

       
        $kominfo->programs()->create([
            'name' => 'Manajemen Medsos',
            'description' => 'Mengelola konten Instagram, TikTok, dan Website HMPS MI.'
        ]);
    }
}