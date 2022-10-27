<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividadproyecto
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $faseproyecto_id
 * @property $descripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividadproyecto[] $actividadproyectos
 * @property Actividadproyecto $actividadproyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividadproyecto extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'faseproyecto_id' => 'required',
		'descripcion' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','faseproyecto_id','descripcion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividadproyectos()
    {
        return $this->hasMany('App\Models\Actividadproyecto', 'faseproyecto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividadproyecto()
    {
        return $this->hasOne('App\Models\Actividadproyecto', 'id', 'faseproyecto_id');
    }
    

}
