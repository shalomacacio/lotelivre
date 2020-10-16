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
      'id',
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
      'texto_banner',
      'texto_banner_cor',
      'btn_banner_txt',
      'btn_banner_link',
      'btn_banner_cor',
      'titulo_card_1',
      'texto_card_1',
      'titulo_card_2',
      'texto_card_2',
      'url_video',
      'texto_destaque',
    ];

    // protected $casts = [
    //   'url_video_destaque' => 'boolean',
    // ];
    public function cidade(){
      return $this->belongsTo('\App\Entities\Cidade');
    }

    public function estado(){
      return $this->belongsTo('\App\Entities\Estado');
    }


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
