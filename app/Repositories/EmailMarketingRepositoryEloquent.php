<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EmailMarketingRepository;
use App\Entities\EmailMarketing;
use App\Validators\EmailMarketingValidator;

/**
 * Class EmailMarketingRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EmailMarketingRepositoryEloquent extends BaseRepository implements EmailMarketingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EmailMarketing::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
