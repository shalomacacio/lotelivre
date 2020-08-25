<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmpreendimentoRepository;
use App\Entities\Empreendimento;
use App\Validators\EmpreendimentoValidator;

/**
 * Class EmpreendimentoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmpreendimentoRepositoryEloquent extends BaseRepository implements EmpreendimentoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Empreendimento::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EmpreendimentoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
