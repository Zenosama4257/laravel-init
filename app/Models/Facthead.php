<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facthead extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'conpany_info',
        'fact_date',
        'servicecup_id',
    ];

    public function servicecup(){
        return $this->belongsTo(Servicecup::class)->withDefault();
    }

    protected function fact_date(): Attribute
  {
    return Attribute::make(
      get: fn (string $value) => Carbon::createFromFormat("Y-m-d",$value)->format('d/m/Y'),
      set: fn (string $value) => Carbon::createFromFormat('d/m/Y',$value)->format("Y-m-d"),
    );
  }
}
