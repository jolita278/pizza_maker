<?php

namespace App\Models;

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

    /**
     * Takes pad data from DB
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     */
    public function padData()
    {
        return $this->hasOne(PMPad::class, 'id', 'pad_id');
    }

    /**
     * Returns Cheese data from DB
     * @return mixed
     *
     */
    public function cheeseData()
    {
        return $this->hasOne(PMCheese::class, 'id', 'cheese_id');
    }

    /**
     * Takes user data from DB
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     */
    public function userData()
    {
        return $this->hasOne(PMUsers::class, 'id', 'user_id');
    }

    /**
     * Returns Ingredients data
     * @return mixed
     *
     */
    public function ingredientsConnectionData()
    {
        return $this->belongsToMany(PMIngredients::class, 'pm_pizza_ingredients_conn', 'pizza_id', 'ingredients_id');
    }
    
    /**
     * Returns Ingredients data
     * @return mixed
     *
     */
    public function pizzaIngredientsConnectionData()
    {
        return $this->hasMany(PMPizzaIngredientsConnections::class, 'pizza_id', 'id')->with(['ingredientsData']);
    }
}
