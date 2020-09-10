<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class BannerPromocional.
 *
 * @package namespace App\Entities;
 */
class BannerPromocional extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'img',
      'ativo',
      'titulo',
      'subtitulo',
      'span',
      'txt_button'
    ];

}
