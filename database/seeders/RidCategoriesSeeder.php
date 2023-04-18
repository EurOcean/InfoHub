<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RidCategory;
use File;

class RidCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RidCategory::truncate();

        $json = File::get(public_path("json_db/rid/rid_categories.json"));
        $rid_categories = json_decode($json);

        foreach ($rid_categories as $key => $value) {
            RidCategory::create([
                "id_category" => $value->ID_Category,
                "category" => $value->Category,
            ]);
        }
    }
}
