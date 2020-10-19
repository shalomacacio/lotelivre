<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmpreendimentoGaleriaRepository;
use App\Entities\EmpreendimentoGaleria;
use App\Validators\EmpreendimentoGaleriaValidator;

/**
 * Class EmpreendimentoGaleriaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmpreendimentoGaleriaRepositoryEloquent extends BaseRepository implements EmpreendimentoGaleriaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EmpreendimentoGaleria::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EmpreendimentoGaleriaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
