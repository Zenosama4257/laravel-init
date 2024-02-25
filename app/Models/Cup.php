<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'id_client',
    ];

    public function client(){
        return $this->belongsTo(Client::class)->withDefault();
    }
}
