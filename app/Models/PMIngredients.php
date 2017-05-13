<?php

namespace App\Models;

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
