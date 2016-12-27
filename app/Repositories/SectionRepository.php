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
    public function getSectionItems()
    {
        return $this->model->select('id','name')->orderBy('id', 'asc');
    }
    public function store($inputs)
    {
        $sect = new Section;
        $sect->name = $inputs['name'];
        $sect->save();

        return redirect('/section');
    }
}