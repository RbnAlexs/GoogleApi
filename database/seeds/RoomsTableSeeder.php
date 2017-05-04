<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $rooms = [
        'Carlo corinto' => 'Sala de juntas para 10 personas.',
        'Moschino' => 'Sala de juntas para 5 personas',
        'Paris Hilton' => 'Sala de juntas para 6 personas',
      ];

      foreach ($rooms as $name => $description) {
        DB::table('rooms')->insert([
            'name' => $name,
            'description' => $description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
      }
    }
}
