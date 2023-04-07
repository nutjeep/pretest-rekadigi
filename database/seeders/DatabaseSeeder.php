<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Carrier;
use App\Models\Link;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Privacy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* ========== CATEGORY ========== */
        Category::create([
            'category_title'    => 'Toko Kelontong',
            'slug'              => 'toko-kelontong',
            'thumbnail'         => '',
            'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quibusdam nesciunt iste exercitationem eveniet quod voluptates delectus magnam deserunt optio!'
        ]);

        Category::create([
            'category_title'    => 'Toko bangunan',
            'slug'              => 'toko-bangunan',
            'thumbnail'         => '',
            'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quibusdam nesciunt iste exercitationem eveniet quod voluptates delectus magnam deserunt optio!'
        ]);

        Category::create([
            'category_title'    => 'Toko Pakaian',
            'slug'              => 'toko-pakaian',
            'thumbnail'         => '',
            'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quibusdam nesciunt iste exercitationem eveniet quod voluptates delectus magnam deserunt optio!'
        ]);

        Category::create([
            'category_title'    => 'Warung Makanan',
            'slug'              => 'warung-makanan',
            'thumbnail'         => '',
            'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quibusdam nesciunt iste exercitationem eveniet quod voluptates delectus magnam deserunt optio!'
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
            'description'   => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, illo. Aperiam incidunt hic ad ipsam ratione beatae enim quam laborum?'
        ]);

        Carrier::create([
            'carrier_title' => 'Customer Service',
            'slug'          => 'customer-service',
            'thumbnail'     => '',
            'description'   => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, illo. Aperiam incidunt hic ad ipsam ratione beatae enim quam laborum?'
        ]);

        Carrier::create([
            'carrier_title' => 'Content Writer',
            'slug'          => 'content-writer',
            'thumbnail'     => '',
            'description'   => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, illo. Aperiam incidunt hic ad ipsam ratione beatae enim quam laborum?'
        ]);


        /* ========== LINK ========== */
        Privacy::create([
            'title'         => 'Privacy',
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
