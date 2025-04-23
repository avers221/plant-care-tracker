<?php

namespace Database\Seeders\PlantsRequirements\Directories;

use App\PlantsRequirements\Models\Directories\Placement;
use Illuminate\Database\Seeder;

class PlacementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getPlacements() as $method){
            Placement::updateOrCreate(
                ['name' => $method['name']],
                $method
            );
        }
    }

    protected function getPlacements(): array
    {
        return [
            [
                "name" => "Подоконник (южный)",
                "slug" => "south-facing-windowsill",
                "description" => "Находится на подоконнике с южной стороны. Получает максимальное количество прямого солнечного света в течение дня. Подходит для светолюбивых растений."
            ],
            [
                "name" => "Подоконник (восточный/западный)",
                "slug" => "east-west-facing-windowsill",
                "description" => "Расположен на окне, выходящем на восток или запад. Умеренное количество солнечного света, особенно утром или вечером. Подходит для большинства домашних растений."
            ],
            [
                "name" => "Подоконник (северный)",
                "slug" => "north-facing-windowsill",
                "description" => "Северное окно даёт рассеянный, слабый свет. Подходит для теневыносливых растений, но может потребоваться дополнительная подсветка."
            ],
            [
                "name" => "В глубине комнаты",
                "slug" => "interior-room",
                "description" => "Находится вдали от окон. Освещённость минимальная, чаще всего требуется дополнительное освещение. Подходит только для очень теневыносливых растений."
            ],
            [
                "name" => "Балкон / лоджия",
                "slug" => "balcony-loggia",
                "description" => "Открытое или полуоткрытое пространство с хорошей вентиляцией и освещением. Подходит для летнего размещения растений, но требует защиты от прямых солнечных лучей и ветра."
            ],
            [
                "name" => "Улица / сад",
                "slug" => "outdoors-garden",
                "description" => "Растение размещено на открытом воздухе. Необходимо учитывать сезон, температуру и уровень осадков. Подходит для растений, устойчивых к климатическим условиям региона."
            ],
            [
                "name" => "Теплица",
                "slug" => "greenhouse",
                "description" => "Закрытое, контролируемое пространство с повышенной влажностью и температурой. Идеально для выращивания тропических и теплолюбивых растений."
            ]
        ];
    }
}
