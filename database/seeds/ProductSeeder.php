<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        	'name' => 'LG Phone',
        	'price' => '1000',
        	'category' => 'Electronics',
        	'description' => 'new smartphone phone with much more features',
        	'gallery' => 'https://www.lg.com/us/images/MC/V60-Dual-Tile-260x260.png'
          ],
          [
        	'name' => 'Oppo Phone',
        	'price' => '2000',
        	'category' => 'Electronics',
        	'description' => 'new Oppo smartphone phone with much more features',
        	'gallery' => 'https://image.oppo.com/content/dam/oppo/common/mkt/v2/reno4/listpage/Reno4-Tagore4G-listpage-blue-v1.png'
          ],
          [
        	'name' => 'Huawei Phone',
        	'price' => '3000',
        	'category' => 'Electronics',
        	'description' => 'new huawei smartphone phone with much more features',
        	'gallery' => 'https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/list-image/phones/p40-pro/p40-pro-silver.png'
          ],
          [
        	'name' => 'Samsung Phone',
        	'price' => '4000',
        	'category' => 'Electronics',
        	'description' => 'new samsung smartphone phone with much more features',
        	'gallery' => 'https://images.samsung.com/is/image/samsung/pk-galaxy-a71-a715-sm-a715fzbgpak-back-206983822?$PD_GALLERY_L_JPG$'
          ],
    	]);
    }
}
