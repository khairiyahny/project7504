<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'question' => 'Apa itu Laravel?',
            'answer' => 'Laravel adalah framework backend untuk web.',
            'is_visible' => true,
        ]);

        Faq::create([
            'question' => 'Halo?',
            'answer' => 'Hai.',
            'is_visible' => true,
        ]);
        Faq::create([
            'question' => 'Apa itu Laravel?',
            'answer' => 'Laravel adalah framework backend untuk web.',
            'is_visible' => true,
        ]);

        Faq::create([
            'question' => 'Tidak ditampilkaaan',
            'answer' => 'hoho.',
            'is_visible' => false,
        ]);
        Faq::create([
            'question' => 'Apa itu Laravel?',
            'answer' => 'Laravel adalah framework backend untuk web.',
            'is_visible' => true,
        ]);

        Faq::create([
            'question' => 'abc sampe z',
            'answer' => 'oke',
            'is_visible' => false,
        ]);
    }
}
