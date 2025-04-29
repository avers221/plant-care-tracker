<?php

namespace App\PlantsRequirements\Seeders\Directories;

use App\PlantsRequirements\Models\Directories\RepottingFrequency;
use Illuminate\Database\Seeder;

class RepottingFrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getFrequency() as $method){
            RepottingFrequency::updateOrCreate(
                ['name' => $method['name']],
                $method
            );
        }
    }

    protected function getFrequency(): array
    {
        return [
            [
                "name" => "Каждый год",
                "slug" => "annually",
                "description" => "Растения, которые быстро растут или имеют ограниченное пространство для корней, требуют пересадки каждый год. Это помогает поддерживать их здоровье и стимулирует рост."
            ],
            [
                "name" => "Каждые 2 года",
                "slug" => "every-two-years",
                "description" => "Подходит для большинства комнатных растений, которые не требуют частой пересадки. Через два года растения обычно начинают заполнять весь горшок корнями."
            ],
            [
                "name" => "По мере необходимости",
                "slug" => "as-needed",
                "description" => "Некоторые растения пересаживаются только тогда, когда корни начинают выходить из горшка или когда почва теряет свои питательные свойства. Обычно это касается медленно растущих растений."
            ],
            [
                "name" => "Каждые 3 года и более",
                "slug" => "every-three-years-or-more",
                "description" => "Некоторые растения, такие как кактусы и суккуленты, пересаживаются реже, поскольку они растут медленно. Эти растения нуждаются в пересадке только тогда, когда горшок становится слишком тесным."
            ]
        ];
    }
}
