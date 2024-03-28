<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'Ahmet Ergün E-ticaret',
            'content'=>'Hakkımızda yazısı burada',

            'text_1_icon'=>'icon-truck',
            'text_1'=>'Ücretsiz Kargo',
            'text_1_content'=>'Ücretsiz Kargo Metin',

            'text_2_icon'=>'icon-refresh2',
            'text_2'=>'Geri İade',
            'text_2_content'=>'Geri İade Metin',

            'text_3_icon'=>'icon-help',
            'text_3'=>'Destek',
            'text_3_content'=>'Destek Metin',
        ]);
    }
}
