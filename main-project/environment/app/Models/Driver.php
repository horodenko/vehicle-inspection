<?php

namespace App\Models;

class Driver extends BaseModel
{
    protected $table = 'motorista';

    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'id_veiculo'
    ];
}
