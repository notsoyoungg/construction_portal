<?php

namespace Database\Factories;

use App\Models\CeCoefficient;
use Illuminate\Database\Eloquent\Factories\Factory;

class CeCoefficientFactory extends Factory
{
    protected $model = CeCoefficient::class;

    public function definition()
    {
        return [
            'terrain_condition' => $this->faker->word(),
            'value' => $this->faker->randomFloat(),
        ];
    }
}
