<?php

use Illuminate\Database\Seeder;

class PaymentNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = $faker = Faker\Factory::create();
  
            DB::table('payment_number')->insert(
                 [
                     'id' => 1,
                     'name' => 24
                 ]
            );


//        foreach ($tests as $key) {
//
//        }
    }
}
