<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Empreendimento.
 *
 * @package namespace App\Entities;
 */
class Empreendimento extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nome_fantasia',
      'razao_social',
      'cnpj',
      'matricula',
      'cartorio',
      'dt_aprovacao'

    ];

}
