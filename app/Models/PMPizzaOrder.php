<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaOrder extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_pizza_order';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'pad_id', 'cheese_id', 'description', 'user_id'];
}
