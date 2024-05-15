<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Todo::orderBy('task', 'asc')->get();
        return view("todo.app",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|min:3|max:25',
        ], [
            'taks.required'=>'Isian task wajib diisikan',
            'taks.min'=>'Minimal isian taks adalah 3 karakter',
            'taks.max'=>'Maximum isian taks adalah 24 karakter',
        ]);

        $data = [
            'task'=>$request->input('task')
        ];

        Todo::create($data);

        return redirect()->route('todo')->with('success','Berhasil simpan data');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'task' => 'required|min:3|max:25',
        ], [
            'taks.required'=>'Isian task wajib diisikan',
            'taks.min'=>'Minimal isian taks adalah 3 karakter',
            'taks.max'=>'Maximum isian taks adalah 24 karakter',
        ]);

        $data = [
            'task'=>$request->input('task'),
            'id_done'=>$request->input('id_done')
        ];
        Todo::where('id', $id)->update($data);
        return redirect()->route('todo')->with('success','Berhasil menyimpan perbaikan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
