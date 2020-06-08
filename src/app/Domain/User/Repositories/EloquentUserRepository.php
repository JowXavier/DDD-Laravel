<?php

namespace App\Domain\Users\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Users\Contracts\UserRepository;
use App\Infrastructure\Abstracts\EloquentRepository;

class EloquentUserRepository extends EloquentRepository implements UserRepository
{
    public function findByFilters()
    {
        //
    }

    public function update(Model $model, array $data): Model
    {
        return $model;
    }
}