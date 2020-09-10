<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmpreendimentoImageRepository;
use App\Entities\EmpreendimentoImage;
use App\Validators\EmpreendimentoImageValidator;

/**
 * Class EmpreendimentoImageRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmpreendimentoImageRepositoryEloquent extends BaseRepository implements EmpreendimentoImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EmpreendimentoImage::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EmpreendimentoImageValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
