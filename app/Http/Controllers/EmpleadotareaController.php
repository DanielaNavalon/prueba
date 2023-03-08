<?php

namespace App\Http\Controllers;

use App\Models\Empleadotarea;
use App\Models\Empleado;
use App\Models\Tarea;
use Illuminate\Http\Request;

/**
 * Class EmpleadotareaController
 * @package App\Http\Controllers
 */
class EmpleadotareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleadotareas = Empleadotarea::paginate();

        return view('empleadotarea.index', compact('empleadotareas'))
            ->with('i', (request()->input('page', 1) - 1) * $empleadotareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleadotarea = new Empleadotarea();
        $empleado= Empleado::pluck('nombreempleado', 'id');
        $tarea= Tarea::pluck('nombretarea', 'id');
        return view('empleadotarea.create', compact('empleadotarea', 'empleado', 'tarea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empleadotarea::$rules);

        $empleadotarea = Empleadotarea::create($request->all());

        return redirect()->route('empleadotareas.index')
            ->with('success', 'Empleadotarea created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleadotarea = Empleadotarea::find($id);

        return view('empleadotarea.show', compact('empleadotarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleadotarea = Empleadotarea::find($id);
        $empleado= Empleado::pluck('nombreempleado', 'id');
        $tarea= Tarea::pluck('nombretarea', 'id');

        return view('empleadotarea.edit', compact('empleadotarea', 'empleado', 'tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleadotarea $empleadotarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleadotarea $empleadotarea)
    {
        request()->validate(Empleadotarea::$rules);

        $empleadotarea->update($request->all());

        return redirect()->route('empleadotareas.index')
            ->with('success', 'Empleadotarea updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleadotarea = Empleadotarea::find($id)->delete();

        return redirect()->route('empleadotareas.index')
            ->with('success', 'Empleadotarea deleted successfully');
    }
}
