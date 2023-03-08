<?php

namespace App\Http\Controllers;

use App\Models\EmpTarea;
use Illuminate\Http\Request;

/**
 * Class EmpTareaController
 * @package App\Http\Controllers
 */
class EmpTareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empTareas = EmpTarea::paginate();

        return view('emp-tarea.index', compact('empTareas'))
            ->with('i', (request()->input('page', 1) - 1) * $empTareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empTarea = new EmpTarea();
        return view('emp-tarea.create', compact('empTarea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EmpTarea::$rules);

        $empTarea = EmpTarea::create($request->all());

        return redirect()->route('emp-tareas.index')
            ->with('success', 'EmpTarea created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empTarea = EmpTarea::find($id);

        return view('emp-tarea.show', compact('empTarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empTarea = EmpTarea::find($id);

        return view('emp-tarea.edit', compact('empTarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EmpTarea $empTarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpTarea $empTarea)
    {
        request()->validate(EmpTarea::$rules);

        $empTarea->update($request->all());

        return redirect()->route('emp-tareas.index')
            ->with('success', 'EmpTarea updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empTarea = EmpTarea::find($id)->delete();

        return redirect()->route('emp-tareas.index')
            ->with('success', 'EmpTarea deleted successfully');
    }
}
