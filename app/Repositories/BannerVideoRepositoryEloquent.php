<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BannerVideoRepository;
use App\Entities\BannerVideo;
use App\Validators\BannerVideoValidator;

/**
 * Class BannerVideoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BannerVideoRepositoryEloquent extends BaseRepository implements BannerVideoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BannerVideo::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BannerVideoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
