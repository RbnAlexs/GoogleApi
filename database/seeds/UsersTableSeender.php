<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       

         User::create([
             'name' => 'Ruben Sanchez',
             'username' => 'rsanchez',
             'password' => 'holamundo'
         ]);

    }
}