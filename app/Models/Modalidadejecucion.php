<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modalidadejecucion
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Programa[] $programas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modalidadejecucion extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programas()
    {
        return $this->hasMany('App\Models\Programa', 'modalidadejecucion_id', 'id');
    }
    

}
