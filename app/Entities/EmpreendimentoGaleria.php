<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class EmpreendimentoGaleria.
 *
 * @package namespace App\Entities;
 */
class EmpreendimentoGaleria extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'empreendimento_id',
      'img',
      'titulo',
      'texto'
    ];

}
