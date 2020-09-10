<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BannerPromocionalRepository;
use App\Entities\BannerPromocional;
use App\Validators\BannerPromocionalValidator;

/**
 * Class BannerPromocionalRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BannerPromocionalRepositoryEloquent extends BaseRepository implements BannerPromocionalRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BannerPromocional::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BannerPromocionalValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
