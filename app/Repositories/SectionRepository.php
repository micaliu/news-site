<?php

namespace App\Repositories;

use App\Models\Section;

class SectionRepository extends BaseRepository
{
    /**
     * Create a new SectionRepository instance.
     *
     * @param  \App\Models\Section $Section
     * @return void
     */
    public function __construct(Section $section)
    {
        $this->model = $section;
    }
    public function getAllSections($n)
    {
        return $this->model->paginate($n);
    }
    protected function Store($inputs)
    {
        return $this->save($section, $inputs);
    }
}