<?php

namespace App\Models;

class Vehicle extends BaseModel
{
    protected $table = 'veiculo';

    protected $fillable = [
        'placa',
        'tipo_veiculo'
    ];
}
