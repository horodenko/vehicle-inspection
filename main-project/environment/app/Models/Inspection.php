<?php

namespace App\Models;

class Inspection extends BaseModel
{
    protected $table = 'revisao';

    protected $fillable = [
        'data_revisao',
        'resultado',
        'observacao',
        'id_veiculo'
    ];
}
