<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BlogComentariosRepository;
use App\Entities\BlogComentarios;
use App\Validators\BlogComentariosValidator;

/**
 * Class BlogComentariosRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BlogComentariosRepositoryEloquent extends BaseRepository implements BlogComentariosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BlogComentarios::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BlogComentariosValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
