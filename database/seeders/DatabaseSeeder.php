<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // 1. Phone Brands
        $brands = [
            ['name' => 'Apple', 'color' => '#000000', 'text' => 'Ремонт iPhone любой сложности', 'img' => '', 'img_slogan' => ''],
            ['name' => 'Samsung', 'color' => '#1428A0', 'text' => 'Ремонт смартфонов Samsung Galaxy', 'img' => '', 'img_slogan' => ''],
            ['name' => 'Xiaomi', 'color' => '#FF6700', 'text' => 'Быстрый ремонт Xiaomi и Redmi', 'img' => '', 'img_slogan' => ''],
            ['name' => 'Huawei', 'color' => '#FF0000', 'text' => 'Качественный ремонт Huawei и Honor', 'img' => '', 'img_slogan' => ''],
        ];

        foreach ($brands as $brand) {
            DB::table('phonebrands')->insert(array_merge($brand, ['created_at' => $now, 'updated_at' => $now]));
        }

        // 2. Services
        $services = [
            ['name' => 'Замена экрана', 'price' => 3500],
            ['name' => 'Замена аккумулятора', 'price' => 1500],
            ['name' => 'Диагностика', 'price' => 0],
            ['name' => 'Ремонт после воды', 'price' => 2500],
            ['name' => 'Замена разъема зарядки', 'price' => 1200],
        ];

        foreach ($services as $service) {
            DB::table('services')->insert(array_merge($service, ['created_at' => $now, 'updated_at' => $now]));
        }

        // 3. Brand Service Prices (Pivot)
        $brandIds = DB::table('phonebrands')->pluck('id');
        $serviceIds = DB::table('services')->pluck('id');

        foreach ($brandIds as $brandId) {
            foreach ($serviceIds as $serviceId) {
                // Generate a slightly random price based on brand and service
                $basePrice = DB::table('services')->where('id', $serviceId)->value('price');
                $markup = $brandId == 1 ? 1.5 : ($brandId == 2 ? 1.2 : 1.0); // Apple is more expensive
                $finalPrice = $basePrice == 0 ? 0 : round($basePrice * $markup / 100) * 100;

                DB::table('brand_service_prices')->insert([
                    'phonebrands_id' => $brandId,
                    'services_id' => $serviceId,
                    'price' => $finalPrice,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }

        // 4. Reviews
        $adminUserId = DB::table('users')->where('role', 'admin')->value('id') ?? 1;
        $reviews = [
            ['content' => 'Отличный сервис! Починили мой айфон за 20 минут прямо при мне. Цена очень порадовала.', 'rating' => 5, 'user_id' => $adminUserId],
            ['content' => 'Утопил телефон в ванной, думал всё. Ребята восстановили за пару дней. Работает как новый!', 'rating' => 5, 'user_id' => $adminUserId],
            ['content' => 'Обращался для замены батареи на Xiaomi. Сделали быстро, дали гарантию. Рекомендую.', 'rating' => 4, 'user_id' => $adminUserId],
        ];

        foreach ($reviews as $review) {
            DB::table('reviews')->insert(array_merge($review, ['created_at' => $now, 'updated_at' => $now]));
        }

        // 5. Callbacks
        $callbacks = [
            ['device_model' => 'iPhone 13 Pro', 'name' => 'Александр', 'phone_number' => '+79991234567'],
            ['device_model' => 'Samsung Galaxy S22', 'name' => 'Мария', 'phone_number' => '+79009876543'],
        ];

        foreach ($callbacks as $callback) {
            DB::table('callbacks')->insert(array_merge($callback, ['created_at' => $now, 'updated_at' => $now]));
        }
    }
}
