<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['category_id' => 1, 'name' => 'ホワイトRV ソフナー', 'price' => 7700, 'user_id' => 1]);
        Product::create(['category_id' => 1, 'name' => 'キュレル', 'price' => 1980, 'user_id' => 2]);
        Product::create(['category_id' => 1, 'name' => 'モイスチャー フロウ ローション', 'price' => 5500, 'user_id' => 3]);
        Product::create(['category_id' => 1, 'name' => 'リフトモイスト', 'price' => 3300, 'user_id' => 1]);
        Product::create(['category_id' => 2, 'name' => 'ル リフト フリュイド', 'price' => 16480, 'user_id' => 4]);
        Product::create(['category_id' => 2, 'name' => 'エクサージュホワイト ホワイト ライズ', 'price' => 5890, 'user_id' => 5]);
        Product::create(['category_id' => 2, 'name' => 'エクサージュ モイスト アドバンス ミルク', 'price' => 5700, 'user_id' => 5]);
        Product::create(['category_id' => 2, 'name' => 'グレイスワン リンクルケア', 'price' => 1800, 'user_id' => 6]);
        Product::create(['category_id' => 3, 'name' => 'リンクルショット', 'price' => 14850, 'user_id' => 7]);
        Product::create(['category_id' => 3, 'name' => 'キュレル美容液', 'price' => 2045, 'user_id' => 2]);
        Product::create(['category_id' => 3, 'name' => 'ヴェイルオブデイ', 'price' => 5500, 'user_id' => 3]);
        Product::create(['category_id' => 4, 'name' => 'ノエビア99プラス', 'price' => 4500, 'user_id' => 8]);
        Product::create(['category_id' => 4, 'name' => 'ノエビア105', 'price' => 6284, 'user_id' => 8]);
        Product::create(['category_id' => 4, 'name' => 'ノエビア80', 'price' => 2480, 'user_id' => 8]);
        Product::create(['category_id' => 4, 'name' => 'ピールオフパック', 'price' => 506, 'user_id' => 9]);
        Product::create(['category_id' => 4, 'name' => 'クリアターン エッセンス', 'price' => 1826, 'user_id' => 6]);
        Product::create(['category_id' => 4, 'name' => 'クリアターン 超濃厚保湿', 'price' => 1222, 'user_id' => 6]);

        for ($i = 1; $i <= 100; ++$i) {
            Product::create([
                'category_id' => rand(1, 4),
                'name' => '試作品 No.'.$i,
                'price' => rand(4, 10) * 1000,
                'user_id' => 10,
            ]);
        }
    }
}
