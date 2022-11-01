<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => '資生堂', 'email' => 'shiseido@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('shiseido0000')]);
        User::create(['name' => '花王', 'email' => 'kao@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('kao0000')]);
        User::create(['name' => 'カネボウ', 'email' => 'kanebo@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('kanebo0000')]);
        User::create(['name' => 'シャネル', 'email' => 'chanel@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('chanel0000')]);
        User::create(['name' => 'アルビオン', 'email' => 'albion@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('albion0000')]);
        User::create(['name' => 'コーセー', 'email' => 'kose@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('kose0000')]);
        User::create(['name' => 'ポーラ', 'email' => 'pola@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('pola0000')]);
        User::create(['name' => 'ノエビア', 'email' => 'noevir@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('noevir0000')]);
        User::create(['name' => 'ちふれ', 'email' => 'chifure@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('chifure0000')]);
        User::create(['name' => '開発部', 'email' => 'div@testmail.com', 'email_verified_at' => now(), 'password' => bcrypt('div0000')]);
    }
}
