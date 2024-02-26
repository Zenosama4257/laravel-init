<?php
namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\ConsoIe\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class ServicesSeeder extends Seeder{
  public function run(){
    $services =[
      [
        "name_service"=>"agua",
        "start_service" => "12/10/20",
        "deadline_service" => "14/03/25",
        "discount" => 23,
        "type_service"=>"Fijo",
        "start_discount"=>"14/01/23",
        "deadline_discount" =>"14/03/23"

      ]
    ];


    foreach ($services as $service ){
      Service::create($service);
    }

  }

}

