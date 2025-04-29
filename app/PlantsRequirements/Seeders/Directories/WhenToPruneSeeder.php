<?php

namespace App\PlantsRequirements\Seeders\Directories;

use App\PlantsRequirements\Models\Directories\WhenToPrune;
use Illuminate\Database\Seeder;

class WhenToPruneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getTimings() as $method){
            WhenToPrune::updateOrCreate(
                ['name' => $method['name']],
                $method
            );
        }
    }

    protected function getTimings(): array
    {
        return [
            [
                "name" => "Весной",
                "slug" => "spring",
                "description" => "Весна — идеальное время для обрезки большинства растений, особенно до начала активного роста. Удаляют повреждённые или слабые побеги, формируют крону."
            ],
            [
                "name" => "Летом",
                "slug" => "summer",
                "description" => "Летом можно делать лёгкую санитарную и формирующую обрезку, особенно после цветения. Также это время для прищипки побегов, чтобы стимулировать ветвление."
            ],
            [
                "name" => "Осенью",
                "slug" => "autumn",
                "description" => "Осенью проводят санитарную обрезку перед зимовкой: удаляют засохшие или больные ветви. Но не стоит сильно укорачивать побеги, чтобы не ослабить растение перед холодами."
            ],
            [
                "name" => "Зимой",
                "slug" => "winter",
                "description" => "Зимняя обрезка применяется в основном для древесных растений в состоянии покоя. Требует осторожности, так как может быть стрессовой при недостаточном освещении и температуре."
            ],
            [
                "name" => "После цветения",
                "slug" => "after-flowering",
                "description" => "Некоторые растения, особенно цветущие, обрезаются сразу после завершения цветения. Это помогает заложить новые бутоны и сохранить декоративный вид."
            ],
            [
                "name" => "По мере необходимости",
                "slug" => "as-needed",
                "description" => "Обрезку можно проводить вне зависимости от сезона, если необходимо удалить сухие, больные или мешающие росту части растения."
            ]
        ];
    }
}
