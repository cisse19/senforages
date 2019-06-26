<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(AdministrateursTableSeeder::class);
        $this->call(GestionnairesTableSeeder::class);
        $this->call(VillagesTableSeeder::class);
        $this->call(ComptablesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ConsommationsTableSeeder::class);

    }
}
