<?php

namespace Database\Seeders\PlantsRequirements\Directories;

use App\PlantsRequirements\Models\Directories\ApplicationMethod;
use Illuminate\Database\Seeder;

class ApplicationMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getMethods() as $method){
            ApplicationMethod::updateOrCreate(
                ['name' => $method['name']],
                $method
            );
        }
    }

    protected function getMethods()
    {
        return [
            [
                "name" => "Корневой полив",
                "slug" => "root-watering",
                "description" => "Удобрение растворяется в воде и вносится под корень растения. Наиболее распространённый способ, обеспечивает быстрое усвоение питательных веществ через корневую систему."
            ],
            [
                "name" => "Внекорневая подкормка (опрыскивание)",
                "slug" => "foliar-spray",
                "description" => "Раствор удобрения наносится на листья. Подходит для экстренной подкормки, особенно микроэлементами. Эффективен при нарушении корневого питания или хлорозе."
            ],
            [
                "name" => "Сухое внесение в почву",
                "slug" => "dry-soil-application",
                "description" => "Удобрение в гранулах или порошке вносится прямо в почву, затем поливается. Подходит для пролонгированного действия, но требует аккуратности, чтобы не обжечь корни."
            ],
            [
                "name" => "Промешивание с субстратом",
                "slug" => "mixed-with-substrate",
                "description" => "Удобрение добавляется в почву при посадке или пересадке. Обеспечивает равномерное распределение питательных веществ с самого начала роста растения."
            ],
            [
                "name" => "Внесение через фитиль",
                "slug" => "wick-application",
                "description" => "Подходит для систем с фитильным поливом. Удобрение добавляется в воду в резервуаре, откуда постепенно поступает к корням. Обеспечивает стабильное поступление веществ."
            ],
            [
                "name" => "Капельное внесение",
                "slug" => "drip-application",
                "description" => "Используется в капельном орошении: удобрение растворяется в воде и подаётся к растениям вместе с поливом. Удобен для автоматизации и точного дозирования."
            ]
        ];
    }
}
