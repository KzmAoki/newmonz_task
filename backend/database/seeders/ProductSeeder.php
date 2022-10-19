<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['category_id' => 1, 'maker' => '資生堂', 'name' => 'ホワイトRV ソフナー', 'price' => 7700]);
        Product::create(['category_id' => 1, 'maker' => '花王', 'name' => 'キュレル', 'price' => 1980]);
        Product::create(['category_id' => 1, 'maker' => 'カネボウ', 'name' => 'モイスチャー フロウ ローション', 'price' => 5500]);
        Product::create(['category_id' => 1, 'maker' => '資生堂', 'name' => 'リフトモイスト', 'price' => 3300]);
        Product::create(['category_id' => 2, 'maker' => 'シャネル', 'name' => 'ル リフト フリュイド', 'price' => 16480]);
        Product::create(['category_id' => 2, 'maker' => 'アルビオン', 'name' => 'エクサージュホワイト ホワイト ライズ', 'price' => 5890]);
        Product::create(['category_id' => 2, 'maker' => 'アルビオン', 'name' => 'エクサージュ モイスト アドバンス ミルク', 'price' => 5700]);
        Product::create(['category_id' => 2, 'maker' => 'コーセー', 'name' => 'グレイスワン リンクルケア', 'price' => 1800]);
        Product::create(['category_id' => 3, 'maker' => 'ポーラ', 'name' => 'リンクルショット', 'price' => 14850]);
        Product::create(['category_id' => 3, 'maker' => '花王', 'name' => 'キュレル美容液', 'price' => 2045]);
        Product::create(['category_id' => 3, 'maker' => 'カネボウ', 'name' => 'ヴェイルオブデイ', 'price' => 5500]);
        Product::create(['category_id' => 4, 'maker' => 'ノエビア', 'name' => 'ノエビア99プラス', 'price' => 4500]);
        Product::create(['category_id' => 4, 'maker' => 'ノエビア', 'name' => 'ノエビア105', 'price' => 6284]);
        Product::create(['category_id' => 4, 'maker' => 'ノエビア', 'name' => 'ノエビア80', 'price' => 2480]);
        Product::create(['category_id' => 4, 'maker' => 'ちふれ', 'name' => 'ピールオフパック', 'price' => 506]);
        Product::create(['category_id' => 4, 'maker' => 'コーセー', 'name' => 'クリアターン エッセンス', 'price' => 1826]);
        Product::create(['category_id' => 4, 'maker' => 'コーセー', 'name' => 'クリアターン 超濃厚保湿', 'price' => 1222]);

        for ($i = 1; $i <= 100; ++$i) {
            Product::create([
                'category_id' => rand(1, 4),
                'maker' => '開発部',
                'name' => '試作品 No.'.$i,
                'price' => rand(4, 10) * 1000,
            ]);
        }
    }
}
