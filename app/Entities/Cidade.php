<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cidade.
 *
 * @package namespace App\Entities;
 */
class Cidade extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'estado_id',
      'nome'
    ];

    //Relationship
    public function estado()
    {
        return $this->belongsTo('App\Entities\Estado');
    }

    public function empreendimentos()
    {
        return $this->hasMany('App\Entities\Empreendimento');
    }


}
