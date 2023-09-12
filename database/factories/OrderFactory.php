<?php

namespace Database\Factories;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'session_id' => Str::uuid(),
            'total' => $this->faker->randomFloat(2, 0, 9000),
            'status' => $this->faker->randomElement([OrderStatusEnum::CART,OrderStatusEnum::PAID,OrderStatusEnum::PENDING,
                OrderStatusEnum::CANCELED])
        ];
    }
}
