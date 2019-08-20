<?php namespace Arredamiento\Alquiler\Models;

use Model;
use \October\Rain\Database\Traits\Validation;


/**
 * Pedido Model
 */
class Pedido extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arredamiento_alquiler_pedidos';

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
    ];
    public $belongsTo = [
        'proyecto' => '\Arredamiento\Alquiler\Models\proyecto',
        'equipo' => '\Arredamiento\Alquiler\Models\equipo'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getTeamIdOptions()
    {
        $pedidos = \Arredamiento\Alquiler\Models\pedido::all(['id', 'name']);
        $pedidosOptions = [];

        $pedidos->each(function($pedido) use (&$pedidosOptions) {
            $pedidosOptions[$pedido->id] = $pedido->name;
        });

        return $pedidosOptions;
    }


}
