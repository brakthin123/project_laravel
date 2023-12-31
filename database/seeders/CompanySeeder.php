<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        $contacts = [];

        foreach (range(1, 50) as $index) {

            $contact = [

                'first_name' => 'First name ' . $index,

                'last_name' => 'Last name ' . $index,

                'phone' => 'Phone' . $index,

                'email' => 'email' . $index . '@company.com',

                'address' => 'Address ' . $index,

                'company_id' => random_int(1, 9),

                'created_at' => now(),

                'updated_at' => now()

            ];

            $contacts[] = $contact;
        }

        DB::table('contacts')->truncate();

        DB::table('contacts')->insert($contacts);
    }
}
