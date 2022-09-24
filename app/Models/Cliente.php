<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'consecutivo',
        'nombre',
        'direccion',
        'fecha_nac',
        'telefono',
    ];
public function getDesciptionAttribute($value)
{
    return substr ($value,1,200);
}
public function user()
{
    return $this->belongsTo(User::class);
}

}
