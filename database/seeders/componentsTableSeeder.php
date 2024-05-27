<?php

namespace Database\Seeders;

use App\Models\component;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class componentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 

        $componentsRecords = [
            [
                'id' => 1,
                'title' => 'lenovo T560',
                'MadeIn' => 'USA',
                'publication_date' => '2015-05-04',
                'description' =>'Lenovo ThinkPad T560 Business Laptop, with 16GB RAM and 1TB of data.
                Intel Core i5-6300U (Dual Core, up to 2.8 GHz with Turbo Boost, 3MB Cache), long lasting battery.
                Operating System: Windows 10 pro 64bit-Multi-language supports English, Spanish, French.
                Display: 15.6" screen with HD 1366 x 768 resolution. Webcam, Bluetooth.
                Refurbished: In excellent condition, tested and cleaned by Amazon qualified vendors. 90-days Warranty.' ,
                'price' => 550.70,
                'cover_image' => 'https://cdn.bargainhardware.co.uk/media/product/d16/lenovo-thinkpad-t560-15-6-laptop-0e8.jpg'
            ],
            [
                'id' => 2,
                'title' => 'samsung tab s7',
                'MadeIn' => 'Vietnam',
                'publication_date' => '2021-05-15',
                'description' =>'Body: 284.8x185.0x6.3mm, 608g; Glass front, aluminum back, aluminum frame; Stylus support.
                Display: 12.40" TFT, 1600x2560px resolution, 14.4:9 aspect ratio, 243ppi.
                Chipset 5G: Qualcomm SM7225 Snapdragon 750G 5G (8 nm): Octa-core (2x2.2 GHz Kryo 570 & 6x1.8 GHz Kryo 570); Adreno 619.
                Chipset Wi-Fi: Qualcomm SM7325 Snapdragon 778G 5G (6 nm): Octa-core (4x2.4 GHz Kryo 670 & 6x1.8 GHz Kryo 670); Adreno 642L.
                Memory: 64GB 4GB RAM, 128GB 6GB RAM, 256 GB 8GB RAM; microSDXC (dedicated slot).
                OS/Software: Android 11, One UI 3.1.
                Rear camera: 8 MP, AF.
                Front camera: 5 MP.
                Video capture: Rear camera: 1080p@30fps; Front camera: 1080p@30fps.
                Battery: 10090mAh; Fast charging 45W, 100% in 190 min (advertised).
                Misc: Accelerometer, gyro, proximity, compass; Samsung DeX.' ,
                'price' => 350.70,
                'cover_image' => 'https://fdn.gsmarena.com/imgroot/reviews/21/samsung-galaxy-tab-s7-fe/-728x314/gsmarena_001.jpg'
            ],
            [
                'id' => 3,
                'title' => 'JBL Tune 520BT',
                'MadeIn' => 'Turkey',
                'publication_date' => '2020-09-20',
                'description' =>'Installment options up to 3 months Installments 
                Brand	JBL
                Model Name	JBL Tune 520BT Multi Connect Wireless Headphones, Black
                Colour	Black
                Form Factor	On Ear
                Connectivity Technology	Wireless
                About this product
                Up to 57 hours of battery life and fast charging (5 minutes = 3 hours)
                Bluetooth connection 5.3
                Lightweight, comfortable and foldable design
                Weight: 157(g)' ,
                'price' => 60.00,
                'cover_image' => 'https://cdn.cimri.io/image/1200x1200/jbl-tune-520bt-bluetooth-kulaklik_865067972.jpg'
            ],
          
            
        ];

        component::insert($componentsRecords);
    }
}
