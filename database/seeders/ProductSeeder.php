<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy M31',
                'price' => '15677',
                'description' => 'The Samsung Galaxy M31 sports a big 6.4-inch display and has a waterdrop notch at the top. It has thin bezels around the AMOLED display which helps it stand out among the competition. The Galaxy M31 is comfortable to hold in the hand but is a little heavy at 191g. The weight of the smartphone is mainly because of the big 6,000mAh battery that it packs.',
                'category' => 'Mobile phone',
                'gallery' => 'https://i.gadgets360cdn.com/products/large/samsung-galaxy-m31-393x800-1585211126.jpg?downsize=*:420&output-quality=80'
            ],
            [
                'name' => 'DELL G5 15 SE Ryzen',
                'price' => '80990',
                'description' => 'Bring home the Dell G5 gaming laptop that features a 39.62 cm (15.60) FHD anti-glare display that offers a wide viewing angle. The combination of technologies such as AMD Ryzen 4000 Series Mobile Processors with AMD Radeon graphics featured in it make it a powerful gaming machine.',
                'category' => 'Laptop',
                'gallery' => 'https://rukminim1.flixcart.com/image/416/416/kex5ci80/computer/f/n/k/dell-na-gaming-laptop-original-imafvhkmrntmrfqz.jpeg?q=70'
            ],
            [
                'name' => 'AmazonBasics 139cm (55 inches) Fire TV',
                'price' => '39999',
                'description' => 'AmazonBasics 55 inch 4K Ultra HD Fire TV uses the power of cutting edge technology to bring you a seamless and immersive TV viewing experience.  The Ultra Bright Screen is Powered by Amlogic 9th generation imaging engine for unmatched picture quality and enhanced with Dolby Vision to create stark contrasts and defined highlights',
                'category' => 'Fire Tv',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/81c5klKpUdL._AC_SL1500_.jpg'
            ],
            [
                'name' => 'Whirlpool 6 kg Fully Automatic Washing Machine',
                'price' => '13740',
                'description' => 'Bring home this 6 kg washing machine from Whirlpool and say goodbye to laundry woes. It features a Hard-water Wash, a Delay Wash feature, and ZPF Technology to ensure a thorough wash',
                'category' => 'Washing Machine',
                'gallery' => 'https://rukminim1.flixcart.com/image/416/416/km57hjk0/washing-machine-new/b/9/x/wm-royal-6-0-genx-grey-5ymw-whirlpool-original-imagf3xfms7xrtzk.jpeg?q=70'
            ]
        ]);
    }
}
