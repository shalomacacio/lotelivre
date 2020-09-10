<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmpreendimentoDestaqueRepository;
use App\Entities\EmpreendimentoDestaque;
use App\Validators\EmpreendimentoDestaqueValidator;

/**
 * Class EmpreendimentoDestaqueRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmpreendimentoDestaqueRepositoryEloquent extends BaseRepository implements EmpreendimentoDestaqueRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EmpreendimentoDestaque::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EmpreendimentoDestaqueValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
