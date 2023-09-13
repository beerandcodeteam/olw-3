<?php

namespace Database\Seeders;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Models\Sku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($session_id = null): void
    {
        $cart = Order::factory()
            ->count(1)
            ->create([
                'session_id' => $session_id ?? Str::uuid(),
                'status' => OrderStatusEnum::CART
            ]);

        $cart->each(function ($cart) {
            $sku = Sku::with('product')->inRandomOrder()->take(random_int(1, 15))->get();

            $total = 0;
            $cart->total = 0;

            $sku->each(function ($item) use ($cart, $total) {
                $qtd = random_int(1, 3);
                $cart->skus()->attach([$item->id => [
                    'quantity' => $qtd,
                    'unitary_price' => $item->price,
                    'product' => $item->product->toJson()
                ]]);

                $total = $qtd * $item->price;

                $cart->total += $total;
            });

            $cart->save();
        });
    }
}
