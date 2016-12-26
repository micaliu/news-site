<?php

namespace App\Repositories;

use App\Models\Section;

class SectionRepository extends BaseRepository
{

    public function __construct(Section $section)
    {
        $this->model = $section;
    }
    public function getAllSections($n)
    {
        return $this->model->paginate($n);
    }
}