<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients=[
            [
                'nif'=>'21992498J',
                'simel'=>'ES625484IT',
                'contact_name'=>'Jose Antonio Ramos',
                'social_reason'=>'Alquilar',
                'license'=>'',
                'rate'=>18,
                'url'=>'www.joseantonio.com',
            ]
        ];

        foreach($clients as $client){
            Client::create($client);
        }
        
        
        
    }
}
