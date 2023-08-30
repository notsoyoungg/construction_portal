<?php

namespace Database\Seeders;

use App\Models\CeCoefficient;
use Illuminate\Database\Seeder;

class CeCoefficientSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'terrain_condition' => 'Не защищенные от ветра',
                'value' => 0.8,
                ],
            [
                'terrain_condition' => 'Обычные',
                'value' => 1,
            ],
            [
                'terrain_condition' => 'Закрытые',
                'value' => 1.2,
            ],
        ];

        foreach ($items as $item) {
            CeCoefficient::create($item);
        }
    }
}
