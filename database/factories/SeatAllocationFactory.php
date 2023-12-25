<?php

namespace Database\Factories;

use App\Models\Trip;
use App\Models\User;
use App\Models\SeatAllocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SeatAllocation>
 */
class SeatAllocationFactory extends Factory
{
    protected $model = SeatAllocation::class;
    public function definition(): array
    {
        return [
            'trip_id' => Trip::factory(),
            'user_id' => User::factory(),
            'seat_number' => $this->faker->unique()->numberBetween(1, 36),
        ];
    }
}
