<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(RoomuserTableSeeder::class);
    }

}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Vano', 'email' => 'vano_tatysho@gmail.com' , 'email_verified_at' => NULL, 'password' => '$2y$10$TDmQOwfVKH8soqcVIhAjEOp905GcreY9xPo3zi5J0w8KfAoUEO6qy', 'remember_token' => 'IWLkQX0BVNta3kKpiGaX6jGpWgudcXFOajkEzd1RBRcS9Z93jtlbG4dbxYLC', 'created_at' => '2020-08-06 15:27:47', 'updated_at' => '2020-08-06 15:27:47'],
            ['id' => 2, 'name' => 'Vaso', 'email' => 'vaso_nuasho@gmail.com' , 'email_verified_at' => NULL, 'password' => '$2y$10$Lj7Rf0BOm3vMxyL0LdZoV./x8ctXN56os7AldD2SjpYJfzA4VrD2u', 'remember_token' => 'NSEadorqgUcD5kVXnjhqxfIqiN980QokKF8eEO4klT2ARbJin6L6E05sXC2e', 'created_at' => '2020-08-06 15:30:45', 'updated_at' => '2020-08-06 15:30:45'],
        ]);
    }

}

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['id' => '1', 'name' => 'Первая комната', 'created_at' => '2020-07-21 12:29:24', 'updated_at' => '2020-07-21 12:29:24'],
            ['id' => '2', 'name' => 'Вторая комната', 'created_at' => '2020-07-21 12:30:03', 'updated_at' => '2020-07-21 12:30:03']
        ]);
    }

}

class RoomuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_user')->insert([
            ['room_id' => 1, 'user_id' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['room_id' => 2, 'user_id' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['room_id' => 1, 'user_id' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['room_id' => 2, 'user_id' => 2, 'created_at' => NULL, 'updated_at' => NULL]
        ]);
    }

}