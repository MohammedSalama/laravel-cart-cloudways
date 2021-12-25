<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Apple MacBook Pro 16',
                'details' => 'Apple M1 Pro , 16 GPU , 16 GB , 512 GB SSD',
                'description' => 'Every Mac comes with a one-year limited warranty 
                and up to 90 days of complimentary technical support. AppleCare+ for
                Mac extends your coverage from your AppleCare+ purchase date and adds
                up to two incidents of accidental damage protection every 12 months, 
                each subject to a service fee of $99 for screen damage or external enclosure damage, 
                or $299 for other damage',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'details' => '13.3 inch , 8 GB , DDR4 SDRAM , 256 GB',
                'description' => '
                PC power that’s smartphone thin. Our lightest Galaxy Book yet gives you a powerful Intel® 11th
                Gen Core™ processor, Intel® Evo™ certification, an advanced AMOLED screen and comes equipped
                with our latest wi-fi chip. Finish important projects, download huge files fast or watch movies 
                in brilliant color. Discover the perfect mix of portability and productivity.
                ',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];

        foreach($products as $key => $value)
        {
            Product::create($value);
        }
    }
}
