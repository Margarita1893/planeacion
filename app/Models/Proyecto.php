<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $codigo
 * @property $codigo_proyecto
 * @property $nombre
 * @property $programa_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Faseproyecto[] $faseproyectos
 * @property Programa $programa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'codigo_proyecto' => 'required',
		'nombre' => 'required',
		'programa_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','codigo_proyecto','nombre','programa_id','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faseproyectos()
    {
        return $this->hasMany('App\Models\Faseproyecto', 'proyecto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Models\Programa', 'id', 'programa_id');
    }
    

}
