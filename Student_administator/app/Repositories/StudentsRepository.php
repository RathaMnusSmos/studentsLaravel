<?php

namespace App\Repositories;

use App\Models\Students;
use App\Repositories\BaseRepository;

class StudentsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'firstname',
        'lastname',
        'email',
        'phone'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Students::class;
    }
}
