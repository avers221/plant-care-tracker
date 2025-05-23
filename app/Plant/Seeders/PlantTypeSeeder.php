<?php

namespace App\Plant\Seeders;

use App\Plant\Models\PlantType;
use Illuminate\Database\Seeder;

class PlantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getTypes() as $type) {
            PlantType::updateOrCreate(
                ['name' => $type['name']],
                $type
            );
        }
    }

    protected function getTypes()
    {
        return [
            ['name' => 'Суккуленты и кактусы', 'description' => 'Минимум полива, любят солнце, легко в уходе'],
            ['name' => 'Лиственные комнатные', 'description' => 'Фикусы, монстеры, замиокулькасы и т.п. Нуждаются в регулярном поливе и влажности'],
            ['name' => 'Цветущие комнатные', 'description' => 'Орхидеи, антуриумы, герани. Требуют особого режима освещения и удобрений'],
            ['name' => 'Тропические/влажные', 'description' => 'Папоротники, калатеи, алоказии. Влажный воздух, частый полив, не переносят сухости'],
            ['name' => 'Пряные/съедобные растения', 'description' => 'Мята, базилик, розмарин, тимьян. Требуют хорошего освещения и частого полива'],
            ['name' => 'Деревья и кустарники', 'description' => 'Лимон, лавр, кофе. Большие горшки, стабильный уход, реже пересадка'],
            ['name' => 'Гидропонные или полугидропонные', 'description' => 'Растения, растущие в воде или в системе с автополивом'],
            ['name' => 'Уличные (летники, многолетники)', 'description' => 'Подвержены сезонности, зимовке, пересадке'],
        ];
    }
}
