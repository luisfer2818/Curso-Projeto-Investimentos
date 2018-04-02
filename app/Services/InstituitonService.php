<?php 

namespace App\Services;

use App\Repositories\InstituitonRepository;
use App\Validators\InstituitonValidator;

class InstituitonService
{
    private $repository;
    private $validator;

    public __construct(InstitutonRepository $repository, InstitutonValidator $validator)
    {
        $this->repository = $repository;
    }
}