<?php namespace Arredamiento\Alquiler\Models;

use Model;

/**
 * Proyecto Model
 */
class Proyecto extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arredamiento_alquiler_proyectos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'pedidos'  => '\Arredamiento\Alquiler\pedidos',
        'equipos'  => '\Arredamiento\Alquiler\equipos',
        'users'      => '\Backend\Models\User'
    ];
    public $belongsTo = [

    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


    public function getUsersOptions()
    {
        return \Backend\Models\User::lists('login', 'id');
    }

    public $rules = [
        'name' => 'required'
    ];


}
