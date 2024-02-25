<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicecup extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'cost',
        'cup_id',
        'unitprice_id',
        'service_id',
    ];

    public function cup(){
        return $this->belongsTo(Cup::class)->withDefault();
    }

    public function unitprice(){
        return $this->belongsTo(Unitprice::class)->withDefault();
    }

    public function service(){
        return $this->belongsTo(Service::class)->withDefault();
    }
}
