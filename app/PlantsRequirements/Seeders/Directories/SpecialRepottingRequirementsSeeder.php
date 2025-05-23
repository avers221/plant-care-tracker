<?php

namespace App\PlantsRequirements\Seeders\Directories;

use App\PlantsRequirements\Models\Directories\SpecialRepottingRequirement;
use Illuminate\Database\Seeder;

class SpecialRepottingRequirementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getReasons() as $method){
            SpecialRepottingRequirement::updateOrCreate(
                ['name' => $method['name']],
                $method
            );
        }
    }

    protected function getReasons(): array
    {
        return [
            [
                "name" => "Корни заполнили весь горшок",
                "slug" => "roots-filled-pot",
                "description" => "Когда корневая система полностью заполняет горшок и начинает вылезать через дренажные отверстия, растение нуждается в пересадке в более просторный контейнер."
            ],
            [
                "name" => "Загнивание корней",
                "slug" => "root-rot",
                "description" => "Если растение начинает показывать признаки загнивания корней, такие как неприятный запах или коричневые пятна, необходимо пересаживать растение в свежую почву с хорошим дренажем."
            ],
            [
                "name" => "Плохая дренажная способность почвы",
                "slug" => "poor-soil-drainage",
                "description" => "Если почва в горшке слишком плотная и не имеет хорошего дренажа, это может привести к застою воды, что в свою очередь повреждает корни. В таком случае следует пересаживать растение в более подходящий субстрат."
            ],
            [
                "name" => "Истощение питательных веществ",
                "slug" => "nutrient-depletion",
                "description" => "Когда почва теряет свою питательную ценность (особенно при долгом нахождении в одном горшке), растение может испытывать дефицит необходимых веществ. Пересадка в свежую почву поможет решить эту проблему."
            ],
            [
                "name" => "Рост замедлился или остановился",
                "slug" => "growth-slowing",
                "description" => "Если растение перестаёт расти, это может быть признаком того, что оно переполнено корнями или почва стала слишком бедной. Пересадка может дать растению новые условия для роста."
            ],
            [
                "name" => "Переувлажнение почвы",
                "slug" => "overwatering",
                "description" => "Частое переувлажнение может привести к затоплению корней, что вызывает их загнивание. Пересадка в новый горшок с дренажными отверстиями и свежим субстратом помогает избежать этих проблем."
            ]
        ];
    }
}
