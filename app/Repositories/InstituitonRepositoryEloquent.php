<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\InstituitonRepository;
use App\Entities\Instituiton;
use App\Validators\InstituitonValidator;

/**
 * Class InstituitonRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class InstituitonRepositoryEloquent extends BaseRepository implements InstituitonRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Instituiton::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return InstituitonValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
