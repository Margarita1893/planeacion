<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultadoaprendizaje
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $competencia_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Competencia $competencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resultadoaprendizaje extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'competencia_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','competencia_id','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function competencia()
    {
        return $this->hasOne('App\Models\Competencia', 'id', 'competencia_id');
    }
    

}
