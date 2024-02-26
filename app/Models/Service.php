<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
  use HasFactory, SoftDeletes;
  protected $fillable = [
    "name_service",
    "start_service",
    "deadline_service",
    "discount",
    "type_service",
    "start_discount",
    "deadline_discount"
  ];

  public function servicecups(){
    return $this->hasMany(Servicecup::class);
  }

  protected function start_service(): Attribute
  {
    return Attribute::make(
      get: fn (string $value) => Carbon::createFromFormat("Y-m-d",$value)->format('d/m/Y'),
      set: fn (string $value) => Carbon::createFromFormat('d/m/Y',$value)->format("Y-m-d"),
    );
  }

  protected function deadline_service(): Attribute
  {
    return Attribute::make(
      get: fn (string $value) => Carbon::createFromFormat("Y-m-d",$value)->format('d/m/Y'),
      set: fn (string $value) => Carbon::createFromFormat('d/m/Y',$value)->format("Y-m-d"),
    );
  }

  protected function start_discount(): Attribute
  {
    return Attribute::make(
      get: fn (string $value) => Carbon::createFromFormat("Y-m-d",$value)->format('d/m/Y'),
      set: fn (string $value) => Carbon::createFromFormat('d/m/Y',$value)->format("Y-m-d"),
    );
  }

  protected function deadline_discount(): Attribute
  {
    return Attribute::make(
      get: fn (string $value) => Carbon::createFromFormat("Y-m-d",$value)->format('d/m/Y'),
      set: fn (string $value) => Carbon::createFromFormat('d/m/Y',$value)->format("Y-m-d"),
    );
  }

}
