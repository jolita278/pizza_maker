<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaIngredientsConnections extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_pizza_ingridients_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['pizza_id', 'ingridients_id'];
}
