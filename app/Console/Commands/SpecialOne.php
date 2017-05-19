<?php

namespace App\Console\Commands;

use App\Models\PMIngredients;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class SpecialOne extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:one';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'new one every houre';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        cache()->put('super-ingredient', PMIngredients::all()->random(1)->first()->id, 1);
    }
}
