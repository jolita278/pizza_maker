<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaIngredientsConnections extends Model
{
    public $updated_at = false;
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_pizza_ingredients_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['pizza_id', 'ingredients_id'];
}
