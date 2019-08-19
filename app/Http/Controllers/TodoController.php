<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->get('query');
        $todo = Todo::where('list' , 'like' , "%{$search}%")->paginate(10);
        return view('todo.index')->with('todos' , $todo);
    }

    public function index()
    {
        $todo = Todo::orderBy('id' , 'desc')->paginate(20);
        return view('todo.index')->with('todos', $todo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'list' => 'required',
            'description' => 'required',
        ]);


        $todo = new Todo;
        $todo->list = $request->list;
        $todo->description = $request->description;
        $todo->save();

        return redirect('todo')->with('success' , 'Todo has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todo.show')->with('todo' , $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todo.edit')->with('todo' , $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'list' => 'required',
            'description' => 'required',
        ]);

        $todo = Todo::findOrFail($id);
        $todo->list = $request->list;
        $todo->description = $request->description;
        $todo->save();

        return redirect('todo')->with('success' , 'Todo has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect('todo')->with('deleted' , 'Todo has been deleted successfully');
    }

    public function complete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->completed = true;

        $todo->save();

         return redirect('todo')->with('success' , 'Todo has been completed successfully');
    }


}
