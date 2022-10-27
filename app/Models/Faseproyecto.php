<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faseproyecto
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $proyecto_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto $proyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Faseproyecto extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'proyecto_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','proyecto_id','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'id', 'proyecto_id');
    }
    

}
