<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ThumbnailRepository;
use App\Entities\Thumbnail;
use App\Validators\ThumbnailValidator;

/**
 * Class ThumbnailRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ThumbnailRepositoryEloquent extends BaseRepository implements ThumbnailRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Thumbnail::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ThumbnailValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
