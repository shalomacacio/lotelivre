<?php

namespace App\Entities;

use App\Entities\BlogCategoria;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Blog.
 *
 * @package namespace App\Entities;
 */
class Blog extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'user_id',
      'blog_categoria_id',
      'img',
      'titulo',
      'texto',
    ];


    //Relationship
    public function categoria()
    {
        return $this->belongsTo('App\Entities\BlogCategoria', 'blog_categoria_id', 'id');
    }

}
