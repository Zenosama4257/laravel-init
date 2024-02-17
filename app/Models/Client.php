<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
      'contact_name',
      'nif',
      'simel',
      'license',
      'rate',
      'social_reason',
      'all_cups',
      'url',


  ];
}
