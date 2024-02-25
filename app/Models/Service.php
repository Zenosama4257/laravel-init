<?php

namespace App\Models;

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


}
