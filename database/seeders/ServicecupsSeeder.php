<?php

namespace Database\Seeders;

use App\Models\Servicecup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class ServicecupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicecups=[
            [
                'cost'=>100,
                'cup_id'=>1,
                'unitprice_id'=>1,
                'service_id'=>1,
            ]
        ];

        foreach($servicecups as $servicecup){
            Servicecup::create($servicecup);
        }
        
        
        
    }
}
