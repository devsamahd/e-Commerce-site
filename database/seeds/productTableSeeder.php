<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new \App\product([
       	'imagePath' => 'src/images/img1.jpg',
       	'title' => 'iPhone 11',
       	'description' => 'Latest phone by Apple inc. -durable -beautiful -totes worth it price.',
       	'price' => 899.90
       ]);
       $product->save();

       $product = new \App\product([
       	'imagePath' => 'src/images/infinix.jpg',
       	'title' => 'infinix S5',
       	'description' => 'Latest phone by Apple inc. -durable -beautiful -totes worth it price.',
       	'price' => 199.90
       ]);
       $product->save();
       
       $product = new \App\product([
       	'imagePath' => 'src/images/img2.jpg',
       	'title' => 'xiomi mi 9',
       	'description' => 'Latest phone by xiomi. -durable -beautiful -totes worth it price.',
       	'price' => 299.90
       ]);
       $product->save();
       
       $product = new \App\product([
       	'imagePath' => 'src/images/samsung.jpg',
       	'title' => 'samsung S10',
       	'description' => 'Latest phone by Samsung mobiles. -durable -beautiful -totes worth it price.',
       	'price' => 599.90
       ]);
       $product->save();

       $product = new \App\product([
       	'imagePath' => 'src/images/infinix.jpg',
       	'title' => 'iPhone 11',
       	'description' => 'Latest phone by Apple inc. -durable -beautiful -totes worth it price.',
       	'price' => 899.90
       ]);
       $product->save();


    }
}
