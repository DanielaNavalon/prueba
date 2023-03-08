<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $NombreEmpresa
 * @property $CIF
 * @property $Localidad
 * @property $Direccion
 * @property $Email
 * @property $DireccionWeb
 * @property $Telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado[] $empleados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'NombreEmpresa' => 'required',
		'CIF' => 'required',
		'Localidad' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'DireccionWeb' => 'required',
		'Telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreEmpresa','CIF','Localidad','Direccion','Email','DireccionWeb','Telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'idEmpresa', 'id');
    }
    

}
