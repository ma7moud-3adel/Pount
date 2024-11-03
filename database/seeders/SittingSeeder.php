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
            'name' => 'PountPaints',
            'email' => 'info@pountpaints.com',
            'phone_number' => '01001018277',
            'address_1' => 'المعرض: مول ٢٢ محور مصطفي كامل التجمع الاول',
            'address_2' => 'المصنع : 67 المنطقة الصناعية مدينة بدر',
            'company_message' => 'hi',
            'about' => 'متخصصون فى صناعة مادة الواجهات مثلجرافياتو اكريلك – ماربل – جرانوليت – المادة الاسمنتية – معجون البلاستيك والسيلر والعديد من المواد التى تخضع للأبحاث والتطوير وفقا للمواصفات المحلية والدولية .',
            'code_pixel' => '‍',
            'google_tag' => '‍',
        ]);
    }
}
