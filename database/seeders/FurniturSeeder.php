<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FurniturSeeder extends Seeder
{
    public function run()
    {
        $furnitures = [
            [
                "name" => "Tempat Tidur Minimalis",
                "category" => "Tempat Tidur",
                "price" => 3868228,
                "original_price" => null,
                "label" => null,
                "rating" => 2,
                "rating_count" => 83,
                "image_path" => "images/tempat tidur_minimalis_1.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Nakas Minimalis",
                "category" => "Nakas",
                "price" => 2808399,
                "original_price" => 3058488,
                "label" => "Baru",
                "rating" => 5,
                "rating_count" => 98,
                "image_path" => "public/images/nakas_minimalis_2.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Meja Belajar Jepang",
                "category" => "Meja Belajar",
                "price" => 4921007,
                "original_price" => 6036930,
                "label" => null,
                "rating" => 1,
                "rating_count" => 170,
                "image_path" => "public/images/meja belajar_jepang_3.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Buffet Industri",
                "category" => "Buffet",
                "price" => 4180691,
                "original_price" => null,
                "label" => "Terlaku",
                "rating" => 3,
                "rating_count" => 67,
                "image_path" => "public/images/buffet_industri_4.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Nakas Klasik",
                "category" => "Nakas",
                "price" => 3114812,
                "original_price" => null,
                "label" => "Baru",
                "rating" => 4,
                "rating_count" => 11,
                "image_path" => "public/images/nakas_klasik_5.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Rak Klasik",
                "category" => "Rak",
                "price" => 4356321,
                "original_price" => 5154023,
                "label" => null,
                "rating" => 3,
                "rating_count" => 143,
                "image_path" => "public/images/rak_klasik_6.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Kabinet Modern",
                "category" => "Kabinet",
                "price" => 4552638,
                "original_price" => 5564687,
                "label" => "Diskon",
                "rating" => 2,
                "rating_count" => 113,
                "image_path" => "images/kabinet_modern_7.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Tempat Tidur Klasik",
                "category" => "Tempat Tidur",
                "price" => 3245248,
                "original_price" => null,
                "label" => "Diskon",
                "rating" => 2,
                "rating_count" => 157,
                "image_path" => "images/tempat tidur_klasik_8.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Buffet Industri",
                "category" => "Buffet",
                "price" => 3128400,
                "original_price" => null,
                "label" => "Baru",
                "rating" => 4,
                "rating_count" => 93,
                "image_path" => "images/buffet_industri_9.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Meja Skandinavia",
                "category" => "Meja",
                "price" => 2488252,
                "original_price" => null,
                "label" => null,
                "rating" => 1,
                "rating_count" => 17,
                "image_path" => "images/meja_skandinavia_10.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Buffet Besi",
                "category" => "Buffet",
                "price" => 3227692,
                "original_price" => 4728606,
                "label" => null,
                "rating" => 2,
                "rating_count" => 37,
                "image_path" => "images/buffet_besi_11.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Sofa Kayu",
                "category" => "Sofa",
                "price" => 2814365,
                "original_price" => null,
                "label" => "Terlaku",
                "rating" => 2,
                "rating_count" => 47,
                "image_path" => "images/sofa_kayu_12.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Kursi Makan Jepang",
                "category" => "Kursi Makan",
                "price" => 4550043,
                "original_price" => null,
                "label" => "Baru",
                "rating" => 4,
                "rating_count" => 149,
                "image_path" => "images/kursi makan_jepang_13.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Meja Kerja Minimalis",
                "category" => "Meja Kerja",
                "price" => 3442898,
                "original_price" => 4979497,
                "label" => "Terbatas",
                "rating" => 1,
                "rating_count" => 142,
                "image_path" => "images/meja kerja_minimalis_14.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Kabinet Kontemporer",
                "category" => "Kabinet",
                "price" => 4709309,
                "original_price" => null,
                "label" => "Terbatas",
                "rating" => 3,
                "rating_count" => 25,
                "image_path" => "images/kabinet_kontemporer_15.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Meja Rias Modern",
                "category" => "Meja Rias",
                "price" => 1056159,
                "original_price" => null,
                "label" => "Baru",
                "rating" => 5,
                "rating_count" => 35,
                "image_path" => "images/meja rias_modern_16.jpg",
                "is_available" => false,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Laci Minimalis",
                "category" => "Laci",
                "price" => 3887756,
                "original_price" => 5707885,
                "label" => "Baru",
                "rating" => 4,
                "rating_count" => 87,
                "image_path" => "images/laci_minimalis_17.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
            [
                "name" => "Kursi Makan Besi",
                "category" => "Kursi Makan",
                "price" => 1771913,
                "original_price" => 2565082,
                "label" => "Diskon",
                "rating" => 4,
                "rating_count" => 68,
                "image_path" => "images/kursi makan_besi_18.jpg",
                "is_available" => true,
                "created_at" => "2025-05-15 01:22:04",
                "updated_at" => "2025-05-15 01:22:04"
            ],
        ];

        DB::table('furnitur')->insert($furnitures);
    }
}