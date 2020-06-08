<?php

namespace NomeProjeto\Domain\Users\Repositories;

use Illuminate\Database\Eloquent\Model;
use NomeProjeto\Domain\Users\Contracts\UserRepository;
use NomeProjeto\Infrastructure\Abstracts\EloquentRepository;

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