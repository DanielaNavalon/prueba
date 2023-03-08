<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleadotarea
 *
 * @property $id
 * @property $idEmpleado
 * @property $idTarea
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Tarea $tarea
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleadotarea extends Model
{
    
    static $rules = [
		'idEmpleado' => 'required',
		'idTarea' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpleado','idTarea'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'idEmpleado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarea()
    {
        return $this->hasOne('App\Models\Tarea', 'id', 'idTarea');
    }
    

}
