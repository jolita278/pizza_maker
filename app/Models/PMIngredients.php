<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMIngredients extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_ingredients';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
