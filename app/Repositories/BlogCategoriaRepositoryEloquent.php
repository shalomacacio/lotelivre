<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BlogCategoriaRepository;
use App\Entities\BlogCategoria;
use App\Validators\BlogCategoriaValidator;

/**
 * Class BlogCategoriaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BlogCategoriaRepositoryEloquent extends BaseRepository implements BlogCategoriaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BlogCategoria::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BlogCategoriaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
