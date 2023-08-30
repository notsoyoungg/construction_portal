<?php

namespace Database\Seeders;

use App\Models\CharacteristicSnow;
use Illuminate\Database\Seeder;

class CharacteristicSnowSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'city' => 'Актау',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Актобе',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Алматы',
                'category' => 2,
                'snow_value' => 1.2,
            ],
            [
                'city' => 'Аральск',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Аркалык',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Атбасар',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Атырау',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Аягоз',
                'category' => 2,
                'snow_value' => 1.2,
            ],
            [
                'city' => 'Балкаш',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Баянаул',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Ерейментау',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Есиль',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Жанаозен',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Жанатас',
                'category' => 4,
                'snow_value' => 1.8,
            ],
            [
                'city' => 'Жезказган',
                'category' => 2,
                'snow_value' => 1.2,
            ],
            [
                'city' => 'Житикара',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Зайсан',
                'category' => 2,
                'snow_value' => 1.2,
            ],
            [
                'city' => 'Казалы',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Караганды',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Каражал',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Кокшетау',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Костанай',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Купсары',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Кызылорда',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Нур-Султан',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Павлодар',
                'category' => 2,
                'snow_value' => 1.2,
            ],
            [
                'city' => 'Петропавловск',
                'category' => 4,
                'snow_value' => 1.8,
            ],
            [
                'city' => 'Риддер',
                'category' => 9,
                'snow_value' => 5.6,
            ],
            [
                'city' => 'Семей',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Талдыкорган',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Тараз',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Туркистан',
                'category' => 2,
                'snow_value' => 1.2,
            ],
            [
                'city' => 'Уральск',
                'category' => 4,
                'snow_value' => 1.8,
            ],
            [
                'city' => 'Усть-Каменогорск',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Шалкар',
                'category' => 2,
                'snow_value' => 1.2,
            ],
            [
                'city' => 'Шар',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Шымкент',
                'category' => 3,
                'snow_value' => 1.5,
            ],
            [
                'city' => 'Экибастуз',
                'category' => 1,
                'snow_value' => 0.8,
            ],
            [
                'city' => 'Эмба',
                'category' => 3,
                'snow_value' => 1.5,
            ],
        ];

        foreach ($items as $item) {
            CharacteristicSnow::create($item);
        }
    }
}
