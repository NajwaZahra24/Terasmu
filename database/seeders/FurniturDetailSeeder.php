<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FurniturDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('furnitur_details')->insert([
            [
                'furnitur_id' => 1,
                'full_description' => "Tempat Tidur Minimalis dengan desain modern yang elegan, terbuat dari kayu berkualitas tinggi yang tahan lama dan nyaman untuk istirahat Anda.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Mahoni',
                    'Dimensions' => '200cm x 160cm x 40cm',
                    'Weight' => '40kg',
                    'Finish' => 'Lacquer',
                    'Color' => 'Coklat Muda',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 2,
                'full_description' => "Nakas Minimalis dengan desain simple dan fungsional, dilengkapi dengan dua laci untuk menyimpan barang-barang kecil Anda dengan rapi.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Jati',
                    'Dimensions' => '50cm x 40cm x 60cm',
                    'Weight' => '15kg',
                    'Color' => 'Coklat Tua',
                    'Drawers' => 2,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 3,
                'full_description' => "Meja Belajar Jepang yang ergonomis dengan ruang penyimpanan praktis, cocok untuk menciptakan suasana belajar yang nyaman.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Pinus',
                    'Dimensions' => '120cm x 60cm x 75cm',
                    'Weight' => '25kg',
                    'Color' => 'Natural Wood',
                    'Features' => 'Ruang penyimpanan di bawah meja',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 4,
                'full_description' => "Buffet Industri dengan perpaduan besi dan kayu reklamasi yang kokoh dan stylish, ideal untuk ruang dengan tema industrial.",
                'specifications' => json_encode([
                    'Material' => 'Besi dan Kayu Reklamasi',
                    'Dimensions' => '150cm x 45cm x 80cm',
                    'Weight' => '55kg',
                    'Color' => 'Hitam dan Coklat',
                    'Storage' => '3 laci dan 2 rak',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 5,
                'full_description' => "Nakas Klasik dengan desain tradisional, memberikan sentuhan elegan dan kehangatan di kamar tidur Anda.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Mahoni',
                    'Dimensions' => '55cm x 45cm x 65cm',
                    'Weight' => '18kg',
                    'Color' => 'Coklat Gelap',
                    'Drawers' => 3,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 6,
                'full_description' => "Rak Klasik yang kuat dan tahan lama, cocok untuk menyimpan buku dan barang dekorasi dengan gaya elegan.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Mahoni',
                    'Dimensions' => '180cm x 60cm x 30cm',
                    'Weight' => '30kg',
                    'Color' => 'Coklat Tua',
                    'Shelves' => 5,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 7,
                'full_description' => "Kabinet Modern dengan desain minimalis dan fungsional, memberikan solusi penyimpanan yang praktis dan estetis.",
                'specifications' => json_encode([
                    'Material' => 'Kayu MDF',
                    'Dimensions' => '120cm x 40cm x 80cm',
                    'Weight' => '25kg',
                    'Color' => 'Putih',
                    'Doors' => 2,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 8,
                'full_description' => "Tempat Tidur Klasik dengan bahan berkualitas, memberikan kenyamanan maksimal dan tampilan elegan di kamar Anda.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Jati',
                    'Dimensions' => '200cm x 160cm x 40cm',
                    'Weight' => '45kg',
                    'Color' => 'Coklat Tua',
                    'Finish' => 'Polish',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 9,
                'full_description' => "Buffet Industri dengan desain yang kuat dan kokoh, sempurna untuk penyimpanan tambahan di ruang makan Anda.",
                'specifications' => json_encode([
                    'Material' => 'Besi dan Kayu',
                    'Dimensions' => '140cm x 45cm x 75cm',
                    'Weight' => '50kg',
                    'Color' => 'Hitam',
                    'Drawers' => 4,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 10,
                'full_description' => "Meja Skandinavia dengan desain minimalis dan fungsional, cocok untuk ruang kerja yang nyaman dan terang.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Pinus',
                    'Dimensions' => '120cm x 60cm x 75cm',
                    'Weight' => '22kg',
                    'Color' => 'Putih',
                    'Finish' => 'Matte',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 11,
                'full_description' => "Buffet Besi dengan desain industrial kuat dan tahan lama, ideal untuk kebutuhan penyimpanan yang stylish dan fungsional.",
                'specifications' => json_encode([
                    'Material' => 'Besi',
                    'Dimensions' => '130cm x 45cm x 80cm',
                    'Weight' => '60kg',
                    'Color' => 'Hitam Matte',
                    'Storage' => '3 laci dan rak',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 12,
                'full_description' => "Sofa Kayu dengan desain sederhana dan nyaman, cocok untuk ruang tamu dengan suasana hangat dan alami.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Jati dan Kain',
                    'Dimensions' => '180cm x 80cm x 75cm',
                    'Weight' => '40kg',
                    'Color' => 'Coklat dan Beige',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 13,
                'full_description' => "Kursi Makan Jepang dengan desain ergonomis, terbuat dari kayu berkualitas, nyaman dan tahan lama untuk penggunaan sehari-hari.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Pinus',
                    'Dimensions' => '45cm x 45cm x 90cm',
                    'Weight' => '10kg',
                    'Color' => 'Natural Wood',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 14,
                'full_description' => "Meja Kerja Minimalis dengan desain simpel dan modern, memberikan kenyamanan saat bekerja atau belajar di rumah.",
                'specifications' => json_encode([
                    'Material' => 'Kayu MDF',
                    'Dimensions' => '140cm x 70cm x 75cm',
                    'Weight' => '30kg',
                    'Color' => 'Putih',
                    'Features' => 'Rak bawah meja',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 15,
                'full_description' => "Kabinet Kontemporer dengan desain stylish dan fungsional, menyediakan ruang penyimpanan yang luas dan rapi.",
                'specifications' => json_encode([
                    'Material' => 'Kayu MDF',
                    'Dimensions' => '130cm x 45cm x 85cm',
                    'Weight' => '28kg',
                    'Color' => 'Abu-abu',
                    'Doors' => 2,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 16,
                'full_description' => "Meja Rias Modern dengan desain elegan dan fungsional, dilengkapi dengan cermin besar dan beberapa laci penyimpanan.",
                'specifications' => json_encode([
                    'Material' => 'Kayu dan Kaca',
                    'Dimensions' => '100cm x 50cm x 75cm',
                    'Weight' => '20kg',
                    'Color' => 'Putih dan Coklat',
                    'Drawers' => 3,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 17,
                'full_description' => "Laci Minimalis dengan desain modern dan ruang penyimpanan yang cukup luas, cocok untuk berbagai kebutuhan di rumah Anda.",
                'specifications' => json_encode([
                    'Material' => 'Kayu MDF',
                    'Dimensions' => '80cm x 40cm x 60cm',
                    'Weight' => '15kg',
                    'Color' => 'Putih',
                    'Drawers' => 4,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 18,
                'full_description' => "Kursi Makan Besi dengan desain kuat dan tahan lama, memberikan sentuhan industrial di ruang makan Anda.",
                'specifications' => json_encode([
                    'Material' => 'Besi dan Kayu',
                    'Dimensions' => '45cm x 45cm x 90cm',
                    'Weight' => '12kg',
                    'Color' => 'Hitam dan Coklat',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 19,
                'full_description' => "Meja Lipat Kontemporer yang praktis dengan desain minimalis, mudah disimpan dan cocok untuk ruang terbatas.",
                'specifications' => json_encode([
                    'Material' => 'Kayu MDF',
                    'Dimensions' => '120cm x 60cm x 75cm',
                    'Weight' => '20kg',
                    'Color' => 'Putih',
                    'Features' => 'Mudah dilipat dan dipindahkan',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 20,
                'full_description' => "Meja Lipat Besi yang kuat dan tahan lama, memberikan solusi praktis untuk ruang kerja atau belajar Anda.",
                'specifications' => json_encode([
                    'Material' => 'Besi dan Kayu',
                    'Dimensions' => '120cm x 60cm x 75cm',
                    'Weight' => '25kg',
                    'Color' => 'Hitam',
                    'Features' => 'Mekanisme lipat yang mudah digunakan',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 21,
                'full_description' => "Nakas Rotan yang ringan dan stylish, memberikan nuansa alami dan segar di kamar tidur Anda.",
                'specifications' => json_encode([
                    'Material' => 'Rotan',
                    'Dimensions' => '50cm x 40cm x 60cm',
                    'Weight' => '10kg',
                    'Color' => 'Coklat Muda',
                    'Drawers' => 2,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 22,
                'full_description' => "Rak Jepang yang simpel dan elegan, cocok untuk penyimpanan buku dan dekorasi dengan gaya minimalis.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Pinus',
                    'Dimensions' => '150cm x 60cm x 30cm',
                    'Weight' => '25kg',
                    'Color' => 'Natural Wood',
                    'Shelves' => 4,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 23,
                'full_description' => "Lemari Klasik yang luas dan elegan, cocok untuk menyimpan pakaian dan barang-barang pribadi Anda dengan rapi.",
                'specifications' => json_encode([
                    'Material' => 'Kayu Mahoni',
                    'Dimensions' => '180cm x 60cm x 200cm',
                    'Weight' => '60kg',
                    'Color' => 'Coklat Gelap',
                    'Doors' => 3,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 24,
                'full_description' => "Kursi Rotan dengan desain ergonomis dan ringan, memberikan kenyamanan dan nuansa alami di ruang makan Anda.",
                'specifications' => json_encode([
                    'Material' => 'Rotan',
                    'Dimensions' => '45cm x 45cm x 90cm',
                    'Weight' => '8kg',
                    'Color' => 'Coklat Muda',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'furnitur_id' => 25,
                'full_description' => "Lemari Dapur Rotan dengan desain modern dan praktis, cocok untuk menyimpan peralatan dapur dan bahan makanan.",
                'specifications' => json_encode([
                    'Material' => 'Rotan dan Kayu',
                    'Dimensions' => '120cm x 60cm x 150cm',
                    'Weight' => '35kg',
                    'Color' => 'Coklat',
                    'Shelves' => 5,
                    'Doors' => 2,
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
