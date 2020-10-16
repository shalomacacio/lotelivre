<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmpreendimentoDepoimentoRepository;
use App\Entities\EmpreendimentoDepoimento;
use App\Validators\EmpreendimentoDepoimentoValidator;

/**
 * Class EmpreendimentoDepoimentoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmpreendimentoDepoimentoRepositoryEloquent extends BaseRepository implements EmpreendimentoDepoimentoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EmpreendimentoDepoimento::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EmpreendimentoDepoimentoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
