<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name'=>'adres',
            'data'=>'Adres Bilgilerim Burada'
        ]);

        SiteSetting::create([
            'name'=>'telefon',
            'data'=>'0542 772 03 28'
        ]);

        SiteSetting::create([
            'name'=>'harita',
            'data'=> null
        ]);

        SiteSetting::create([
            'name'=>'email',
            'data'=> 'test@eticaret.com'
        ]);
    }
}
