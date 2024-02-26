<?php

namespace Database\Seeders;

use App\Models\Facthead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class FactheadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factheads=[
            [
                'company_info'=>'Banco Sabadell ES2145879OP Elx-Almansa-201 652147898',
                'fact_date'=>'20/01/12',
                'servicecup_id'=>1,
            ]
        ];

        foreach($factheads as $facthead){
            Facthead::create($facthead);
        }
    }
}
