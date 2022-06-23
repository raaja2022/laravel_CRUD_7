<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{   
    public function index()
    {
        //
    }

    public function create()
    {
        return view('todo_create');
    }

    public function store(Request $request)
    {
        $res = new Todo;
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->save();

        $request->session()->flash('mgs','Record Save Succesfully');
        return redirect('todo_show');
    }

    public function show(Todo $todo)
    {
        return view('todo_show')->with('row',Todo::all());
        //return view('todo_show')->with('row',Todo::orderBy('id', 'desc')->get());
    }

    public function edit(Todo $todo, $id)
    {
        return view('todo_edit')->with('row',Todo::find($id));
    }

    public function update(Request $request, Todo $todo)
    {
        $res = Todo::find($request->id);
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->save();

        $request->session()->flash('mgs','Record Update Succesfully');
        return redirect('todo_show');
    }

    public function destroy(Todo $todo, $id)
    {
        Todo::destroy(array('id', $id));
        return redirect('todo_show');
    }
}
