<?php

namespace Database\Seeders;

use App\Models\MasterData\Consultation;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consultation = [
            [
                'name'=> 'Jantung',
            
            ],
            [
                'name'=> 'Tekanan Darah',
            
            ],
            [
                'name'=> 'Ginjal',
            
            ],
            
        ];
        //this array $consultation for insert data
        Consultation::insert($consultation);
    }
}
