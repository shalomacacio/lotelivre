<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class EmpreendimentoItens.
 *
 * @package namespace App\Entities;
 */
class EmpreendimentoItens extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'img',
      'titulo',
      'descricao',
      'empreendimento_id'
    ];

}
