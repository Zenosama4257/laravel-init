<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unitprice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'type_unit',
        'month',
        'price',
    ];

    public function servicecups(){
        return $this->hasMany(Servicecup::class);
    }
}
