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

      'nome',
      'cnpj',
      'matricula',
      'dt_lancamento',
      'estado_id',
      'cidade_id',
      'contato_1',
      'contato_2',
      'zap',
      'email',
      'url_video',
      'texto_destaque',
      'texto_descritivo',

    ];

    protected $casts = [
      'url_video_destaque' => 'boolean',
    ];

    public function lotes(){
      return $this->hasMany('\App\Entities\Lote');
    }

    public function destaque(){
      return $this->hasOne('\App\Entities\EmpreendimentoDestaque');
    }

    public function imagens(){
      return $this->hasMany('\App\Entities\EmpreendimentoImage');
    }



}
