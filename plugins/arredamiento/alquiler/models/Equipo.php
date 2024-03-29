<?php namespace Arredamiento\Alquiler\Models;

use Model;

/**
 * Equipo Model
 */
class Equipo extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arredamiento_alquiler_equipos';

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
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
