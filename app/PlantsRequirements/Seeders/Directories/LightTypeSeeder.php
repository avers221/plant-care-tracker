<?php

namespace App\PlantsRequirements\Seeders\Directories;

use App\PlantsRequirements\Models\Directories\LightType;
use Illuminate\Database\Seeder;

class LightTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getTypes() as $method){
            LightType::updateOrCreate(
                ['name' => $method['name']],
                $method
            );
        }
    }

    protected function getTypes(): array
    {
        return [
            [
                "name" => "Яркий прямой свет",
                "slug" => "bright-direct-light",
                "description" => "Прямое солнечное освещение в течение нескольких часов в день. Обычно доступен у южных окон. Подходит для светолюбивых растений, таких как суккуленты или кактусы."
            ],
            [
                "name" => "Яркий рассеянный свет",
                "slug" => "bright-indirect-light",
                "description" => "Светлый участок с большим количеством света, но без прямых солнечных лучей. Часто встречается у восточных и западных окон, особенно с полупрозрачной занавеской. Идеален для большинства комнатных растений."
            ],
            [
                "name" => "Полутень",
                "slug" => "partial-shade",
                "description" => "Умеренное освещение, где свет рассеян и слабее, чем при ярком освещении. Обычно находится в метре или двух от окна. Подходит для растений, не переносящих прямой свет, например, папоротников."
            ],
            [
                "name" => "Тень",
                "slug" => "full-shade",
                "description" => "Очень слабое освещение, часто в глубине помещения вдали от окон. Подходит лишь для самых теневыносливых растений, таких как сансевиерия или замиокулькас."
            ],
            [
                "name" => "Искусственный свет",
                "slug" => "artificial-light",
                "description" => "Освещение от ламп (люминесцентных, LED или фитоламп). Используется при недостатке естественного света или для полного замещения. Может быть настроено под нужды конкретных видов растений."
            ]
        ];
    }
}
