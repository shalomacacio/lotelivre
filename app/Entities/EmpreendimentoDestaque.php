<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class EmpreendimentoDestaque.
 *
 * @package namespace App\Entities;
 */
class EmpreendimentoDestaque extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'img',
    'span',
    'span_color',
    'preco_antigo',
    'empreendimento_id',
    ];

    public function empreendimento(){
      return $this->belongsTo('\App\Entities\Empreendimento');
    }

}
