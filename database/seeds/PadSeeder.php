<?php

use App\Models\PMPad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pad = [
            ["id" => "pilno", "name" => "Pilno grūdo miltų picos padas", "calories" => 197],
            ["id" => "mielinis", "name" => "Mielinis picos padas", "calories" => 378],
        ];

        DB::beginTransaction();

        try {
            foreach ($pad as $single) {
                $record = PMPad::find($single['id']);

                if (!$record)
                    PMPad::create($single);
            }
        } catch (Exception $e)
        {
            DB::rollback();
            throw new Exception($e);
        }
        DB::commit();

    }
}
