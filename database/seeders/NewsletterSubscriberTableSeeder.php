<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewsletterSubscriber;

class NewsletterSubscriberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriberRecords = [
            ['id' => 1, 'email' => 'adamzahran72@gmail.com', 'status'=> 1],
            ['id' => 2, 'email' => 'adamzahran7293@gmail.com', 'status'=> 1],
        ];
        NewsletterSubscriber::insert($subscriberRecords);
    }
}
