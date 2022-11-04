<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = [
            [
                'name' => 'Admin',
            
            ],
            [
                'name' => 'Doctor',
            
            ],
            [
                'name' => 'Pasien',
            
            ],
            
        ];
        //this array $type_user for insert data
        TypeUser::insert($type_user);
    }
}
