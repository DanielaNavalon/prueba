<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $idEmpresa
 * @property $NombreEmpleado
 * @property $DNI
 * @property $Email
 * @property $Telefono
 * @property $Localidad
 * @property $Direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property EmpTarea[] $empTareas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'idEmpresa' => 'required',
		'NombreEmpleado' => 'required',
		'DNI' => 'required',
		'Email' => 'required',
		'Telefono' => 'required',
		'Localidad' => 'required',
		'Direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpresa','NombreEmpleado','DNI','Email','Telefono','Localidad','Direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'idEmpresa');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empTareas()
    {
        return $this->hasMany('App\Models\EmpTarea', 'idEmpleado', 'id');
    }
    

}
