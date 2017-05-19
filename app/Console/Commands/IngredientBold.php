<?php

namespace App\Console\Commands;

use App\Models\PMIngredients;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class IngredientBold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ingredient:bold';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'picks random ingredient id';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        //Cache::put('super-ingredient' , PMIngredients::all()->random(1)->first()->id, 120);
      cache()->put('super-ingredient' , PMIngredients::all()->random(1)->first()->id, 120);
    }
}
