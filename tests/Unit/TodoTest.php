<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    public function test_can_list_todos()
    {
        $data = factory(\App\Todo::class)->create()->toArray();
        $this->get(route('todos'))->assertStatus(200)
        ->assertJsonStructure([
            'data' => [['id', 'title', 'description']]
        ]);
    }

    public function test_can_create_todo() 
    {
        $data = factory(\App\Todo::class)->make()->toArray();
        $this->post(route('todos.store'), $data)
        ->assertStatus(201)
        ->assertJson($data);
    }

    public function test_cannot_create_todo_without_data() 
    {
        $data = [];
        $this->post(route('todos.store'), $data)
        ->assertStatus(422);
    }
    
    public function test_can_show_todo() 
    {
        $todo = factory(\App\Todo::class)->create()->toArray();
        $this->get(route('todos.show', $todo['id']))
        ->assertStatus(200);
    }
    
    public function test_can_update_todo() 
    {
        $todo = factory(\App\Todo::class)->create()->toArray();
        $data = [
            'title' => 'PHPunit Tests',
            'description' => 'PHPunit Tests Description'
        ];
        $this->put(route('todos.update', $todo['id']), $data)
        ->assertStatus(200)
        ->assertJson($data);
    }
    
    public function test_can_delete_todo()
    {
        $todo = factory(\App\Todo::class)->create()->toArray();
        $this->delete(route('todos.delete', $todo['id']))
        ->assertStatus(204);
    }
}
