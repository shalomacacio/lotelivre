<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class EmpreendimentoImage.
 *
 * @package namespace App\Entities;
 */
class EmpreendimentoImage extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function empreendimentos(){
      return $this->belongsTo('App\Entities\Empreendimento');
    }

}
