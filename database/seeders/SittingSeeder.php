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
            'name' => 'Mahmoud',
            'email' => 'mahmoud@gmail.com',
            'phone_number' => '01023456789',
            'about' => 'about',
        ]);
    }
}
