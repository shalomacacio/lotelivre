<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Thumbnail.
 *
 * @package namespace App\Entities;
 */
class Thumbnail extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
      'img',
      'span',
      'link',
      'active',
      'titulo',
      'posicao',
      'span_cor'
    ];

}
