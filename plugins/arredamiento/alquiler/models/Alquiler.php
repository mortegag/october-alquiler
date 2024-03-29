<?php namespace Arredamiento\Alquiler\Models;

use Model;

/**
 * Alquiler Model
 */
class Alquiler extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arredamiento_alquiler_alquilers';

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
