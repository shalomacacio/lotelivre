<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BannerRotativoRepository;
use App\Entities\BannerRotativo;
use App\Validators\BannerRotativoValidator;

/**
 * Class BannerRotativoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BannerRotativoRepositoryEloquent extends BaseRepository implements BannerRotativoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BannerRotativo::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BannerRotativoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
