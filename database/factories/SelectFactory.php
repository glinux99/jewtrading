<?php

namespace Database\Factories;

use App\Models\Select;
use Illuminate\Database\Eloquent\Factories\Factory;

class SelectFactory extends Factory
{
    protected $model = Select::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();

        return [
            'type'              => $this->faker->vehicleType,
            'carburateur'       => $this->faker->vehicleFuelType,
            'marque'            => $v['brand'],
            'model'             => $v['model'],
        ];
    }
}
