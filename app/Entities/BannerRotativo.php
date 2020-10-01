<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class BannerRotativo.
 *
 * @package namespace App\Entities;
 */
class BannerRotativo extends Model implements Transformable
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
      'font_collor',
    ];

    protected $casts = [
      'ativo' => 'boolean'
   ];

}
