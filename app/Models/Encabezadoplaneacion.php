<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encabezadoplaneacion
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $programa_id
 * @property $fecha
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Programa $programa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Encabezadoplaneacion extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'programa_id' => 'required',
		'fecha' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','programa_id','fecha','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Models\Programa', 'id', 'programa_id');
    }
    

}
