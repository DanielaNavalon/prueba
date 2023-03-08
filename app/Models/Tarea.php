<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $NombreTarea
 * @property $Descripcion
 * @property $FechaInicio
 * @property $FechaFind
 * @property $created_at
 * @property $updated_at
 *
 * @property EmpTarea[] $empTareas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    static $rules = [
		'NombreTarea' => 'required',
		'FechaInicio' => 'required',
		'FechaFind' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreTarea','Descripcion','FechaInicio','FechaFind'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empTareas()
    {
        return $this->hasMany('App\Models\EmpTarea', 'idTarea', 'id');
    }
    

}
