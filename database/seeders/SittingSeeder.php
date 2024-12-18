<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Sitting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SittingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('sittings')->insert([
            'name' => 'PountPaints',
            'email' => 'info@pountpaints.com',
            'phone_number' => '01001018277',
            'address_1' => 'المعرض: مول ٢٢ محور مصطفي كامل التجمع الاول',
            'address_2' => 'المصنع : 67 المنطقة الصناعية مدينة بدر',
            'company_message' => 'hi',
            'about' =>  'متخصصون في مادة الواجهات الخارجية مثل جرافياتو اكريلك (جرافيت كوت)       اوت ميكس.     جرافياتو اسمنتي.     اديتكس.    بلاتين 1900
وايت وول معجون اكريلك داخلي.     اوبتيما3000.     ألترون 7000.   سوبر اومبتيما',
            'code_pixel' => '‍',
            'google_tag' => '‍',
        ]);

        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' =>Hash::make("123456")
        ]);

    }
}
