<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\LoteRepository;
use App\Entities\Lote;
use App\Validators\LoteValidator;

/**
 * Class LoteRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class LoteRepositoryEloquent extends BaseRepository implements LoteRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Lote::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return LoteValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
