<?php

namespace Database\Seeders;

use App\Models\Cup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cups=[
            [
                'location'=>'Elx-Carrus-105',
                'client_id'=>1,
            ]
        ];

        foreach($cups as $cup){
            Cup::create($cup);
        }
        
        
        
    }
}
