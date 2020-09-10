<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmpreendimentoItensRepository;
use App\Entities\EmpreendimentoItens;
use App\Validators\EmpreendimentoItensValidator;

/**
 * Class EmpreendimentoItensRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmpreendimentoItensRepositoryEloquent extends BaseRepository implements EmpreendimentoItensRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EmpreendimentoItens::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EmpreendimentoItensValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
