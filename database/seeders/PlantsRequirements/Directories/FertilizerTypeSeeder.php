<?php

namespace Database\Seeders\PlantsRequirements\Directories;

use App\PlantsRequirements\Models\Directories\FertilizerType;
use Illuminate\Database\Seeder;

class FertilizerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getTypes() as $method){
            FertilizerType::updateOrCreate(
                ['name' => $method['name']],
                $method
            );
        }
    }

    protected function getTypes(): array
    {
        return [
            [
                "name" => "Азотные удобрения",
                "slug" => "nitrogen-fertilizers",
                "description" => "Содержат в основном азот (N), стимулируют рост зелёной массы. Подходят для декоративно-лиственных растений. Пример: мочевина, аммиачная селитра."
            ],
            [
                "name" => "Фосфорные удобрения",
                "slug" => "phosphorus-fertilizers",
                "description" => "Богаты фосфором (P), способствуют развитию корневой системы и цветению. Используются при пересадках и в фазу бутонизации. Пример: суперфосфат."
            ],
            [
                "name" => "Калийные удобрения",
                "slug" => "potassium-fertilizers",
                "description" => "Содержат калий (K), повышают устойчивость растений к болезням и неблагоприятным условиям. Пример: сульфат калия, калийная соль."
            ],
            [
                "name" => "Комплексные удобрения",
                "slug" => "compound-fertilizers",
                "description" => "Содержат несколько элементов (NPK). Универсальны, подходят для большинства домашних и садовых растений. Пример: удобрение типа 'Фертика', 'Агрикола'."
            ],
            [
                "name" => "Органические удобрения",
                "slug" => "organic-fertilizers",
                "description" => "Происходят из натуральных источников: перегной, компост, навоз, биогумус. Улучшают структуру почвы и микрофлору, но могут иметь специфический запах."
            ],
            [
                "name" => "Минеральные удобрения",
                "slug" => "mineral-fertilizers",
                "description" => "Синтетического происхождения, точная дозировка питательных веществ. Быстрый эффект, но требует осторожности в применении во избежание передозировки."
            ],
            [
                "name" => "Микроудобрения",
                "slug" => "micronutrient-fertilizers",
                "description" => "Содержат микроэлементы: магний, железо, бор, цинк и др. Используются при дефиците конкретных веществ, часто в виде спрея или добавки к основному питанию."
            ]
        ];
    }
}
