<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        // \App\Models\User::factory(10)->create();
        $this->call([
            initialUserSeeder::class,
            kg_tbl_ContinentsSeeder::class,
            kg_tbl_CountriesSeeder::class,
            kg_tbl_InstitutionsSeeder::class,
            kg_tbl_Partnerships::class,
            kg_tbl_ProgrammersSeeder::class,
            kg_tbl_ProjectInstitutions::class,
            kg_tbl_ProjectSeeder::class,
            rid_dob_InstitutionsSeeder::class,
            rid_dob_InfrastructureSeeder::class,
            RidRelInfrastructureInstitutionsSeeder::class,
            RVModuleSeeder::class,
            PicNumberSeeder::class,
            RidCategoriesSeeder::class,
            KG_RID_mergeSeeder::class,
        ]);
    }
}
