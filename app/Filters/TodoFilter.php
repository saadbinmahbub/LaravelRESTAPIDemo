<?php

namespace App\Filters;

class TodoFilter extends Filters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = ['title', 'sort_by'];

    /**
     * Filter the query by title.
     *
     * @param  string $title
     * @return
     */
    protected function title($title)
    {
        return $this->builder
        ->where('title', 'like', '%' . $title . '%');
    }

    /**
     * Filter the query by a description.
     *
     * @param  string $username
     * @return
     */
    protected function description($description)
    {
        return $this->builder
        ->where('description', 'like', '%' . $description . '%');
    }

    protected function sort_by($sort_by)
    {
        $sort_by = explode('.', $sort_by);
        $sort_by[1] == 1 ? $sort_by[1] = 'asc' : $sort_by[1] = 'desc';
        return $this->builder->orderBy($sort_by[0], $sort_by[1]);
    }
}