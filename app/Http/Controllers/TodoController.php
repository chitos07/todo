<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /**
        *  Get All Todo From Table 
        *
        *  @param object App\Todo
        *  @return object
        */

        $todo = Todo::latest()->paginate(8);

       


        //  return  todo view and give it the todo data 
        return view('todos.todo', compact('todo'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([

               'title' => ['required', 'string', 'max:255','min:10'],
              'description' => ['required','string','max:255','min:10']
            
                ]);

           Todo::create([

                'title' => $request->title,
                'description' => $request->description,
                'completed' => 0

           ]);     

           $request->session()->flash('success','Todo Created Successfully');

           return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
         $request->validate([

            'title' => ['required', 'string', 'max:255','min:10'],
           'description' => ['required','string','max:255','min:10'],
           'completed' => ['required']
         
             ]);

           $todo->update($request->all());

           $request->session()->flash('success','Todo Updated Successfully');
            return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        request()->session()->flash('success','Todo Deleted Successfully');

        return back();
    }

    public function Done(Todo $todo)
    {
           $todo->update(['completed' => 1]);
           request()->session()->flash('success','Todo Has Completed Successfully');

           return back();


    }
}
