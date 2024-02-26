<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cup extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'location',
        'client_id',
    ];

    public function client(){
        return $this->belongsTo(Client::class)->withDefault();
    }

    public function servicecups(){
        return $this->hasMany(Servicecup::class);
    }
}
