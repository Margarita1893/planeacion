<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Competencia
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $programa_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Programa $programa
 * @property Resultadoaprendizaje[] $resultadoaprendizajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Competencia extends Model
{
    
    static $rules = [
		'codigo' => 'required',
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
    protected $fillable = ['codigo','nombre','programa_id','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Models\Programa', 'id', 'programa_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultadoaprendizajes()
    {
        return $this->hasMany('App\Models\Resultadoaprendizaje', 'competencia_id', 'id');
    }
    

}
