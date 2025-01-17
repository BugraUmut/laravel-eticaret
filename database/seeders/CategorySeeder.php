<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek',
            'content' => 'Erkek Giyim',
            'cat_ust' => null,
            'status' => '1',
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek Kazak',
            'content' => 'Erkek Kazakları',
            'cat_ust' => $erkek->id,
            'status' => '1',
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek Pantolon',
            'content' => 'Erkek Pantolonlar',
            'cat_ust' => $erkek->id,
            'status' => '1',
        ]);

        $kadin = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın',
            'content' => 'Kadın Giyim',
            'cat_ust' => null,
            'status' => '1',
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın Çanta',
            'content' => 'Kadın Çantaları',
            'cat_ust' => $kadin->id,
            'status' => '1',
        ]);

        $cocuk = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk',
            'content' => 'Çocuk Giyim',
            'cat_ust' => null,
            'status' => '1',
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk Oyuncak',
            'content' => 'Çocuk Oyuncakları',
            'cat_ust' => $cocuk->id,
            'status' => '1',
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk Pantolon',
            'content' => 'Çocuk Pantolonları',
            'cat_ust' => $cocuk->id,
            'status' => '1',
        ]);
    }
}
