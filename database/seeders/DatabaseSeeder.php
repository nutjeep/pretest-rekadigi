<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Link;
use App\Models\User;
use App\Models\Carrier;
use App\Models\Feature;
use App\Models\Privacy;
use App\Models\Category;
use App\Models\KritikSaran;
use App\Models\TermsCondition;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name'  => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin123')
        ]);

        /* ========== CATEGORY ========== */
        Category::create([
            'category_title'    => 'Toko Kelontong',
            'slug'              => 'toko-kelontong',
            'thumbnail'         => '',
            'description'       => ''
        ]);

        Category::create([
            'category_title'    => 'Toko bangunan',
            'slug'              => 'toko-bangunan',
            'thumbnail'         => '',
            'description'       => ''
        ]);

        Category::create([
            'category_title'    => 'Toko Pakaian',
            'slug'              => 'toko-pakaian',
            'thumbnail'         => '',
            'description'       => ''
        ]);

        Category::create([
            'category_title'    => 'Warung Makanan',
            'slug'              => 'warung-makanan',
            'thumbnail'         => '',
            'description'       => ''
        ]);


        /* ========== FEATURE ========== */
        Feature::create([
            'feature_title' => 'Mesin Kasir',
            'slug'          => 'mesin-kasir',
            'thumbnail'     => ''
        ]);

        Feature::create([
            'feature_title' => 'Scan Barcode',
            'slug'          => 'scan-barcode',
            'thumbnail'     => ''
        ]);

        Feature::create([
            'feature_title' => 'Daftar Kurir',
            'slug'          => 'daftar-kurir',
            'thumbnail'     => ''
        ]);

        Feature::create([
            'feature_title' => 'Stock Opname',
            'slug'          => 'stock-opname',
            'thumbnail'     => ''
        ]);

        Feature::create([
            'feature_title' => 'Print Termal',
            'slug'          => 'print-termal',
            'thumbnail'     => ''
        ]);


        /* ========== CARRIER ========== */
        Carrier::create([
            'carrier_title' => 'Marketing Comunication',
            'slug'          => 'marketing-communication',
            'thumbnail'     => '',
            'description'   => ''
        ]);

        Carrier::create([
            'carrier_title' => 'Customer Service',
            'slug'          => 'customer-service',
            'thumbnail'     => '',
            'description'   => ''
        ]);

        Carrier::create([
            'carrier_title' => 'Content Writer',
            'slug'          => 'content-writer',
            'thumbnail'     => '',
            'description'   => ''
        ]);


        /* ========== PAGES ========== */
        Privacy::create([
            'title'         => 'Privacy',
            'slug'          => 'privacy',
            'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, ex nobis beatae commodi libero corporis natus, tempore quas laboriosam nisi deleniti officia animi perspiciatis explicabo.'
        ]);

        KritikSaran::create([
            'name'      => 'Budi Gunawan',
            'email'     => 'budigunawan@gmail.com',
            'phone'     => '081234567890',
            'message'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, ex nobis beatae commodi libero corporis natus, tempore quas laboriosam nisi deleniti officia animi perspiciatis explicabo.'
        ]);

        TermsCondition::create([
            'title'         => 'Terms & Condition',
            'slug'          => 'terms-&-condition',
            'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, ex nobis beatae commodi libero corporis natus, tempore quas laboriosam nisi deleniti officia animi perspiciatis explicabo.'
        ]);

        
        /* ========== LINK ========== */
        Link::create([
            'instagram'     => '',
            'facebook'      => '',
            'google_play'   => ''
        ]);
    }
}
