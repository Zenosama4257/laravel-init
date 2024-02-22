<?php

namespace Database\Seeders;

use App\Models\Unitprice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UnitpricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitprices=[
            [
                'type_unit'=>'kW/h',
                'month'=>'Febrero',
                'price'=>1,
            ],
            [
                'type_unit'=>'dias',
                'month'=>'Febrero',
                'price'=>10,
            ],
            [
                'type_unit'=>'M`3',
                'month'=>'Febrero',
                'price'=>2,
            ],
        ];

        foreach($unitprices as $unitprice){
            Unitprice::create($unitprice);
        }
        
    }
}
