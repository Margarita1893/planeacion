<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $tipoprograma_id
 * @property $modalidadejecucion_id
 * @property $version
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Competencia[] $competencias
 * @property Encabezadoplaneacion[] $encabezadoplaneacions
 * @property Modalidadejecucion $modalidadejecucion
 * @property Proyecto[] $proyectos
 * @property Tipoprograma $tipoprograma
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programa extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'tipoprograma_id' => 'required',
		'modalidadejecucion_id' => 'required',
		'version' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','tipoprograma_id','modalidadejecucion_id','version','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function competencias()
    {
        return $this->hasMany('App\Models\Competencia', 'programa_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function encabezadoplaneacions()
    {
        return $this->hasMany('App\Models\Encabezadoplaneacion', 'programa_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modalidadejecucion()
    {
        return $this->hasOne('App\Models\Modalidadejecucion', 'id', 'modalidadejecucion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'programa_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoprograma()
    {
        return $this->hasOne('App\Models\Tipoprograma', 'id', 'tipoprograma_id');
    }
    

}
