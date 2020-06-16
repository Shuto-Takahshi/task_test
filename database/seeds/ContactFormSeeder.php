<?php

use App\Models\ContactForm;
use Illuminate\Database\Seeder;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 200個のダミーデータを作成
        factory(ContactForm::class, 200)->create();
    }
}
