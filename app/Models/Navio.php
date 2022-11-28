<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrfail($id)
 * @method static count()
 */
class Navio extends Model
{
    protected $table = 'navios';
    protected $fillable = [
        'nome',
        'marca',
        'porto_de_registo',
        'ano_de_chegada',
        'ind_chamada',
        'grt_do_navio',
        'nome_do_agente',
        'endereco_do_agente'
    ];

    use HasFactory;
}
