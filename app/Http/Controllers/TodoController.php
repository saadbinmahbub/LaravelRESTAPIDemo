<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Filters\TodoFilter;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(Request $request, TodoFilter $filter) 
    {
        $todos = Todo::filter($filter)->paginate();
        return response()->json($todos);
    }

    public function store(TodoRequest $request)
    {
        $todo = Todo::create($request->all());
        return response()->json($todo, 201);
    }

    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    public function update(Todo $todo, TodoRequest $request) 
    {
        $todo->update($request->all());
        return response()->json($todo);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return response()->json(null, 204);
    }
}
