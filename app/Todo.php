<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\TodoFilter;

class Todo extends Model
{
    protected $fillable = ['title', 'description'];

    public function scopeFilter($query, TodoFilter $filters) 
    {
        return $filters->apply($query);
    }
}
