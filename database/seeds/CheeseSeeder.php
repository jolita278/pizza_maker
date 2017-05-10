<?php

use App\Models\PMCheese;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CheeseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @throws Exception
     */
    public function run()
    {
        $cheese = [
            ["id" => "mocarella", "name" => "Mocarela", "calories" => 79],
            ["id" => "cheddar", "name" => "Čederis", "calories" => 123],
            ["id" => "swiss", "name" => "Šveicariškas", "calories" => 98],
        ];

        DB::beginTransaction();

        try {
            foreach ($cheese as $single) {
                $record = PMCheese::find($single['id']);

                if (!$record)
                    PMCheese::create($single);
            }
        } catch (Exception $e)
        {
            DB::rollback();
            throw new Exception($e);
        }
        DB::commit();
    }
}
