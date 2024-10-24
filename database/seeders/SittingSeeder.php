<?php

namespace Database\Seeders;

use App\Models\Sitting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SittingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('sittings')->insert([
            'name' => 'Pount',
            'email' => 'https://pountpaints.com/',
            'phone_number' => '01001018277',
            'address' => '1865',
            'company_message' => 'hi',
            'about' => 'about',
        ]);
    }
}
