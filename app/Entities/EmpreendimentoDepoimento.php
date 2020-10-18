<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class EmpreendimentoDepoimento.
 *
 * @package namespace App\Entities;
 */
class EmpreendimentoDepoimento extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'img',
      'nome',
      'texto',
      'empreendimento_id'
    ];

}
