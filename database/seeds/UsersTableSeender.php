<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
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
             'email' => 'ruben@mktv.mx',
             'password' => Hash::make('holamundo'),
         ]);

    }
}