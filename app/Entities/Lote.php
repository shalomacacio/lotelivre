<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Lote.
 *
 * @package namespace App\Entities;
 */
class Lote extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'empreendimento_id',
      'quadra',
      'lote',
      'construção',
      'vendido',
      'valor',
      'rgi_individual',
      'area',
      'frente',
      'fundo',
      'esquerda',
      'direita',
      'frente_com',
      'fundo_com',
      'esquerda_com',
      'direitra_com',
      'descricao',
      'obs'
    ];

    public function empreendimento()
    {
        return $this->belongsTo('App\Entities\Empreendimento');
    }

}
