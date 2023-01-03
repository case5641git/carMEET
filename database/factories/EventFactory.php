<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dummyDate = $this->faker->dateTimeThisMonth;

        return [
            'name' => $this->faker->realText($maxNbChars = 20, $indexSize = 1),
            'content' => $this->faker->realText,
            'max_people' => $this->faker->numberBetween(1,20),
            'open_flag' => $this->faker->boolean,
            'start_date' => $dummyDate->format('Y-m-d H:i:s'),
            'end_date' => $dummyDate->modify('+1hour')->format('Y-m-d H:i:s')
        ];
    }
}
